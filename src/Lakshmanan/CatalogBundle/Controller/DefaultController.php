<?php

namespace Lakshmanan\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LakshmananCatalogBundle:Default:index.html.twig', array('name' => $name));
    }
}
