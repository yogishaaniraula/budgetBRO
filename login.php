<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? 'Yes' : 'No';

    // Here you can add your logic to handle login (e.g., validate against database)
    
    // Example output for demonstration purposes:
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
    echo "Remember Me: " . $remember . "<br>";
}
?>

