<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $title = 'Mapa policejních radarů';

        $measurePlaceRepository = $this->getDoctrine()->getRepository('AppBundle:MeasurePlace');
        $applicationRepository   = $this->getDoctrine()->getRepository('AppBundle:Application');

        $measurePlaces = $measurePlaceRepository->findAll();
        $applications  = $applicationRepository->findAll();
        $application   = reset($applications);

        return $this->render('Default/index.html.twig', [
            'title'         => $title,
            'measurePlaces' => $measurePlaces,
            'keywords'      => $application->getKeywords(),
            'description'   => $application->getDescription(),
        ]);
    }

}
