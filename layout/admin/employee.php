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
        text-align: center;
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
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Date Of Birth</th>
                                    <th>Gender</th>
                                    <th>Contact</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Employement Type</th>
                                    <th>Employee ID</th>
                                    <th>Action</th>
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
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['date_of_birth']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['contact']; ?></td>
                                        <td><?php echo ucwords(str_replace("_", " ", $row['position'])); ?></td>
                                        <td><?php echo ucwords(str_replace("_", " ", $row['department'])); ?></td>
                                        <td><?php echo $row['employement_type']; ?></td>
                                        <td><?php echo $row['employee_id']; ?></td>
                                        <td>
                                            <form action="./query/create_employee.php" method="post" id="formDelete<?php echo $row['id']; ?>">
                                                <input type="hidden" value="<?php echo $row['nik']; ?>" name="nik">
                                            </form>
                                            <button class="btn btn-danger" onclick="deleteEmployee(<?php echo $row['id']; ?>)"><i class="bi bi-trash"></i></button>
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