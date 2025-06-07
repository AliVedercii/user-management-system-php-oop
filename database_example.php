<?php
require 'autoload.php';

use App\Core\Database;
use App\Models\Admin;
use App\Models\RegularUser;

// Database connection
$database = new Database();

echo "<h2>User Management System - Database Integration</h2>";

// Get all users from database
$users = $database->getAllUsers();

echo "<h3>Users from Database:</h3>";
foreach ($users as $user) {
    echo "<div style='border: 1px solid #ccc; margin: 10px; padding: 10px;'>";
    echo "<strong>Name:</strong> " . htmlspecialchars($user['name']) . "<br>";
    echo "<strong>Email:</strong> " . htmlspecialchars($user['email']) . "<br>";
    echo "<strong>Role:</strong> " . htmlspecialchars($user['role']) . "<br>";
    echo "<strong>Created:</strong> " . htmlspecialchars($user['created_at']) . "<br>";
    echo "</div>";
}

// Example: Get specific user by email
$userByEmail = $database->getUserByEmail('fatma.ozkan@sirket.com');
if ($userByEmail) {
    echo "<h3>Admin User Found:</h3>";
    echo "<p>Name: " . htmlspecialchars($userByEmail['name']) . "</p>";
    echo "<p>Role: " . htmlspecialchars($userByEmail['role']) . "</p>";
}

// Example: Create OOP objects from database data
if ($userByEmail && $userByEmail['role'] === 'admin') {
    $adminFromDB = new Admin(
        $userByEmail['name'], 
        $userByEmail['email'], 
        'password123' // In real scenario, password would be verified
    );
    
    echo "<h3>Admin Object Created:</h3>";
    echo "<p>User Role: " . $adminFromDB->userRole() . "</p>";
    echo "<p>Can Delete User: " . ($adminFromDB->canDeleteUser() ? 'Yes' : 'No') . "</p>";
}

?> 