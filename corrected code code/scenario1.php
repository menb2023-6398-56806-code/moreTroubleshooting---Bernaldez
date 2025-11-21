<!-- for ?id=3 --> 
<form action="scenario1.php" method="get">
  <label for="id">Enter Student ID:</label>
  <input type="number" name="id" id="id" required>
  <input type="submit" value="Submit">
</form>

<?php 
//named my db "class_db0"
$conn = mysqli_connect("localhost", "root", "", "class_db0"); 

 

//$sql = "SELECT * FROM students WHERE id = $id";
//dapat student_id
// but if eto lang ang ginalaw, may error sa una pero pagpig-set na 3 ang "id" mawawala na error.

/*      $id = $_GET['id']; 
        $sql = "SELECT * FROM students WHERE student_id = $id"; 
        $res = mysqli_query($conn, $sql); 
        $r = mysqli_fetch_assoc($res); 
        echo $r['first_name']; 
*/

// para wala error kahit gumagana naman: mag isset.
    // para di error lalabas please enter a student ID above
    // pag invalid yung number na binigay, No student found
    // pag valid, lalabas "first name"
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE student_id = $id"; 
    $res = mysqli_query($conn, $sql); 

    if ($res && mysqli_num_rows($res) > 0) {
        $r = mysqli_fetch_assoc($res); 
        echo $r['first_name']; 
    } else {
        echo "No student found with ID $id";
    }
} else {
    echo "Please enter a student ID above.";
}
?> 