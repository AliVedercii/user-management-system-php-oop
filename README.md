# User Management System - PHP OOP Project

This project is a User Management System developed using Object-Oriented Programming (OOP) concepts in PHP.

## 🚀 Features

- **Abstract Classes**: Basic user structure with `AbstractUser` class
- **Interfaces**: Authentication protocol with `AuthInterface`
- **Traits**: Logging operations with `LoggerTrait`
- **Namespaces**: Organized project file structure
- **Database Integration**: MySQL database integration
- **Password Hashing**: Secure password storage
- **Role-based Access**: Admin and Regular User roles

## 📁 Project Structure

```
├── App/
│   ├── Core/
│   │   ├── AbstractUser.php      # Abstract user class
│   │   ├── AuthInterface.php     # Authentication interface
│   │   ├── LoggerTrait.php       # Logging trait
│   │   └── Database.php          # Database connection class
│   ├── Models/
│   │   ├── Admin.php             # Admin user class
│   │   └── RegularUser.php       # Regular user class
│   └── Services/
│       └── AuthService.php       # Authentication service
├── database/
│   └── users.sql                 # Database schema and data
├── index.php                     # Main demo file
├── database_example.php          # Database integration example
├── autoload.php                  # Class autoloader
└── README.md                     # This file
```

## 🛠️ Installation

1. **Database Setup**:
   ```sql
   # Create management_system database in MySQL
   CREATE DATABASE management_system;
   
   # Import the database/users.sql file
   mysql -u root -p management_system < database/users.sql
   ```

2. **PHP Server**:
   ```bash
   # Start PHP server in the project directory
   php -S localhost:8000
   ```

3. **Run Files**:
   - `http://localhost:8000/index.php` - Basic OOP demo
   - `http://localhost:8000/database_example.php` - Database integration

## 🎯 OOP Concepts Used

### 1. Abstract Classes
```php
abstract class AbstractUser {
    abstract public function userRole();
}
```

### 2. Interfaces
```php
interface AuthInterface {
    public function login($email, $password);
    public function logout();
}
```

### 3. Traits
```php
trait LoggerTrait {
    public function logActivity($message) {
        echo "[LOG]: " . $message . "<br>";
    }
}
```

### 4. Namespaces
```php
namespace App\Models;
use App\Core\AbstractUser;
```

## 📊 Database Structure

```sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','regular_user') NOT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

## 🧪 Test Users

- **Admin**: fatma.ozkan@sirket.com
- **Regular User**: can.kaya@hotmail.com

## 📝 Developer Notes

This project covers the following PHP OOP topics:
- Class inheritance
- Abstract classes and methods
- Interfaces
- Traits
- Namespaces
- Database integration with PDO
- Password hashing
- Role-based authentication

## 📋 Requirements

- PHP 7.4+
- MySQL 5.7+
- PDO Extension

## 🔗 Useful Links

- [PHP Namespaces](https://www.php.net/manual/en/language.namespaces.importing.php)
- [PHP Traits](https://www.w3schools.com/php/php_oop_traits.asp)
- [PHP OOP](https://www.w3schools.com/php/php_namespaces.asp) 
