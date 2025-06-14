<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class=" copyright">
        &copy; Copyright <strong><span>Payroll Expert</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="#">Dev Tech</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/script.js"></script>

<!-- Sweet Alert JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    <?php
    if (isset($_GET['submit'])) {
        $status = $_GET['submit'];
        if ($status == "success") {
    ?>
            Swal.fire({
                icon: "success",
                title: "Employee data has been saved",
                showConfirmButton: false,
                timer: 1500
            });
        <?php
        } else {
        ?>
            Swal.fire({
                icon: "error",
                title: "Employee data already exists",
                showConfirmButton: false,
                timer: 1500
            });
            <?php
        }
    } elseif (isset($_GET['submitattendence'])) {
        $status = $_GET['submitattendence'];
        switch ($status) {
            case 'success':
            ?>
                Swal.fire({
                    icon: "success",
                    title: "Attendence data has been saved",
                    showConfirmButton: false,
                    timer: 1500
                });
            <?php
                break;
            case 'failed':
            ?>
                Swal.fire({
                    icon: "error",
                    title: "Attendence data already exists",
                    showConfirmButton: false,
                    timer: 1500
                });
            <?php
                break;
            default:
                # code...
                break;
        }
    } elseif (isset($_GET['submituser'])) {
        $status = $_GET['submituser'];
        switch ($status) {
            case 'success':
            ?>
                Swal.fire({
                    icon: "success",
                    title: "New user has been saved",
                    showConfirmButton: false,
                    timer: 1500
                });
            <?php
                break;
            case 'update':
            ?>
                Swal.fire({
                    icon: "success",
                    title: "User Updated",
                    showConfirmButton: false,
                    timer: 1500
                });
            <?php
                break;
            case 'delete':
            ?>
                Swal.fire({
                    icon: "success",
                    title: "User Deleted",
                    showConfirmButton: false,
                    timer: 1500
                });
            <?php
                break;
            case 'failed':
            ?>
                Swal.fire({
                    icon: "error",
                    title: "User already exists",
                    showConfirmButton: false,
                    timer: 1500
                });
    <?php
                break;
            default:
                # code...
                break;
        }
    }

    ?>

    function requestForm(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Sending Request!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Sending!",
                    text: "Approval request has been sent",
                    icon: "success",
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("requestForm" + id).submit();
                    }
                });
            }
        });
    }

    function approveForm(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, approve salary!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Approved!",
                    text: "Employee salary has been approved.",
                    icon: "success",
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("approveForm" + id).submit();
                    }
                });
            }
        });
    }

    function rejectForm(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, reject salary!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Rejected!",
                    text: "Employee salary has been rejected.",
                    icon: "success",
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("rejectForm" + id).submit();
                    }
                });
            }
        });
    }

    function payForm(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, pay salary!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Paid!",
                    text: "Employee salaries have been paid.",
                    icon: "success",
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("payForm" + id).submit();
                    }
                });
            }
        });
    }

    function deleteUser(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            cancelButtonColor: "#d33",
            confirmButtonText: "Delete User"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "User has been deleted",
                    icon: "success",
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("formDelete" + id).submit();
                    }
                });
            }
        });
    }

    function deleteEmployee(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            cancelButtonColor: "#d33",
            confirmButtonText: "Delete Employee"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Employee has been deleted",
                    icon: "success",
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("formDelete" + id).submit();
                    }
                });
            }
        });
    }
</script>