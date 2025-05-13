<div class="pagetitle">
    <h1>User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item active">Form User</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <form class="row" action="./query/create_user.php" method="post">

        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Personal Identification</h5>

                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" required autocomplete="off" name="name">
                                <label for="floatingName">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingUsername" placeholder="Username" required autocomplete="off" name="username">
                                <label for="floatingUsername">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Role" name="role">
                                    <option value="manager">Manager</option>
                                    <option value="human resource">Human Resource</option>
                                </select>
                                <label for="floatingSelect">Role</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Signature</label>
                                <input class="form-control" type="file" id="formFile" required>
                            </div>
                        </div> -->
                        <div class="text-start">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </form>
</section>