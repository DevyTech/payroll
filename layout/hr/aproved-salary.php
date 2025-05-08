<div class="pagetitle">
    <h1>Payroll</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Payroll</li>
            <li class="breadcrumb-item active">Aproved Salary</li>
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
                    <h5 class="card-title">Aproved Employee Salary</h5>
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
                                    <th>PPH</th>
                                    <th>BPJS</th>
                                    <th>JHT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Rafael Julio Kembuan</td>
                                    <td>717171717171</td>
                                    <td>Head Of Accounting Department</td>
                                    <td>Permanent</td>
                                    <td>5,000,000</td>
                                    <td>22 Days</td>
                                    <td>10,000</td>
                                    <td>50,000</td>
                                    <td>250,000</td>
                                    <td>310,000</td>
                                    <td>4,690,000</td>
                                    <td><a href="#" class="btn btn-success">Pay Salary</a></td>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <td>Rangga Aditya Satali</td>
                                    <td>717171717171</td>
                                    <td>Head Of Accounting Department</td>
                                    <td>Permanent</td>
                                    <td>5,000,000</td>
                                    <td>22 Days</td>
                                    <td>10,000</td>
                                    <td>50,000</td>
                                    <td>250,000</td>
                                    <td>310,000</td>
                                    <td>4,690,000</td>
                                    <td><a href="#" class="btn btn-success">Pay Salary</a></td>
                                </tr>
                            </tbody>
                            <!-- <tbody style="text-transform: capitalize;">
                                <?php
                                $countRows = 1;
                                foreach ($dataEmployee as $row) {
                                ?>
                                    <tr>
                                        <th><?php echo $countRows++; ?></th>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['nik']; ?></td>
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
                            </tbody> -->
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>