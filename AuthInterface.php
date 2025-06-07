<?php
namespace App\Core;
 
interface AuthInterface {
	public function login($email, $password);
	public function logout();
}
?>
