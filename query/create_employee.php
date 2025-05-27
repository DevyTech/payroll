<?php
ob_start();
require '../config/connection.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get Data from $_POST method
    $name = $_POST['name'];
    $nik = filter_var($_POST['nik'], FILTER_VALIDATE_INT);
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
    $employeId = $_POST['employeeId'];
    $salary = filter_var(str_replace(',', '', $_POST['salary']), FILTER_VALIDATE_INT);
    $bankAccount = filter_var($_POST['bankAccount'], FILTER_VALIDATE_INT);

    // Check if data already exist;
    $scope = mysqli_query($conn, "SELECT * FROM employee_table WHERE name = '$name' OR nik = '$nik' OR employee_id = '$employeId'");
    $count = mysqli_num_rows($scope);

    if ($count > 0) {
        header("Location:../index.php?page=form-employee&submit=failed");
    } else {
        $queryEmployee = "INSERT INTO employee_table SET
                name = '$name',
                nik = '$nik',
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
        $sqlEmployee = mysqli_query($conn, $queryEmployee);
        if ($sqlEmployee) {
            $dataCategory = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM category_table WHERE id = '$dependent'"));
            $tax_rate;
            $bpjsDeduction = $salary * 0.01;
            $jhtDeduction = $salary * 0.05;
            $pktp = $dataCategory->pktp;
            $totalSalaryOneYear = $salary * 12;
            $dateNow = date('Y-m-d');
            if ($totalSalaryOneYear <= 60000000) {
                $tax_rate = 0.05;
            } elseif ($totalSalaryOneYear <= 250000000) {
                $tax_rate = 0.15;
            } elseif ($totalSalaryOneYear <= 500000000) {
                $tax_rate = 0.25;
            } elseif ($totalSalaryOneYear > 500000000) {
                $tax_rate = 0.35;
            }
            echo $tax_rate;
            $pph = (((($salary - $bpjsDeduction - $jhtDeduction) * 12) - $pktp) * $tax_rate) / 12;
            $totalDeduction = $bpjsDeduction + $jhtDeduction + $pph;
            $amount = $salary - $bpjsDeduction - $jhtDeduction - $pph;
            if ($pph < 0) {
                $pph = 0;
            }
            $querySalary = "INSERT INTO salary_table SET
                            nik = '$nik',
                            bpjs_deduction = '$bpjsDeduction',
                            jht_deduction='$jhtDeduction',
                            pph_deduction='$pph',
                            total_deduction='$totalDeduction',
                            amount='$amount',
                            status='1'";
            $sqlSalary = mysqli_query($conn, $querySalary);
            if ($sqlSalary) {
                header("Location:../index.php?page=form-employee&submit=success");
            }
        }
    }
}
ob_end_flush();
