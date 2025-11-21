<!-- Form -->
<form action="scenario3.php" method="get">
  <label for="age">Enter Student Age:</label>
  <input type="number" name="age" id="age" required>
  <input type="submit" value="Submit">
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db0");

//if connection failed
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

$age = $_GET['age'];

// prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT first_name, age FROM students WHERE age = ?");
$stmt->bind_param("i", $age); // "i" = integer type

$stmt->execute();
$res = $stmt->get_result();

// can handle multiple students with the same age
//if input is greater than 0 it will output the name and age | but if age is 0 or lower it will return no student.
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "{$row['first_name']}'s age is {$row['age']} years old<br>";
    }
} else {
    echo "No student found with age $age.";
}
//close statement and connection
$stmt->close();
$conn->close();
?>
