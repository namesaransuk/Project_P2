<header>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container-fluid">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="!#">
        <strong class="blue-text">BON'iS</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/Admin/dashboard.php') { ?>
              <a class="nav-link waves-effect bg-dark text-white" href="dashboard.php">Home</a>
            <?php } else { ?>
              <a class="nav-link waves-effect" href="dashboard.php">Home</a>
            <?php } ?>
          </li>

          <li class="nav-item">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/Admin/add_order.php') { ?>
              <a class="nav-link waves-effect bg-dark text-white" href="add_order.php">Add Order</a>
            <?php } else { ?>
              <a class="nav-link waves-effect" href="add_order.php">Add Order</a>
            <?php } ?>
          </li>

          <li class="nav-item">
            <a class="nav-link waves-effect" href="!#">Modify User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="!#">Insert Admin</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item my-auto">
            ผู้เข้าสู่ระบบ : Admin <?php echo $_SESSION['name'] ?> | &nbsp;
          </li>
          <li class="nav-item">
            <a href="../logout.php" role="button" class="nav-link bg-danger white-text border border-light rounded waves-effect">
              <i class="fas fa-sign-out-alt"></i> ออกจากระบบ / Logout
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Sidebar -->
  <div class="sidebar-fixed position-fixed">

    <a class="logo-wrapper waves-effect">
      <img src="../img/logo-website-b.png" class="img-fluid" alt="">
    </a>

    <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/Admin/dashboard.php') { ?>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Profile</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Maps</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a>
        <a href="check_status.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Status</a>
      </div>

    <?php } else if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/Admin/add_order.php') { ?>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-table mr-3"></i>Tables1
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables2</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables3</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables4</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables5</a>
      </div>
    <?php } else { ?>
      <div class="list-group list-group-flush">
        <img src="../../img/logo-website-b.png" style="width:100%" alt="">
      </div>
    <?php } ?>
  </div>
  <!-- Sidebar -->

</header>

<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">