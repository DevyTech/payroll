<?php
require '../config/connection.php';
session_start();
echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = $_SESSION['uid'];
    $nik = $_POST['nik'];
    $dateNow = date('Y-m-d');
    $location;
    if (isset($_POST['req'])) {
        $query = "UPDATE salary_table SET status='2' WHERE nik='$nik'";
        $location = 'employee-salary';
    } elseif (isset($_POST['approve'])) {
        $query = "UPDATE salary_table SET status='3',manager_id='$uid',date_approve='$dateNow' WHERE nik='$nik'";
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
