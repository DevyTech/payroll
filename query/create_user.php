<?php
require '../config/connection.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get Data from $_POST method
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];


    // Check if data already exist;
    $scope = mysqli_query($conn, "SELECT * FROM users_table WHERE name = '$name' AND username = '$username'");
    $count = mysqli_num_rows($scope);

    if ($count > 0) {
        header("Location:../index.php?page=user&submituser=failed");
    } else {
        $query = "INSERT INTO users_table SET
                name = '$name',
                username = '$username',
                password = '$password',
                role = '$role'";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            header("Location:../index.php?page=user&submituser=success");
        }
    }
}
