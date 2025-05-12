<?php
include "./config/connection.php";
// Employee Table Join all Tables
$dataSalary = mysqli_query($conn, "SELECT et.id,
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
                                        ut.name AS manager_name
                                    FROM
                                        employee_table et
                                    JOIN
                                        Salary_table st ON et.nik = st.nik
                                    LEFT JOIN
                                        users_table ut ON st.manager_id = ut.id
                                    GROUP BY et.id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    foreach ($dataSalary as $row) {
        if ($row['nik'] == $_GET['id']) {
    ?>
            <div class="container">
                <div class="row">
                    <div class="col-12  m-auto">
                        <p class="fs-5 text-center"><strong>SLIP GAJI KARYAWAN</strong></p>
                        <p class="fs-6 text-center"><strong>Periode 1 Januari - 31 Januari 2025</strong></p>
                        <table class="table table-borderless">
                            <tr>
                                <td width="25%">Nama</td>
                                <td width="5%">:</td>
                                <td><?php echo $row['name']; ?></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?php echo $row['nik']; ?></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td><?php echo $row['position']; ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><?php echo $row['employement_type']; ?></td>
                            </tr>
                        </table>

                        <p class="fw-bold">Penghasilan</p>
                        <table class="table table-borderless">
                            <tr>
                                <td width="40%">Gaji Pokok</td>
                                <td width="5%">=</td>
                                <td class="text-end"><?php echo number_format($row['base_salary'], 0, '.', '.'); ?></td>
                            </tr>
                        </table>

                        <p class="fw-bold">Potongan</p>
                        <table class="table table-borderless">
                            <tr>
                                <td width="40%">PPH</td>
                                <td width="5%">=</td>
                                <td class="text-end"><?php echo number_format($row['pph_deduction'], 0, '.', '.'); ?></td>
                            </tr>
                            <tr>
                                <td>BPJS</td>
                                <td>=</td>
                                <td class="text-end"><?php echo number_format($row['bpjs_deduction'], 0, '.', '.'); ?></td>
                            </tr>
                            <tr>
                                <td>JHT</td>
                                <td>=</td>
                                <td class="text-end"><?php echo number_format($row['jht_deduction'], 0, '.', '.'); ?></td>
                            </tr>
                            <tr class="fw-bold">
                                <td>Total Potongan</td>
                                <td>=</td>
                                <td class="text-end"><?php echo number_format($row['total_deduction'], 0, '.', '.'); ?></td>
                            </tr>
                        </table>

                        <table class="table table-borderless fw-bold">
                            <tr>
                                <td width="40%">Gaji Bersih</td>
                                <td width="5%">=</td>
                                <td class="text-end"><?php echo number_format($row['amount'], 0, '.', '.'); ?></td>
                            </tr>
                        </table>

                        <div class="text-end mt-5">
                            <p>Manado, <?php echo date("d M Y", strtotime($row['date_approve'])); ?></p>
                            <p>Manajer Keuangan</p>
                            <br><br>
                            <!-- <img src="signature.png" alt="signature" width="180px"> -->
                            <p class="fw-bold"><?php echo $row['manager_name']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        window.onload = function() {
            window.print();
            // Optional: menutup jendela setelah mencetak
            window.onafterprint = function() {
                window.close();
            };
        };
    </script>
</body>

</html>