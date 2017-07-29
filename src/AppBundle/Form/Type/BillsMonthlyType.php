<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BillsMonthlyType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {

		$builder 
			-> add ('date', DateType::class)
			-> add ('electricity', NumberType::class)
			-> add ('water', NumberType::class)
			-> add ('garbage', NumberType::class)
			-> add ('publicUtility', NumberType::class)
			-> add ('telecommunications', NumberType::class)
			-> add ('healthInsurance', NumberType::class)
			-> add ('maintenanceFees', NumberType::class)
			-> add ('stateTv', NumberType::class)
			-> add ('gas', NumberType::class)
			-> add ('shopping', NumberType::class)
			-> add ('other', NumberType::class)
			-> add ('save', SubmitType::class);


	}

	public function cofigureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults([
				'data_class' => 'AppBundle\Entity\BillsMonthly'
			]);
	}

}