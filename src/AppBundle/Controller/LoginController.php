<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller {

	/**
	 * @Route("/login", name="login")
	 */

	public function loginAction (Request $request, AuthenticationUtils $authUtils) {

		$error = $authUtils->getLastAuthenticationError();
		$lastUsername = $authUtils->getLastUsername();

		return $this->render('login/login.html.twig', array(
			'errors' => $error,
			'username' => $lastUsername

			));

	}


}

/// http://symfony.com/doc/current/security/entity_provider.html