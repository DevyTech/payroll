<div class="pagetitle">
    <h1>Payroll Salaries</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Payroll</li>
            <li class="breadcrumb-item active">Payroll Report</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Salary Reports</h5>

                    <!-- Default Accordion -->
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <?php
                        $index = 1;
                        foreach ($dataReport as $row) {
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?php echo "heading" . $index; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo "collapse" . $index; ?>" aria-expanded="false" aria-controls="<?php echo "collapse" . $index; ?>">
                                        <?php echo $row['empName']; ?>
                                    </button>
                                </h2>
                                <div id="<?php echo "collapse" . $index; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading" . $index; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-5 text-center"><strong>SLIP GAJI KARYAWAN</strong></p>
                                        <p class="fs-6 text-center"><strong>Periode 1 Januari - 31 Januari 2025</strong></p>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="25%">Nama</td>
                                                <td width="5%">:</td>
                                                <td><?php echo $row['empName']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>NIK</td>
                                                <td>:</td>
                                                <td><?php echo $row['empNik']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td>:</td>
                                                <td><?php echo $row['empPosition']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td><?php echo $row['empType']; ?></td>
                                            </tr>
                                        </table>

                                        <p class="fw-bold">Penghasilan</p>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%">Gaji Pokok</td>
                                                <td width="5%">=</td>
                                                <td class="text-end"><?php echo number_format($row['empSalary'], 0, '.', '.'); ?></td>
                                            </tr>
                                        </table>

                                        <p class="fw-bold">Potongan</p>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%">PPH</td>
                                                <td width="5%">=</td>
                                                <td class="text-end"><?php echo number_format($row['empPph'], 0, '.', '.'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>BPJS</td>
                                                <td>=</td>
                                                <td class="text-end"><?php echo number_format($row['empBpjs'], 0, '.', '.'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>JHT</td>
                                                <td>=</td>
                                                <td class="text-end"><?php echo number_format($row['empJht'], 0, '.', '.'); ?></td>
                                            </tr>
                                            <tr class="fw-bold">
                                                <td>Total Potongan</td>
                                                <td>=</td>
                                                <td class="text-end"><?php echo number_format($row['empTotal'], 0, '.', '.'); ?></td>
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
                                            <p>Manado, <?php echo date("d M Y", strtotime($row['dateApprove'])); ?></p>
                                            <p>Manajer Keuangan</p>
                                            <br><br>
                                            <!-- <img src="signature.png" alt="signature" width="180px"> -->
                                            <p class="fw-bold"><?php echo $row['manager_name']; ?></p>
                                        </div>
                                        <div class="text-end mt-5">
                                            <a href="./report-print.php?id=<?php echo $row['empNik']; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">Print</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $index++;
                        }
                        ?>
                    </div><!-- End Default Accordion Example -->

                </div>
            </div>

        </div>
    </div>
</section>