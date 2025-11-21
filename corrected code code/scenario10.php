<?php
$conn = mysqli_connect("localhost", "root", "", "class_db0");

$age = intval(19);
//fixed age
$sql = "SELECT * FROM students WHERE age = $age";

//shortcut
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
echo "{$result['first_name']}'s age is {$result['age']} years old";
?>
