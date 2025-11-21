<!-- Form --> 
<form action="scenario5.php" method="post">
  <label for="email">Enter student email:</label>
  <input type="email" name="email" id="email" required>
  <input type="submit" value="Submit">
</form>

<?php 
$conn = mysqli_connect("localhost","root","","class_db0"); 
$email = $_POST['email']; // re-spelled

$sql = "SELECT * FROM students
        WHERE email='$email'"; 

//fetching fetching
$res = mysqli_query($conn, $sql); 
$r = mysqli_fetch_assoc($res); 
echo "{$r['last_name']}'s email is {$r['email']}"; 
?> 