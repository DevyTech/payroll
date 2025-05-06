<?php
$dataEmployee = mysqli_query($conn, "SELECT * FROM employee_table");
$countDataEmployee = mysqli_num_rows($dataEmployee);
$salary = 4000000;
$format = "Rp " . number_format($salary, 0, '.', '.');
?>
<div class="pagetitle">
    <h1>Employee</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Employee</li>
            <li class="breadcrumb-item active">Employee Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<style>
    table {
        font-size: small;
    }

    td,
    th {
        white-space: nowrap;
    }
</style>
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Data</h5>
                    <div class="table-responsive">
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>ID Number</th>
                                    <th>Address</th>
                                    <th>Date Of Birth</th>
                                    <th>Gender</th>
                                    <th>Marital Status</th>
                                    <th>Contact</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Employement Type</th>
                                    <th>Hire Date</th>
                                    <th>Employee ID</th>
                                    <th>NPWP</th>
                                    <th>Dependent Status</th>
                                    <th>BPJS</th>
                                    <th>Salary</th>
                                    <th>Bank</th>
                                </tr>
                            </thead>
                            <tbody style="text-transform: capitalize;">
                                <?php
                                $countRows = 1;
                                foreach ($dataEmployee as $row) {
                                ?>
                                    <tr>
                                        <th><?php echo $countRows++; ?></th>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['id_number']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['date_of_birth']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['marital_status']; ?></td>
                                        <td><?php echo $row['contact']; ?></td>
                                        <td><?php echo $row['position']; ?></td>
                                        <td><?php echo $row['department']; ?></td>
                                        <td><?php echo $row['employement_type']; ?></td>
                                        <td><?php echo $row['hire_date']; ?></td>
                                        <td><?php echo $row['employee_id']; ?></td>
                                        <td><?php echo $row['npwp']; ?></td>
                                        <td><?php echo $row['dependent_status']; ?></td>
                                        <td><?php echo $row['bpjs_number']; ?></td>
                                        <td><?php echo $row['base_salary']; ?></td>
                                        <td><?php echo $row['bank_account_number']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>