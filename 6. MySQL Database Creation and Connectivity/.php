<?php
$conn = new mysqli("localhost", "root", "", "college");

$conn->query("CREATE TABLE IF NOT EXISTS students(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
course VARCHAR(50)
)");

$conn->query("INSERT INTO students(name, course) VALUES('Amit','BCA')");

$result = $conn->query("SELECT * FROM students");

echo "<table border=1>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['course']."</td></tr>";
}
echo "</table>";
?>