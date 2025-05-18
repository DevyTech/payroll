<div class="pagetitle">
    <h1>Attendence</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Attendence</li>
            <li class="breadcrumb-item active">Attendence Data</li>
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
                    <h5 class="card-title">Attendence Data</h5>
                    <div class="table-responsive">
                        <!-- Table with stripped rows -->
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>NIK</th>
                                    <th>Position</th>
                                    <th>Working Days</th>
                                </tr>
                            </thead>
                            <tbody style="text-transform: capitalize;">
                                <?php
                                $countRows = 1;
                                $dateNow = date('Y m');
                                foreach ($dataSalary as $row) {
                                ?>
                                    <tr>
                                        <th><?php echo $countRows++; ?></th>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['nik']; ?></td>
                                        <td><?php echo ucwords(str_replace("_", " ", $row['position'])); ?></td>
                                        <td><?php echo $row['days_work'] . " Days"; ?></td>
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