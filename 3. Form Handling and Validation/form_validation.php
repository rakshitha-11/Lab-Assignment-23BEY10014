<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
Mobile: <input type="text" name="mobile"><br>
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);

    if(empty($name) || empty($email) || empty($mobile)) {
        echo "All fields are required!";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid Email!";
    } elseif(!preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "Invalid Mobile Number!";
    } else {
        echo "Valid Data:<br>";
        echo "$name, $email, $mobile";
    }
}
?>