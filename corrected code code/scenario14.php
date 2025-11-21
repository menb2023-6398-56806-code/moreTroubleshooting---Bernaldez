<!-- Form -->
<form action="scenario14.php" method="post">
  <b>Add New Student</b> <hr>
  <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname" required>
  <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname" required>
  <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
  <label for="age">Age:</label>
    <input type="number" name="age" id="age" required>
        <input type="submit" value="Submit">



<?php 
// created connection
$conn = mysqli_connect("localhost","root","","class_db0"); 

// fixed posting
$fname = $_POST['fname']; 
$lname = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];

//fixed indexing and quoting. | added $age
$sql = "INSERT INTO students (first_name, last_name, email, age)
        VALUES ('$fname', '$lname', '$email', $age )"; 

//to know if working
if (mysqli_query($conn, $sql)) { 
  echo " New student added successfully!"; 
} else {  
  echo " Error: " . $sql . "<br>" . mysqli_error($conn); 
} 
mysqli_close($conn);
?> 