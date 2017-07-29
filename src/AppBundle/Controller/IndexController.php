<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class IndexController extends Controller {
	/**
	 * @Route ("/", name="homepage_index")
	 */
	public function IndexController (Request $request) {
		return $this->render ("default/index.html.twig");
	}

}