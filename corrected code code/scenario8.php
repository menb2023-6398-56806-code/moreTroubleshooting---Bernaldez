<?php 
$conn = mysqli_connect("localhost","root","","class_db0"); 
$res = mysqli_query($conn,"SELECT * FROM students"); 
if ($res) {
    // Added while | Loop through all rows | exhaust all students
    while ($row = mysqli_fetch_assoc($res)) {
        echo $row['email'] . "<br>";
    }
    //if it didn't work
} else {
    echo "Query failed.";
}
?> 