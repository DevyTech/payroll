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
                                <option value="TK1">TK1</option>
                                <option value="TK2">TK2</option>
                                <option value="TK3">TK3</option>
                                <option value="K/0">K/0</option>
                                <option value="K/1">K/1</option>
                                <option value="K/2">K/2</option>
                                <option value="K/3">K/3</option>
                                <option value="K/1/0">K/1/0</option>
                                <option value="K/1/1">K/1/1</option>
                                <option value="K/1/2">K/1/2</option>
                                <option value="K/1/3">K/1/3</option>
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
                            <label for="inputDepartment" class="form-label">Departement</label>
                            <select class="form-select" id="inputDepartment" name="departement" required>
                                <option hidden selected>Select Departement</option>
                                <option value="finance">Finance</option>
                                <option value="hr">HR</option>
                                <option value="production">Production</option>
                                <option value="marketing">Marketing</option>
                                <option value="r&d">R&D</option>
                                <option value="it">IT</option>
                                <option value="internal audit">Internal Audit</option>
                                <option value="logistic">Logistic</option>
                                <option value="customer_service">Customer Service</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputPosition" class="form-label">Position</label>
                            <!-- <select class="form-select" id="inputPosition" name="position" required>
                                <option selected hidden>Select Position</option>
                                <option value="Head of Accounting Departement">Head of Accounting Departement</option>
                            </select> -->
                            <select class="form-select" name="position" id="inputPosition">
                                <optgroup label="Keuangan & Akuntansi">
                                    <option value="cfo">Chief Financial Officer (CFO)</option>
                                    <option value="finance_manager">Finance Manager</option>
                                    <option value="senior_accountant">Senior Accountant</option>
                                    <option value="financial_analyst">Financial Analyst</option>
                                </optgroup>

                                <optgroup label="Sumber Daya Manusia">
                                    <option value="hr_manager">HR Manager</option>
                                    <option value="talent_acquisition_specialist">Talent Acquisition Specialist</option>
                                    <option value="learning_development_officer">Learning & Development Officer</option>
                                    <option value="hr_generalist">HR Generalist</option>
                                </optgroup>

                                <optgroup label="Operasional / Produksi">
                                    <option value="operations_manager">Operations Manager</option>
                                    <option value="production_supervisor">Production Supervisor</option>
                                    <option value="quality_control_inspector">Quality Control Inspector</option>
                                    <option value="continuous_improvement_engineer">Continuous Improvement Engineer</option>
                                </optgroup>

                                <optgroup label="Pemasaran & Penjualan">
                                    <option value="marketing_manager">Marketing Manager</option>
                                    <option value="brand_pr_specialist">Brand/PR Specialist</option>
                                    <option value="sales_manager">Sales Manager</option>
                                    <option value="account_executive">Account Executive</option>
                                </optgroup>

                                <optgroup label="Riset & Pengembangan (R&amp;D)">
                                    <option value="rnd_manager">R&amp;D Manager</option>
                                    <option value="product_development_engineer">Product Development Engineer</option>
                                    <option value="research_scientist">Research Scientist</option>
                                    <option value="innovation_specialist">Innovation Specialist</option>
                                </optgroup>

                                <optgroup label="Teknologi Informasi (TI)">
                                    <option value="cio_it_manager">Chief Information Officer (CIO) / IT Manager</option>
                                    <option value="network_infrastructure_admin">Network / Infrastructure Administrator</option>
                                    <option value="software_developer">Software Developer</option>
                                    <option value="it_support_specialist">IT Support Specialist</option>
                                </optgroup>

                                <optgroup label="Logistik & Supply Chain">
                                    <option value="supply_chain_manager">Supply Chain Manager</option>
                                    <option value="logistics_coordinator">Logistics Coordinator</option>
                                    <option value="procurement_planner">Procurement Planner</option>
                                    <option value="warehouse_supervisor">Warehouse Supervisor</option>
                                </optgroup>

                                <optgroup label="Manajemen Risiko & Audit Internal">
                                    <option value="chief_audit_exec">Chief Audit Executive</option>
                                    <option value="risk_compliance_manager">Risk & Compliance Manager</option>
                                    <option value="internal_auditor">Internal Auditor</option>
                                    <option value="risk_analyst">Risk Analyst</option>
                                </optgroup>

                                <optgroup label="Customer Service / Layanan Pelanggan">
                                    <option value="customer_service_manager">Customer Service Manager</option>
                                    <option value="customer_support_rep">Customer Support Representative</option>
                                    <option value="call_center_supervisor">Call Center Supervisor</option>
                                    <option value="tech_support_specialist">Technical Support Specialist</option>
                                </optgroup>
                            </select>


                        </div>
                        <div class="col-12">
                            <label for="inputEmployementType" class="form-label">EmployementType</label>
                            <select class="form-select" id="inputEmployementType" name="employementType" required>
                                <option value="Permanent" selected>Permanent</option>
                                <option value="Intern">Intern</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputDate" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" id="inputDate" name="hireDate" required>
                        </div>
                        <div class="col-12">
                            <label for="inputEmployeeId" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="inputEmployeeId" name="employeeId" required autocomplete="off" readonly value="<?php echo $employeId; ?>">
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