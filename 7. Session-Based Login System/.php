<?php
session_start();

if(isset($_POST['login'])) {
    if($_POST['user']=="admin" && $_POST['pass']=="123") {
        $_SESSION['user'] = "admin";
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login";
    }
}
?>
<form method="post">
User: <input type="text" name="user">
Pass: <input type="password" name="pass">
<input type="submit" name="login">
</form>