<!-- Form -->
<form action="scenario2.php" method="post">
  <label for="fname">Enter Student First Name:</label>
  <input type="text" name="fname" id="fname" required>
  <input type="submit" value="Submit">
</form>

<?php 
//named my db "class_db0"
$conn = mysqli_connect("localhost","root","","class_db0"); 

// isset para wala error kahit gumagana naman.
if (isset($_POST['fname'])) {
    $fname = $_POST['fname']; 
    //need to put apostrophes'' at the beginning and end of $fname to tell SQL that it is a text
    $sql = "SELECT * FROM students WHERE first_name = '$fname'";  
    $res = mysqli_query($conn, $sql);
    //mysqli_fetch_assoc gets all associated to $fname. so even if i echo the student_id it can give it to me.
    if ($r = mysqli_fetch_assoc($res)) {
        echo "Student found: " . $r['first_name'];
    } else {
        echo "No student found.";
    }
} else {
    echo "Please enter a student name";
}
?>