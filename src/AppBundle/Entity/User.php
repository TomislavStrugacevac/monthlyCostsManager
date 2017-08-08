<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM; 
use Symfony\Component\Security\Core\User\UserInterface;

/**
 *@ORM\Table(name="app_users") 
 *@ORM\Entity(repositoryClass="AppBundle\Respository\UserRepository")
 */

class User implements UserInterface, \Serializable {
	/**
	 *@ORM\Column(type="integer")
	 *@ORM\Id
	 *@ORM\GenerateValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=25, unique=true)
	 */
	private $username;

	/**
	 * @ORM\Column(type="string", lenght=64)
	 */
	private $password;

	/**
	 * @ORM\Column(type="string", length=60, unique=true)
	 */
	private $email;

	/**
	* @ORM\Column(name="is_active", type="boolean")
	*/
	private $isActive;

	public function __construct(){
		$this->isActive = true;
	}

	public function getSalt() {
		return null;
	}

	public function getId(){
		return $this->id;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getIsActive(){
		return $this->isActive;
	}

	public function getRoles(){
		return array ('ROLE_USER');
	}

	public function ereaseCredentials(){
	}

	public function setUsername($username){
		$this->username = $username;
	}
	public function setPassword($password){
		$this->password = $password;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setSalt($salt){
		$this->salt = $salt;
	}

	/**
	 * @see \Serializable::serialize()
	 */
	public function serialize(){
		return serialize( array(
			$this->id,
			$this->username,
			$this->password,
			));
	}

	/**
	 * @see \Serializable::serialize()
	 */
	public function unserialize(){
		list (
			$this->id,
			$this->username,
			$this->password,
		) = unserialize($serialized)
	}



}