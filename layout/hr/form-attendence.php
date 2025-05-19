<div class="pagetitle">
    <h1>Attendence</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Attendence</li>
            <li class="breadcrumb-item active">Form Attendence</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <form class="row" action="./query/create_attendence.php" method="post">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Attendence</h5>

                    <div class="row mb-3">
                        <label for="inputEmployee" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="inputEmployee" name="employeeId" required>
                                <option selected hidden>Select Employee Name</option>
                                <?php
                                foreach ($dataEmployee as $row) {
                                ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo ucwords($row['name']); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEntry" class="col-sm-2 col-form-label">Entry Time</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" id="inputEntry" name="entry" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputExit" class="col-sm-2 col-form-label">Exit Time</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" id="inputExit" name="exit" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputDate" name="date" required>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>

        </div>
    </form>
</section>