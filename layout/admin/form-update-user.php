<div class="pagetitle">
    <h1>User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="?page=users">User Data</a></li>
            <li class="breadcrumb-item active">Update User</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <form class="row" action="./query/create_user.php" method="post">

        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="?page=users"><i class="bi bi-arrow-left me-3"></i></a>Personal Identification</h5>

                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" required autocomplete="off" name="name" value="<?php echo $data->name; ?>">
                                <label for="floatingName">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingUsername" placeholder="Username" required autocomplete="off" name="username" value="<?php echo $data->username; ?>">
                                <label for="floatingUsername">Username</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select text-capitalize" id="floatingSelect" aria-label="Role" name="role">
                                    <?php $optionVal = array("manager", "human resource");
                                    foreach ($optionVal as $row) {
                                    ?>
                                        <option value="<?php echo $row; ?>"
                                            <?php if ($row == $data->role) {
                                                echo "selected";
                                            } ?>>
                                            <?php echo $row; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="floatingSelect">Role</label>
                            </div>
                        </div>
                        <div class="text-start">
                            <input type="hidden" value="<?php echo $data->id; ?>" name="uid">
                            <input type="submit" class="btn btn-primary" value="Update" name="submit" />
                        </div>
                    </div><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </form>
</section>