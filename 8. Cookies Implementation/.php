<?php
setcookie("user", "Rahul", time()+60);

if(isset($_COOKIE['user'])) {
    echo "Welcome ".$_COOKIE['user'];
}
?>