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

		$attributes = array ('class'  => 'form-control field-value',
							 'value' => 0.00 );				

		$builder 
			-> add ('date', DateType::class,
				array('label'=>'Datum:', 'days' => range(1,1)))
			-> add ('electricity', NumberType::class,
					array('label'=>'Struja:', 
						   'attr' => $attributes ))
			-> add ('water', NumberType::class,
					array('label'=>'Voda:', 
						   'attr' => $attributes ))
			-> add ('garbage', NumberType::class,
					array('label'=>'Smeće:', 
						   'attr' => $attributes ))
			-> add ('publicUtility', NumberType::class,
					array('label'=>'Komunalije:', 
						   'attr' => $attributes ))
			-> add ('telecommunications', NumberType::class,
					array('label'=>'Telekomunikacijske usluge:', 
						   'attr' => $attributes ))
			-> add ('healthInsurance', NumberType::class,
					array('label'=>'Zdravstveno osiguranje:', 
						   'attr' => $attributes ))
			-> add ('maintenanceFees', NumberType::class,
					array('label'=>'Pričuva:', 
						   'attr' => $attributes ))
			-> add ('stateTv', NumberType::class,
					array('label'=>'HRT pretplata:', 
						   'attr' => $attributes ))
			-> add ('gas', NumberType::class,
					array('label'=>'Gorivo:', 
						   'attr' => $attributes ))
			-> add ('shopping', NumberType::class,
					array('label'=>'Trgovine - kupovina:', 
						   'attr' => $attributes ))
			-> add ('other', NumberType::class,
					array('label'=>'Ostalo:', 
						   'attr' => $attributes ))
			-> add ('save', SubmitType::class,
					array('label'=>'UNESI', 
						   'attr' => array('class'=> 'btn btn-lg btn-primary')));


	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults([
				'data_class' => 'AppBundle\Entity\BillsMonthly'
			]);
	}

}