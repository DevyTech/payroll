<?php
require '../config/connection.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nik = $_POST['nik'];
    $location;
    if (isset($_POST['req'])) {
        $query = "UPDATE salary_table SET status='2' WHERE nik='$nik'";
        $location = 'employee-salary';
    } elseif (isset($_POST['approve'])) {
        $query = "UPDATE salary_table SET status='3' WHERE nik='$nik'";
        $location = 'salary-request';
    } elseif (isset($_POST['reject'])) {
        $query = "UPDATE salary_table SET status='1' WHERE nik='$nik'";
        $location = 'salary-request';
    } else {
        $query = "UPDATE salary_table SET status='4' WHERE nik='$nik'";
        $location = 'aproved-salary';
    }
    $sql = mysqli_query($conn, $query);
    header("Location:../index.php?page=$location");
}
