<div class="pagetitle">
    <h1>Employee</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
            <li class="breadcrumb-item">Employee</li>
            <li class="breadcrumb-item active">Form Employee</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <form class="row" action="./query/create_employee.php" method="post">

        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Personal Identification</h5>

                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputNanme4" name="name" required autocomplete="off">
                        </div>
                        <div class="col-12">
                            <label for="inputNik" class="form-label">NIK</label>
                            <input type="text" pattern="\d*" maxlength="16" inputmode="numeric" class="form-control" id="inputNik" name="nik" required autocomplete="off">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required autocomplete="off">
                        </div>
                        <div class="col-12">
                            <label for="inputDateofBirth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="inputDateofBirth" name="dateBirth" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label">Gender</label>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputMarital" class="form-label">Marital Status</label>
                            <select class="form-select" id="inputMarital" required name="marital">
                                <option selected hidden></option>
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputContact" class="form-label">Contact</label>
                            <input type="text" pattern="\d*" maxlength="12" inputmode="numeric" class="form-control" id="inputContact" name="contact" required autocomplete="off">
                        </div>
                    </div><!-- Vertical Form -->

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tax and BPJS Information</h5>

                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputNpwp" class="form-label">NPWP</label>
                            <input type="text" pattern="\d*" maxlength="16" inputmode="numeric" class="form-control" id="inputNpwp" name="npwp" required autocomplete="off">
                        </div>
                        <div class="col-12">
                            <label for="inputDependent" class="form-label">Dependent Status</label>
                            <select class="form-select" id="inputDependent" name="dependent" required>
                                <option selected hidden></option>
                                <option value="TK0">TK0</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputBpjs" class="form-label">BPJS Number</label>
                            <input type="text" pattern="\d*" maxlength="13" inputmode="numeric" class="form-control" id="inputBpjs" name="bpjs" required autocomplete="off">
                        </div>
                    </div><!-- Vertical Form -->

                </div>
            </div>


        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Status</h5>

                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputPosition" class="form-label">Position</label>
                            <select class="form-select" id="inputPosition" name="position" required>
                                <option selected hidden>Select Position</option>
                                <option value="Head of Accounting Departement">Head of Accounting Departement</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputDepartment" class="form-label">Departement</label>
                            <input type="text" class="form-control" id="inputDepartment" name="departement" required autocomplete="off">
                        </div>
                        <div class="col-12">
                            <label for="inputEmployementType" class="form-label">EmployementType</label>
                            <input type="text" class="form-control" id="inputEmployementType" name="employementType" required autocomplete="off">
                        </div>
                        <div class="col-12">
                            <label for="inputDate" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" id="inputDate" name="hireDate" required>
                        </div>
                        <div class="col-12">
                            <label for="inputEmployeeId" class="form-label">Employee ID</label>
                            <input type="text" pattern="\d*" maxlength="16" inputmode="numeric" class="form-control field-number" id="inputEmployeeId" name="employeeId" required autocomplete="off">
                        </div>
                    </div><!-- Vertical Form -->

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Payroll Data</h5>

                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputSalary" class="form-label">Base Salary</label>
                            <input type="text" class="form-control" id="inputSalary" required name="salary" autocomplete="off">
                        </div>
                        <div class="col-12">
                            <label for="inputBank" class="form-label">Bank Account Number</label>
                            <input type="text" pattern="\d*" maxlength="16" inputmode="numeric" class="form-control field-number" id="inputBank" name="bankAccount" required autocomplete="off">
                        </div>
                    </div><!-- Vertical Form -->

                </div>
            </div>

        </div>

        <input type="submit" class="btn btn-primary">
    </form>
</section>