<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller {

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

    /**
     * @Route("/logout", name="logout")
     */
	public function logoutAction(){
        return $this->render("login/logout.html.twig");
    }


}
