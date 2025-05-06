<?php
require '../config/connection.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get Data from $_POST method
    $name = $_POST['name'];
    $id = filter_var($_POST['idNumber'], FILTER_VALIDATE_INT);
    $address = $_POST['address'];
    $dateOfBirth = $_POST['dateBirth'];
    $gender = $_POST['gender'];
    $marital = $_POST['marital'];
    $contact = (int) $_POST['contact'];
    $npwp = $_POST['npwp'];
    $dependent = $_POST['dependent'];
    $bpjs = $_POST['bpjs'];
    $position = $_POST['position'];
    $departement = $_POST['departement'];
    $employementType = $_POST['employementType'];
    $hireDate = $_POST['hireDate'];
    $employeId = filter_var($_POST['employeeId'], FILTER_VALIDATE_INT);
    $salary = filter_var(str_replace(',', '', $_POST['salary']), FILTER_VALIDATE_INT);
    $bankAccount = filter_var($_POST['bankAccount'], FILTER_VALIDATE_INT);

    // Check if data already exist;
    $scope = mysqli_query($conn, "SELECT * FROM employee_table WHERE name = '$name' OR id_number = '$id'");
    $count = mysqli_num_rows($scope);

    if ($count > 0) {
        header("Location:../index.php?page=form-employee&submit=failed");
    } else {
        $query = "INSERT INTO employee_table SET
                name = '$name',
                id_number = '$id',
                address = '$address',
                date_of_birth = '$dateOfBirth',
                gender = '$gender',
                marital_status = '$marital',
                contact = '$contact',
                position = '$position',
                department = '$departement',
                employement_type = '$employementType',
                hire_date = '$hireDate',
                employee_id = '$employeId',
                npwp = '$npwp',
                dependent_status = '$dependent',
                bpjs_number = '$bpjs',
                base_salary = '$salary',
                bank_account_number = '$bankAccount'";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            header("Location:../index.php?page=form-employee&submit=success");
        }
    }
}
