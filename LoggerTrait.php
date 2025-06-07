<?php
namespace App\Core;
 
trait LoggerTrait {
	public function logActivity($message) {
    	echo "[LOG]: " . $message . "<br>";
	}
}
?>