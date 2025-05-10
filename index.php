<?php
require './config/connection.php';
session_start();
if (!isset($_SESSION['status_login'])) {
    echo "<script> window.location = 'pages-login.php' </script>";
}
$name = $_SESSION['uname'];
$role = $_SESSION['ulevel'];

$page = $_GET['page'] ?? 'dashboard';


// Employee Tables
$dataEmployee = mysqli_query($conn, "SELECT * FROM employee_table");
$countDataEmployee = mysqli_num_rows($dataEmployee);

// Attendence Tables Join Employee
$dataSalary = mysqli_query($conn, "SELECT employee_table.id,
                                        employee_table.name,
                                        employee_table.nik,
                                        employee_table.position,
                                        employee_table.employement_type,
                                        employee_table.base_salary,
                                        employee_table.dependent_status,
                                        category_table.id,
                                        category_table.pktp,
                                        COUNT(attendence_table.employee_id) AS days_work
                                        FROM employee_table
                                        JOIN attendence_table ON employee_table.id = attendence_table.employee_id
                                        JOIN category_table ON employee_table.dependent_status = category_table.id
                                        GROUP BY attendence_table.employee_id");
$countDataSalary = mysqli_num_rows($dataSalary);

// User Table
$dataUsers = mysqli_query($conn, "SELECT * FROM users_table");
$countDataUsers = mysqli_num_rows($dataUsers);
?>
<!DOCTYPE html>
<html lang="en">
<?php include './component/head.php'; ?>

<body>
    <?php
    if ($role == 'admin') {
        include './component/nav.php';
    } elseif ($role == 'manager') {
        include './component/nav-manager.php';
    } elseif ($role == 'human resource') {
        include './component/nav-hr.php';
    }
    ?>
    <main id="main" class="main">
        <?php
        if ($role == 'admin') {
            switch ($page) {
                case 'dashboard':
                    include './layout/admin/dashboard.php';
                    break;
                case 'user':
                    include './layout/admin/form-user.php';
                    break;
                case 'users':
                    include './layout/admin/users.php';
                    break;
                default:
                    include './pages-error-404.php';
                    break;
            }
        } elseif ($role == 'human resource') {
            switch ($page) {
                case 'dashboard':
                    include './layout/hr/dashboard.php';
                    break;
                case 'attendence':
                    include './layout/hr/attendence.php';
                    break;
                case 'form-employee':
                    include './layout/hr/form-employee.php';
                    break;
                case 'employee':
                    include './layout/hr/employee.php';
                    break;
                case 'employee-salary':
                    include './layout/hr/pay-salaries.php';
                    break;
                case 'aproved-salary':
                    include './layout/hr/aproved-salary.php';
                    break;
                case 'payroll-report':
                    include './layout/hr/payroll-report.php';
                    break;
                default:
                    include './pages-error-404.php';
                    break;
            }
        } else {
            include './pages-error-404.php';
        }
        ?>
    </main>
    <?php include './component/footer.php'; ?>
</body>

</html>