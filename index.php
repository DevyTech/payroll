<?php
require './config/connection.php';
session_start();
if (!isset($_SESSION['status_login'])) {
    header("Location:pages-login.php");
}
$name = $_SESSION['uname'];
$role = $_SESSION['ulevel'];

$page = $_GET['page'] ?? 'dashboard';

// Generate Employee ID
$prefix = "E-";
$randomNumber = mt_rand(1000000000000000, 9999999999999999);
$employeId = $prefix . $randomNumber;


// Employee Tables
$dataEmployee = mysqli_query($conn, "SELECT * FROM employee_table");
$countDataEmployee = mysqli_num_rows($dataEmployee);

// Employee Table Join all Tables
$dataSalary = mysqli_query($conn, "SELECT et.id AS emp_id,
                                        et.name,
                                        et.nik,
                                        et.position,
                                        et.employement_type,
                                        et.base_salary,
                                        et.dependent_status,
                                        st.bpjs_deduction,
                                        st.jht_deduction,
                                        st.pph_deduction,
                                        st.total_deduction,
                                        st.amount,
                                        st.status,
                                        st.date_approve,
                                        ut.name AS manager_name,
                                        COUNT(at.employee_id) AS days_work
                                    FROM
                                        employee_table et
                                    LEFT JOIN
                                        attendence_table at ON et.id = at.employee_id
                                    JOIN
                                        Salary_table st ON et.nik = st.nik
                                    LEFT JOIN
                                        users_table ut ON st.manager_id = ut.id
                                    GROUP BY et.id");

// User Table
$dataUsers = mysqli_query($conn, "SELECT * FROM users_table");
// Count Manager
$dataUserManager = mysqli_query($conn, "SELECT role FROM users_table WHERE role = 'manager'");
$countManager = mysqli_num_rows($dataUserManager);
// Count Human Resource
$dataUserHR = mysqli_query($conn, "SELECT role FROM users_table WHERE role = 'human resource'");
$countHR = mysqli_num_rows($dataUserHR);
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
        } elseif ($role == 'manager') {
            switch ($page) {
                case 'dashboard':
                    include './layout/manager/dashboard.php';
                    break;
                case 'employee':
                    include './layout/manager/employee.php';
                    break;
                case 'salary-request':
                    include './layout/manager/salary-request.php';
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