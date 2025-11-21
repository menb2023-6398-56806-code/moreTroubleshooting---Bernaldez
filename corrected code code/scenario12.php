<form action="scenario12.php" method="get">
  <label for="id">Student ID:</label>
  <input type="number" name="id" id="id" required>
  <input type="submit" value="OK">
</form>

<?php 
$conn = mysqli_connect("localhost", "root", "", "class_db0");

$id = intval($_GET['id']); // cast to int
$sql = "SELECT * FROM students WHERE student_id = $id"; // fix student_id the quotes
$res = mysqli_query($conn, $sql);
//to see if working
if ($row = mysqli_fetch_assoc($res)) { 
    echo " Hello They/them/He/Him/She/Her $id!"; 
} else {  
    echo " Error: Student number $id is a figment of your imagination."; 
} 
mysqli_close($conn);
?> 