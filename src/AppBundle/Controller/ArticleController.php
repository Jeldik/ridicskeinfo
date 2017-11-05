<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Repository\ArticleRepository;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    /**
     * @var ArticleRepository $articleRepository
     */
    private $articleRepository = null;

    private function articleRepository()
    {
        if (is_null($this->articleRepository())) {
            $this->articleRepository = $this->container->get('article_repository');
        }

        return $this->articleRepository;
    }

    /**
     * @Route("/seznam-clanku", name = "article_list")
     * @return Response
     */
    public function listAction()
    {
        return $this->render('Article:list.html.twig', [
            'articles' => $this->articleRepository()->getArticles()
        ]);
    }

    /**
     * @Route("/clanky", name="article")
     * @Route("/clanky/{url}", name="article_detail")
     * @return Response
     */
    public function indexAction($url = null)
    {
        $title = 'Články';

        $articleRepository = $this->container->get('article_repository');

        /**
         * @var Article $article
         */
        if ($url && !($article = $articleRepository->getArticle($url))) {
            throw $this->createNotFoundException('Článek s danou URL neexistuje!');
        } elseif ($url) {
            return $this->render('Article/index.html.twig', [
                'title'   => $title,
                'article' => $article,
                'url'     => $url,
            ]);
        }

        $articles = $articleRepository->getArticles();

        return $this->render('Article/index.html.twig', [
            'title'    => $title,
            'articles' => $articles,
        ]);
    }

    /**
     * @param string $url
     * @Route("/odstranit/{url}", name="remove_article")
     *
     * @return RedirectResponse
     */
    public function removeAction($url)
    {
        $this->articleRepository()->removeArticle($url);
        $this->addFlash('notice', 'Článek byl úspěšně odstraněn.');

        return $this->redirectToRoute('article');
    }

    /**
     * @param null|string $url
     * @param Request $request
     * @Route("/editor/{url}", name = "article_editor")
     *
     * @return RedirectResponse|Response
     */
    public function editorAction($url = null, Request $request)
    {
        if ($url && !($article = $this->articleRepository()->getArticle($url))) {
            $this->addFlash('warning', 'Článek nebyl nalezen.');
        }

        if (empty($article)) {
            $article = new Article();
        }

        $form = $this->createFormBuilder($article)
            ->add('title', TextType::class, ['label' => 'Titulek'])
            ->add('url', TextType::class, ['label' => 'URL'])
            ->add('description', TextareaType::class, ['label' => 'Popis'])
            ->add('content', TextareaType::class, ['label' => 'Obsah'])
            ->add('submit', SubmitType::class, ['label' => 'Uložit článek'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $this->articleRepository()->saveArticle($article);
                $this->addFlash('notice', 'Článek byl úspěšně uložen');

                return $this->redirectToRoute('article_list');
            } catch (UniqueConstraintViolationException $ex) {
                $this->addFlash('warning', 'Článek s touto URL adresou již existuje.');
            }
        }

        return $this->render(':Article:editor.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
