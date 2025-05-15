<div class="pagetitle">
    <h1>Users</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item active">User Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Table Users</h5>
                    <div class="table-responsive">
                        <!-- Table with stripped rows -->
                        <table class="table table-sm table-striped table-bordered align-middle text-center">
                            <thead class="align-middle">
                                <tr>
                                    <th rowspan="2">#</th>
                                    <th rowspan="2">Name</th>
                                    <th rowspan="2">Username</th>
                                    <th rowspan="2">Role</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody style="text-transform: capitalize;">
                                <?php
                                $countRows = 1;
                                foreach ($dataUsers as $row) {
                                    if ($row['role'] != 'admin') {
                                ?>
                                        <tr>
                                            <th><?php echo $countRows++; ?></th>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['role']; ?></td>
                                            <td><a href="?page=update-user&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="bi bi-pen"></i></a></td>
                                            <td>
                                                <form action="./query/create_user.php" method="post" id="formDelete<?php echo $row['id']; ?>">
                                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="uid">
                                                </form>
                                                <button class="btn btn-danger" onclick="deleteUser(<?php echo $row['id']; ?>)"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                <?php
                                    }
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