<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Dinosaur;
use AppBundle\Entity\Enclosure;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $enclosures =  $manager->getRepository(Enclosure::class)->findAll();

        return $this->render('default/index.html.twig', [
            'enclosures' => $enclosures,
        ]);
    }
}
