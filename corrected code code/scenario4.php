<!-- Form -->
<form action="scenario4.php" method="post">
<!-- required and type is a html validation | php validation--> 
  <p>Add New Student</p>
  <label for="fname">First Name:</label>
  <input type="text" name="fname" id="fname" required>
  <?php
    if (empty($_POST['fname'])) {
      echo "First name is required.";
  }
  ?>
  <br>
  <label for="lname">Last Name:</label>
  <input type="text" name="lname" id="lname" required>
  <?php
  if (empty($_POST[';name'])) {
    echo "Last name is required.";
  }
  ?>
  <br>
  <!-- added email x age -->
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>
  <?php
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
  }
  ?>
  <br>
  <label for="age">Age:</label>
  <input type="number" name="age" id="age" required>
  <input type="submit" value="Submit">
  <?php
  if (!is_numeric($_POST['age'])) {
    echo "Age must be a number.";
  }
  ?>
  <br>
</form>

<?php 
$conn = mysqli_connect("localhost","root","","class_db0"); 
$first = $_POST['fname']; 
$last = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "INSERT INTO students (first_name, last_name, email, age)
        VALUES ('$first', '$last', '$email', $age )"; 
//pa-fancy lang
if (mysqli_query($conn, $sql)) { 
  echo " New student added successfully!"; 
} else {  
  echo " Error: " . $sql . "<br>" . mysqli_error($conn); 
} 
mysqli_close($conn);
?> 