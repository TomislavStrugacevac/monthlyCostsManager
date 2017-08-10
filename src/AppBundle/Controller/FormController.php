<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BillsMonthly;
use AppBundle\Form\Type\BillsMonthlyType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class FormController extends Controller {
	/**
     * @Route("/form", name="form_entry")
     */
    public function formExampleAction(Request $request)
    {
        $form = $this->createForm(BillsMonthlyType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $billsMonthly = $form->getData();

            $em->persist($billsMonthly);
            $em->flush();


			return $this->render("default/debug.html.twig");
		}

		return $this->render ('default/form.html.twig',
				['form'=> $form->createView()]
			);
	}

	/**
  * @Route("/form/all", name="form_find")
  */
	public function formFindAction() {
		$em = $this->getDoctrine()->getManager();

		$result = $em->getRepository('AppBundle\Entity\BillsMonthly')->findAll();
		$colNames = $em->getClassMetadata('AppBundle\Entity\BillsMonthly')->getColumnNames();


		return $this->render('default/findall.html.twig', [
			'results' => $result,
			'colNames' => $colNames
  		]);
	}
  /**
   * @Route("/", name="pocetna")
   */
  public function indexAction() {
    return $this->render ("default/index.html.twig");
  }


}
