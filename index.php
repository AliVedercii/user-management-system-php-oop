<?php
require 'autoload.php';
 
use App\Models\Admin;
use App\Models\RegularUser;
use App\Services\AuthService;
 
// Create an Admin user
$admin = new Admin("Alice", "alice@example.com", "admin123");
 
// Create a Regular User
$user = new RegularUser("Bob", "bob@example.com", "user123");
 
// Create AuthService
$authService = new AuthService();
 
// Admin Login
echo $authService->authenticate($admin, "alice@example.com", "admin123") . "<br>";
 
// Regular User Login
echo $authService->authenticate($user, "bob@example.com", "user123") . "<br>";
 
// Admin Logout
echo $admin->logout();
?>
