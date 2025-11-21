<!-- Form -->
<form action="scenario9.php" method="get">
  <label for="id">Enter student ID:</label>
  <input type="number" name="id" id="id" required>
  <input type="submit" value="View Student">
</form>


<?php
$conn = mysqli_connect("localhost", "root", "", "class_db0"); 
// Use GET instead of POST
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE student_id = $id"; 
$res = mysqli_query($conn, $sql); 

    if ($res && $row = mysqli_fetch_row($res)) {
        echo "ID: " . $row[0] . "<br>";
        echo "First Name: " . $row[1] . "<br>";
        echo "Last Name: " . $row[2] . "<br>";
        echo "Email: ". $row[3] . "<br>";
        echo "Age: " . $row[4] . "<br>";
    } else {
    echo "No student found with ID $id.";
    }

?>

<a href="scenario9.php?id= '.$id.' ">View Student</a>
