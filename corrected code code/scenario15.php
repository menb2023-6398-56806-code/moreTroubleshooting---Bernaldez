<?php
$conn = mysqli_connect("localhost", "root", "", "class_db0");

$limit = 5;

// Validate and restrict page number
$page = isset($_GET['page']) ? intval($_GET['page']) : 0;   // cast to int
if ($page < 0) {
    $page = 0; // no negative pages
}
if ($page > 100) {
    $page = 100; // restrict maximum page number
}

$offset = $page * $limit;

$sql = "SELECT * FROM students LIMIT $offset, $limit";
$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    echo $row['student_id'] . " - " . $row['first_name'] . " " . $row['last_name'] . " - " . $row['email'] . " - " . $row['age'] ."<br>";
}

mysqli_close($conn);
?>
