<?php
ob_start();
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

    $dataSalary = mysqli_query($conn, "SELECT * FROM salary_table WHERE nik='$nik'");
    $d = mysqli_fetch_object($dataSalary);
    if (isset($_POST['req'])) {
        $query = "UPDATE salary_table SET status='2' WHERE nik='$nik'";
        $location = 'employee-salary';
    } elseif (isset($_POST['approve'])) {
        $query = "UPDATE salary_table SET status='3',manager_id='$uid',date_approve='$dateNow',date_month='$dateNow' WHERE nik='$nik'";
        $location = 'salary-request';
    } elseif (isset($_POST['reject'])) {
        $query = "UPDATE salary_table SET status='1' WHERE nik='$nik'";
        $location = 'salary-request';
    } else {
        $query = "UPDATE salary_table SET status='1', manager_id=null, date_approve=null WHERE nik='$nik'";
        $querySalary = mysqli_query($conn, "INSERT INTO report_table SET
                    nik='$d->nik',
                    bpjs_deduction='$d->bpjs_deduction',
                    jht_deduction='$d->jht_deduction',
                    pph_deduction='$d->pph_deduction',
                    total_deduction='$d->total_deduction',
                    amount='$d->amount',
                    manager_id='$d->manager_id',
                    date_approve='$d->date_approve',
                    date_month='$d->date_approve'");
        $location = 'aproved-salary';
    }
    $sql = mysqli_query($conn, $query);
    header("Location:../index.php?page=$location");
}
ob_end_flush();
