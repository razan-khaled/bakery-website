<!-- assign a time for ending the cookies and directly sign out from the current account -->
<?php
session_start();
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    if (isset($_COOKIE['user_id'])) {
        setcookie('user_id', null, -1, '/');
    }
}
header('Location: index.html');
?>