<?php

namespace Acme\ErrorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeErrorBundle::index.html.twig');
    }

	public function subrequestAction()
	{
        return $this->render('AcmeErrorBundle::subrequest.html.twig', array('foo' => new Foo()));
	}
}
