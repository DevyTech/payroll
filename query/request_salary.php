<?php
require '../config/connection.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nik = $_POST['nik'];

    $query = "UPDATE salary_table SET status='2' WHERE nik='$nik'";
    $sql = mysqli_query($conn, $query);
    header("Location:../index.php?page=employee-salary");
}
