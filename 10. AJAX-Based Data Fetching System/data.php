<?php
$conn = new mysqli("localhost","root","","college");
$q = $_GET['q'];

$result = $conn->query("SELECT * FROM students WHERE name LIKE '%$q%'");

while($row = $result->fetch_assoc()) {
    echo $row['name']."<br>";
}
?>