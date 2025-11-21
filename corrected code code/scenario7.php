<!-- Form -->
<form action="scenario7.php" method="post">
  <label for="id">Enter student ID:</label>
  <input type="number" name="id" id="id" required>
  <label for="email">Enter email:</label>
  <input type="email" name="email" id="email" required>
  <input type="submit" value="Submit">
</form>

<?php 
$conn = mysqli_connect("localhost","root","","class_db0"); 

$id = intval($_POST['id']); 
$email = $_POST['email']; 

// id is bad/student_id good | fixed spaces | fixed qoutes
$sql = "UPDATE students SET email = '$email' WHERE student_id = $id";
$res = mysqli_query($conn, $sql);

//pa-fancy/ para malaman kung nabago na talaga
if ($res) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "Student version updated to 2.0";
    } else {
        echo "No student with that ID number ($id).";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 