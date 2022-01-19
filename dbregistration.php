<?php
require_once 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$hashPassword = password_hash($password, PASSWORD_BCRYPT);

if(isset($_POST['submit'])) {
$newUser = $db->query("INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$hashPassword')");
}

if($newUser){
    header('Location: success.php');
} else {
    echo "AH PAS MARCHE !";
};
