<?php
// $password = '123';
// $password_hash = password_hash($password, PASSWORD_DEFAULT);
// echo $password_hash;
function generateEmployeeId()
{
    $prefix = 'E-';
    $uniqueNumber = mt_rand(1000000000000000, 9999999999999999); // 16 digit random number
    return $prefix . $uniqueNumber;
}

// Contoh penggunaan
$employeeId = generateEmployeeId();
echo $employeeId;
