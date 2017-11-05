<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ContactMessage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactController extends Controller
{
    /**
     * @Route("/kontakt", name="contact")
     */
    public function indexAction(Request $request)
    {
        $contactMessage = new ContactMessage();

        $form = $this->createFormBuilder($contactMessage)
            ->add('email', null, ['label' => 'Vaše e-mailová adresa'])
            ->add('antispam', null, [
                'label'       => 'Zadejte aktuální rok (antispam)',
                'mapped'      => false,
                'constraints' => [
                    new NotBlank(['message' => 'Pole pro aktuální rok nesmí být prázdné!']),
                    new EqualTo(['value' => date("Y"), 'message' => 'Chybně vyplněný antispam'])
                ]
            ])
            ->add('message', TextareaType::class, ['label' => 'Zpráva'])
            ->add('submit', SubmitType::class, ['label' => 'Odeslat'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('mailer')->send(\Swift_Message::newInstance()
                ->setSubject('Email z webu řidičskéinfo.cz')
                ->setFrom('info@ridicskeinfo.cz')
                ->setTo('jeldicek@gmail.com')
                ->setBody($contactMessage->getMessage(), 'text/plain'));
            $this->addFlash('notice', 'Váš e-mail byl úspěšně odeslán.');

            return $this->redirectToRoute('contact');
        }

        return $this->render('Contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
