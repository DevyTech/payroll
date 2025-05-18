<?php
require '../config/connection.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get Data from $_POST method
    $id = $_POST['employeeId'];
    $entry = $_POST['entry'];
    $exit = $_POST['exit'];
    $date = $_POST['date'];

    // Check if data already exist;
    $scope = mysqli_query($conn, "SELECT * FROM attendence_table WHERE employee_id = '$id' AND date = '$date'");
    $count = mysqli_num_rows($scope);

    if ($count > 0) {
        header("Location:../index.php?page=attendence&submitattendence=failed");
    } else {
        $query = "INSERT INTO attendence_table SET
                employee_id = '$id',
                entry_time = '$entry',
                exit_time = '$exit',
                date = '$date'";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            header("Location:../index.php?page=attendence&submitattendence=success");
        }
    }
}
