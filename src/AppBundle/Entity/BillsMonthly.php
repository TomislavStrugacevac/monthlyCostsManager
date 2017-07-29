<?php

namespace AppBundle\Entitiy;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity 
* @ORM\Table(name="bills")
*/
class BillsMonthy {

	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	public function getId() {
		$return $this->id;
	}

	/**
	* @ORM\Column(type="date") 
	*/
	protected $date;
	public function getDate(){
		return $this->date;
	}
	public function setDate($date){
		$this->date = $date;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $electricity;
	public function getElectricity(){
		return $this->electricity;
	}
	public function setElectricity($electricity){
		$this->electricity = $electricity;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $gas;
	public function getGas(){
		return $this->gas;
	}
	public function setGas($gas){
		$this->gas = $gas;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $water;
	public function getWater(){
		return $this->water;
	}
	public function setWater($water){
		$this->water = $water;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $garbage;
	public function getGarbage(){
		return $this->garabage;
	}
	public function setGarbage($garbage){
		$this->garbage = $garbage;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $publicUtility;
	public function getPublicUtility(){
		return $this->publicUtility;
	}
	public function setPublicUtility($publicUtility){
		$this->publicUtility = $publicUtility;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $telecommunications;
	public function getTelecommuncations{
		return $this->telecommunications;
	}
	public function setTelecommunications($telecommunications){
		$this->telecommunications = $telecommunications;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $healthInsurance;
	public function getHealthInsurance(){
		$this->healthInsurance;
	}
	public function setHealthInsurance($healthInsurance){
		$this->healthInsurance = $healthInsurance;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $maintenanceFees;
	public function getMaintenanceFees(){
		return $this->maintenanceFees;
	}
	public function setMaintenanceFees($maintenanceFees){
		$this->maintenanceFees = $maintenanceFees;
	}


	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $stateTv;
	public function getStateTv(){
		return $this->stateTv;
	}
	public function setStateTv($stateTv){
		$this->stateTv = $stateTv;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $gas;
	public function getGas(){
		return $this->gas;
	}
	public function setGas($gas){
		$this->gas = $gas;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $shopping;
	public function getShopping(){
		return $this->shopping;
	}
	public function setShopping($shopping){
		$this->shopping = $shopping;
	}

	/**
	 * @ORM\Column(type="decimal", scale="2")
	 */
	protected $other;
	public function getOther(){
		return $this->other;
	}
	public function setOther($other){
		$this->other = $other;
	}

}