<?php

namespace AppBundle\Controller;

use AppBundle\Entity\billsMonthly;
use AppBundle\Form\Type\BillsMonthlyType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class FormController extends Controller {
	/**
	 * @Route ("/form", name="form_entry")
	 */
	public function formAddAction (Request $request) {
		$form = $this->createForm(BillsMonthlyType::class);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			
			$em = $this->getDoctrine()->getManager();
			
			$billsMonthly = $form->getData();
			
			$em->persist($billsMonthly);
			$em->flush();

			return $this->redirecToRoute("form_entry");
		}

		return $this->render ('default/form.html.twig', 
				['form'=> $form->createView()]
			);
	}

}