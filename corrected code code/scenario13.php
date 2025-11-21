<!-- Form --> 
<form action="scenario13.php" method="post">
  <label for="id">Student ID:</label>
  <input type="number" name="id" id="id" required><br><br>

  <label for="email">New Email:</label>
  <input type="email" name="email" id="email" required><br><br>

  <input type="submit" value="Update">
</form>

<?php
// connection
$conn = mysqli_connect("localhost", "root", "", "class_db0");

$id = $_POST['id'];
$newEmail = $_POST['email'];

//fixed WHERE CLAUSE and specify which student_id ang papalitan ng email.
$sql = "UPDATE students SET email='$newEmail' WHERE student_id = $id";
$res = mysqli_query($conn, $sql);

if ($res) {
  //para malaman kung nagalaw na email or not
    if (mysqli_affected_rows($conn) > 0) {
        echo "Student with ID " . $id . " 's email has been updated to " . $r['email'];
    } else {
        echo "No student with that ID number ($id).";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
