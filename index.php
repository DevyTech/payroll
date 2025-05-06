<?php
require './config/connection.php';
session_start();
if (!isset($_SESSION['status_login'])) {
    echo "<script> window.location = 'pages-login.php' </script>";
}
$name = $_SESSION['uname'];
$role = $_SESSION['ulevel'];

$page = $_GET['page'] ?? 'dashboard';
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
            include './layout/admin/dashboard.php';
        } elseif ($role == 'human resource') {
            switch ($page) {
                case 'form-employee':
                    include './layout/hr/form-employee.php';
                    break;
                case 'employee':
                    include './layout/hr/employee.php';
                    break;
                case 'dashboard':
                default:
                    include './layout/hr/dashboard.php';
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