<?php
require '../config/connection.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get Data from $_POST method
    $id = $_POST['employee'];
}
