<?php
session_start();

        
     if (isset($_SESSION['start']) && (time() - $_SESSION['start'] >600)) {
            session_unset();
            session_destroy();
            header('location: http://localhost/php-employee-management-v1/index.php');
        }