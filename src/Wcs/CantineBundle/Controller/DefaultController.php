<?php

namespace Wcs\CantineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WcsCantineBundle:Default:index.html.twig', array('name' => $name));
    }
}
