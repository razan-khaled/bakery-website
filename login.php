<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: index.html');
}

$username = "";
$errors = array(); 

include 'db.php';   //require_once 'db.php'; ici le script s'arrête s'il ya un erreurs

$conn = openConnection();

if (isset($_POST['log_user'])) {
  $username = $conn->real_escape_string($_POST['username']);// c'est pour la securite 
  $password = $conn->real_escape_string($_POST['password']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }


  $user_check_query = "SELECT * FROM users WHERE username='$username'";
  $result = $conn->query($user_check_query);
  $user = $result->fetch_assoc();
  
  if ($user) { // if user exists
    if ($user['password'] != md5($password)) {     // mdf méthode plus securisable :if (password_verify($password, $user['password'])) 
      array_push($errors, "Wrong username/password combination");
    }
  } else {
    array_push($errors, "User does not exist");
  }

  if (count($errors) == 0) {
    $_SESSION['user_id'] = $user['id'];
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";//c'est pas necessaire

    if (isset($_POST['remember'])) {
      setcookie('user_id', $user['id'], time() + (86400 * 30), "/");// 30jours
  	$_SESSION['noti'] = $errors;
  	header('location: signin.php');
  }
}
}
?>