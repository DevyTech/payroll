<?php
ob_start();
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
                                        DATE_FORMAT(st.date_month, '%Y %m') AS month_name,
                                        ut.name AS manager_name,
                                        COUNT(at.employee_id) AS days_work
                                    FROM
                                        employee_table et
                                    LEFT JOIN
                                        attendence_table at ON et.id = at.employee_id
                                    JOIN
                                        salary_table st ON et.nik = st.nik
                                    LEFT JOIN
                                        users_table ut ON st.manager_id = ut.id
                                    GROUP BY et.id");
// Report Table Join Employee
if (isset($_POST['filter'])) {
    $dateMonth = $_POST['month_filter'];
} else {
    $dateMonth = date("Y-m");
}
$dataReport = mysqli_query($conn, "SELECT et.name AS empName,
                                        et.nik AS empNik,
                                        et.position AS empPosition,
                                        et.employement_type AS empType,
                                        et.base_salary AS empSalary,
                                        rt.pph_deduction AS empPph,
                                        rt.bpjs_deduction AS empBpjs,
                                        rt.jht_deduction AS empJht,
                                        rt.total_deduction AS empTotal,
                                        rt.amount,
                                        rt.date_approve AS dateApprove,
                                        DATE_FORMAT(rt.date_month, '%Y-%m') AS month_name,
                                        ut.name AS manager_name
                                    FROM
                                        employee_table et
                                    INNER JOIN
                                        report_table rt ON et.nik = rt.nik
                                    INNER JOIN
                                        users_table ut ON rt.manager_id = ut.id
                                    WHERE DATE_FORMAT(rt.date_month, '%Y-%m')='$dateMonth'");

$dataMonth = mysqli_query($conn, "SELECT DISTINCT DATE_FORMAT(date_month, '%Y-%m') AS month_key,
                                    DATE_FORMAT(date_month, '%M %Y') AS month_name
                                    FROM report_table
                                    ORDER BY month_key DESC");


// User Table
$dataUsers = mysqli_query($conn, "SELECT * FROM users_table");
// Get User Data
if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $userData = mysqli_query($conn, "SELECT * FROM users_table WHERE id = '$uid'");
    $data = mysqli_fetch_object($userData);
}
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
                case 'update-user':
                    include './layout/admin/form-update-user.php';
                    break;
                case 'employee':
                    include './layout/admin/employee.php';
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
                case 'form-attendence':
                    include './layout/hr/form-attendence.php';
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
                case 'payroll-report':
                    include './layout/manager/payroll-report.php';
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
    <?php
    include './component/footer.php';
    ob_end_flush();
    ?>
</body>

</html>