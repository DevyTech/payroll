<?php
// $password = '123';
// $password_hash = password_hash($password, PASSWORD_DEFAULT);
// echo $password_hash;
// function generateEmployeeId()
// {
//     $prefix = 'E-';
//     $uniqueNumber = mt_rand(1000000000000000, 9999999999999999); // 16 digit random number
//     return $prefix . $uniqueNumber;
// }

// // Contoh penggunaan
// $employeeId = generateEmployeeId();
// echo $employeeId;
$salary = 7000000;
$tax_rate;
$totalSalaryOneYear = $salary * 12;
if ($totalSalaryOneYear <= 60000000) {
    $tax_rate = 0.05;
} elseif ($totalSalaryOneYear <= 250000000) {
    $tax_rate = 0.15;
} elseif ($totalSalaryOneYear <= 500000000) {
    $tax_rate = 0.25;
} elseif ($totalSalaryOneYear > 500000000) {
    $tax_rate = 0.35;
}
echo $totalSalaryOneYear;
echo $tax_rate;
