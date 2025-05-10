<div class="pagetitle">
    <h1>Payroll</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Payroll</li>
            <li class="breadcrumb-item active">Employee Salary</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<style>
    table {
        font-size: small;
        text-align: center;
    }

    td,
    th {
        white-space: nowrap;
        vertical-align: middle;
    }
</style>
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Salary</h5>
                    <div class="table-responsive">
                        <!-- Table with stripped rows -->
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th rowspan="2">#</th>
                                    <th rowspan="2">Name</th>
                                    <th rowspan="2">NIK</th>
                                    <th rowspan="2">Position</th>
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Base Salary</th>
                                    <th rowspan="2">Working Days</th>
                                    <th colspan="3">Deduction</th>
                                    <th rowspan="2">Total Deductions</th>
                                    <th rowspan="2">Amount</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>BPJS</th>
                                    <th>JHT</th>
                                    <th>PPH</th>
                                </tr>
                            </thead>
                            <tbody style="text-transform: capitalize;">
                                <?php
                                $countRows = 1;
                                foreach ($dataSalary as $row) {
                                ?>
                                    <tr>
                                        <th><?php echo $countRows++; ?></th>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['nik']; ?></td>
                                        <td><?php echo $row['position']; ?></td>
                                        <td><?php echo $row['employement_type']; ?></td>
                                        <td><?php echo number_format($row['base_salary'], 0, '.', '.'); ?></td>
                                        <td><?php echo $row['days_work'] . " Days"; ?></td>
                                        <td><?php echo number_format($row['bpjs_deduction'], 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($row['jht_deduction'], 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($row['pph_deduction'], 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($row['total_deduction'], 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($row['amount'], 0, '.', '.'); ?></td>
                                        <td>
                                            <?php
                                            switch ($row['status']) {
                                                case '1':
                                            ?>
                                                    <form action="./query/salary_controller.php" method="post">
                                                        <input type="text" name="nik" value="<?php echo $row['nik']; ?>" hidden>
                                                        <input type="submit" class="btn btn-primary" value="Salary Request" name="req"></input>
                                                    </form>
                                                <?php
                                                    break;
                                                case '2':
                                                ?>
                                                    <button class="btn btn-warning" disabled>Waiting For Approval</button>
                                            <?php
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                            ?>
                                        </td>
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