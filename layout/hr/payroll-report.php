<div class="pagetitle">
    <h1>Payroll Salaries</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Payroll</li>
            <li class="breadcrumb-item active">Payroll Employee Salaries</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Salary</h5>

                    <!-- Default Accordion -->
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <?php
                        for ($i = 1; $i <= 3; $i++) {
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?php echo "heading" . $i; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo "collapse" . $i; ?>" aria-expanded="false" aria-controls="<?php echo "collapse" . $i; ?>">
                                        Rafael Julio Kembuan
                                    </button>
                                </h2>
                                <div id="<?php echo "collapse" . $i; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading" . $i; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-5 text-center"><strong>SLIP GAJI KARYAWAN</strong></p>
                                        <p class="fs-6 text-center"><strong>Periode 1 Januari - 31 Januari 2025</strong></p>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="25%">Nama</td>
                                                <td width="5%">:</td>
                                                <td>Rafael Julio Kembuan</td>
                                            </tr>
                                            <tr>
                                                <td>NIK</td>
                                                <td>:</td>
                                                <td>7171000000</td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td>:</td>
                                                <td>Head of Accounting Departement</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>Pegawai Tetap</td>
                                            </tr>
                                        </table>

                                        <p class="fw-bold">Penghasilan</p>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%">Gaji Pokok</td>
                                                <td width="5%">=</td>
                                                <td class="text-end">5.000.000,00</td>
                                            </tr>
                                        </table>

                                        <p class="fw-bold">Potongan</p>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%">PPH 21</td>
                                                <td width="5%">=</td>
                                                <td class="text-end">10.000,00</td>
                                            </tr>
                                            <tr>
                                                <td>BPJS</td>
                                                <td>=</td>
                                                <td class="text-end">50.000,00</td>
                                            </tr>
                                            <tr>
                                                <td>JHT</td>
                                                <td>=</td>
                                                <td class="text-end">250.000,00</td>
                                            </tr>
                                            <tr class="fw-bold">
                                                <td>Total Potongan</td>
                                                <td>=</td>
                                                <td class="text-end">310.000,00</td>
                                            </tr>
                                        </table>

                                        <table class="table table-borderless fw-bold">
                                            <tr>
                                                <td width="40%">Gaji Bersih</td>
                                                <td width="5%">=</td>
                                                <td class="text-end">4.690.000,00</td>
                                            </tr>
                                        </table>

                                        <div class="text-end mt-5">
                                            <p>Manado, 31 Januari 2025</p>
                                            <p>Manajer Keuangan</p>
                                            <br><br>
                                            <p class="fw-bold">Nur aini Salim</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><!-- End Default Accordion Example -->

                </div>
            </div>

        </div>
    </div>
</section>