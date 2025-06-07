<?php
namespace App\Core;
 
abstract class AbstractUser {
	protected $name;
	protected $email;
	protected $password;
 
	public function __construct($name, $email, $password) {
    	$this->name = $name;
    	$this->email = $email;
    	$this->password = password_hash($password, PASSWORD_DEFAULT); // Hashing password
	}
 
	public function getName() {
    	return $this->name;
	}
 
	public function getEmail() {
    	return $this->email;
	}
 
	// Force child classes to implement userRole()
	abstract public function userRole();
}
?>
