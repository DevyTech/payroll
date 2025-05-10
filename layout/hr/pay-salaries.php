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
                                    $tax_rate;
                                    $baseSalary = $row['base_salary'];
                                    $bpjs = $baseSalary * 0.01;
                                    $jht = $baseSalary * 0.05;
                                    $dependent = $row['dependent_status'];
                                    $pktp = $row['pktp'];
                                    if ($baseSalary <= 6000000) {
                                        $tax_rate = 0.05;
                                    } elseif ($baseSalary == 250000000) {
                                        $tax_rate = 0.015;
                                    } elseif ($baseSalary == 500000000) {
                                        $tax_rate = 0.025;
                                    } elseif ($baseSalary > 500000000) {
                                        $tax_rate = 0.035;
                                    }
                                    $pph = (((($baseSalary - $bpjs - $jht) * 12) - $pktp) * $tax_rate) / 12;
                                ?>
                                    <tr>
                                        <th><?php echo $countRows++; ?></th>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['nik']; ?></td>
                                        <td><?php echo $row['position']; ?></td>
                                        <td><?php echo $row['employement_type']; ?></td>
                                        <td><?php echo number_format($baseSalary, 0, '.', '.'); ?></td>
                                        <td><?php echo $row['days_work'] . " Days"; ?></td>
                                        <td><?php echo number_format($bpjs, 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($jht, 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($pph, 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($bpjs + $jht + $pph, 0, '.', '.'); ?></td>
                                        <td><?php echo number_format($baseSalary - $bpjs - $jht - $pph, 0, '.', '.'); ?></td>
                                        <td><a href="#" class="btn btn-primary">Salary Request</a></td>
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