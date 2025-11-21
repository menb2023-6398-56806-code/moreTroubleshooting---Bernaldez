<!-- Form --> 
<form action="scenario6.php" method="post">
  <label for="id">Enter Student ID that will be deleted:</label>
  <input type="number" name="id" id="id" required>
  <input type="submit" value="Submit">
</form>

<?php 
$conn = mysqli_connect("localhost","root","","class_db0"); 
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// intval - convert a variable's value to an integer
//linipat dito yung pagkuha ng information
// ginawang POST yung $_GET['id']
$id = intval($_POST['id']);

// kasi ang post is modify | id = mali / student_id = tama
$sql = "DELETE FROM students WHERE student_id = $id"; 

//pa-fancy/ para malaman kung nabago na talaga
if (mysqli_query($conn, $sql)) { 
    echo " Student successfully wiped"; 
} else {  
    echo " Error: " . $sql . "<br>" . mysqli_error($conn); 
} 
mysqli_close($conn);
?> 