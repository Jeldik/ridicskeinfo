<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MeasurePlace;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\MeasurePlaceType;

class ReportPlaceController extends Controller
{
    /**
     * @Route("/nahlasit-misto", name="reportPlace")
     */
    public function newAction(Request $request)
    {
        $title = 'Nahlásit místo';

        $measurePlace = new MeasurePlace();

        $form = $this->createForm(MeasurePlaceType::class, $measurePlace);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $place = $form->getData();
            $em    = $this->getDoctrine()->getManager();
            $em->persist($place);
            $em->flush();

            $this->addFlash(
                'notice',
                'Děkujeme za nahlášení! Zanedlouho místo zveřejníme.'
            );

            return $this->redirectToRoute('reportPlace');
        }

        return $this->render('/ReportPlace/index.html.twig', [
            'title' => $title,
            'form'  => $form->createView(),
        ]);

    }
}