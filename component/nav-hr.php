<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="" />
      <span class="d-none d-lg-block">Payroll Expert</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
  <!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li>
      <!-- End Search Icon-->

      <li class="nav-item dropdown pe-3">
        <a
          class="nav-link nav-profile d-flex align-items-center pe-0"
          href="#"
          data-bs-toggle="dropdown">
          <img
            src="assets/img/human.png"
            alt="Profile"
            class="rounded-circle" />
          <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $name; ?></span> </a><!-- End Gambar Profil -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?php echo $name; ?></h6>
            <span><?php echo ucwords($role); ?></span>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>

          <li>
            <hr class="dropdown-divider" />
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Keluar</span>
            </a>
          </li>
        </ul>
        <!-- End Dropdown Item Profile -->
      </li>
      <!-- End Navbar Profil -->
    </ul>
  </nav>
  <!-- End Icon Navigasi -->
</header>
<!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="?page=dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#attendence-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Attendence</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="attendence-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="index.php?page=form-attendence">
            <i class="bi bi-circle"></i><span>Form Attendence</span>
          </a>
        </li>
        <li>
          <a href="index.php?page=attendence">
            <i class="bi bi-circle"></i><span>Attendence Data</span>
          </a>
        </li>
      </ul>
    </li><!-- End Attendence Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#employee-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-vcard"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="employee-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="index.php?page=form-employee">
            <i class="bi bi-circle"></i><span>Form Employee</span>
          </a>
        </li>
        <li>
          <a href="index.php?page=employee">
            <i class="bi bi-circle"></i><span>Employee Data</span>
          </a>
        </li>
      </ul>
    </li><!-- End Employees Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#payroll-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Payroll</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="payroll-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="?page=employee-salary">
            <i class="bi bi-circle"></i><span>Employee Salary</span>
          </a>
        </li>
        <li>
          <a href="?page=aproved-salary">
            <i class="bi bi-circle"></i><span>Aproved Salary</span>
          </a>
        </li>
        <li>
          <a href="?page=payroll-report">
            <i class="bi bi-circle"></i><span>Payroll Report</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

  </ul>

</aside><!-- End Sidebar-->