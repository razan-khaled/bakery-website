<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: index.html');
}

$username = "";
$errors = array(); 

include 'db.php';

$conn = openConnection();

if (isset($_POST['reg_user'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string($_POST['password']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }


  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = $conn->query($user_check_query);
  $user = $result->fetch_assoc();
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$conn->query("INSERT INTO users (username, password) VALUES('$username', '$password')");
  	$result = $conn->query("SELECT LAST_INSERT_ID()");
    $_SESSION['user_id'] = $result->fetch_assoc()['LAST_INSERT_ID()'];
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";//

    if ($_POST['remember'] == 'on') {
      setcookie('user_id', $user['id'], time() + (86400 * 30), "/");//30jours
    }

  	header('location: store.php');
  } else {
  	$_SESSION['noti'] = $errors;
  	header('location: signup.php');
  }
}
?>