<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ReportPlaceSuccessController extends Controller
{
    /**
     * @Route("/nahlasit-misto-uspech", name="reportPlaceSuccess")
     */
    public function indexAction()
    {
        return new Response('<html><body>Úspěšně odesláno!</body></html>');
    }
}