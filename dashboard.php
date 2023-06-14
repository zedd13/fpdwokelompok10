<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adventure Works | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <?php
  include 'koneksi.php';
  ob_start();
  session_start();
  $sql = mysqli_query($conn, "SELECT nama FROM admin WHERE username='$_SESSION[username]'");
  $array = mysqli_fetch_array($sql);
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-no-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <a href="" class="float-right d-none d-sm-block" style="font-weight:bold;">Selamat Datang, <?php echo $array["nama"]; ?></a>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">
        <img src="dist/img/awlogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Adventure Works</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <div class="user-panel mt-3"></div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <img class="nav-icon" src="dist/img/product.png">
                <p>
                  Product
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/dataproduk.php" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Table</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.php" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>Chart</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <img class="nav-icon" src="dist/img/vendor.png">
                <p>
                  Vendor
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/datav.php" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Table</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa solid fa-store"></i>
                <p>
                  Store
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/datast.php" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Table</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa solid fa-user"></i>
                <p>
                  Customer
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/datact.php" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Table</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-credit-card"></i>
                <p>
                  Credit Card
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/datacc.php" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Table</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">OLAP</li>
            <li class="nav-item">
              <a href="pages/olappc.php" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Tabel Fakta Purchase
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/olapss.php" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Tabel Fakta Sales
                </p>
              </a>
            </li>
            <!-- /.sidebar-menu -->
            <br>
            <li class="nav-item">
              <a href=index.php class="nav-link">
                <i class="nav-icon fa-sign-out"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>
                    <?php
                    $sql = "SELECT SUM(OrderQty) as OQ from fakta_purchase";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                      while ($row2 = mysqli_fetch_array($query)) {
                        echo "" . number_format($row2['OQ'], 0, ".", ",");
                      }
                    }
                    ?>
                  </h3>
                  <p>Total Order</br>Quantity Purchase</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>
                    <?php
                    $sql = "SELECT SUM(OrderQty) as OQ from fakta_sales";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                      while ($row2 = mysqli_fetch_array($query)) {
                        echo "" . number_format($row2['OQ'], 0, ".", ",");
                      }
                    }
                    ?>
                  </h3>

                  <p>Total Order</br>Quantity Sales</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning text-white">
                <div class="inner">
                  <h3>
                    <?php
                    $sql = "SELECT COUNT(CustomerID) as jumlahct from dim_customer";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                      while ($row2 = mysqli_fetch_array($query)) {
                        echo number_format($row2['jumlahct'], 0, ".", ",");
                      }
                    }
                    ?>
                  </h3>
                  <p>Total Customer</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>
                    <?php
                    $sql = "SELECT COUNT(VendorID) as jumlahv from dim_vendor";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                      while ($row2 = mysqli_fetch_array($query)) {
                        echo number_format($row2['jumlahv'], 0, ".", ",");
                      }
                    }
                    ?>
                  </h3>
                  <p>Total Vendor</p>
                </div>
                <div class="icon">
                  <i class="ion ion-briefcase"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary text-white">
                <div class="inner">
                  <h3>
                    <?php
                    $sql = "SELECT COUNT(ProdukID) as jumlahpd from dim_produk";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                      while ($row2 = mysqli_fetch_array($query)) {
                        echo number_format($row2['jumlahpd'], 0, ".", ",");
                      }
                    }
                    ?>
                  </h3>
                  <p>Total Produk</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-secondary text-white">
                <div class="inner">
                  <h3>
                    <?php
                    $sql = "SELECT COUNT(StoreID) as jumlahst from dim_store";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                      while ($row2 = mysqli_fetch_array($query)) {
                        echo number_format($row2['jumlahst'], 0, ".", ",");
                      }
                    }
                    ?>
                  </h3>

                  <p>Total Store</p>
                </div>
                <div class="icon">
                  <i class="ion ion-"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Main row -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card card-primary card-inline">
                  <div class="card-header">
                    <h3 class="card-title">OLAP - MONDRIAN</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="pages/olappc.php">OLAP - Tabel Fakta Purchases</a></p>
                    <a href="pages/olapss.php">OLAP - Tabel Fakta Sales</a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>DATA WAREHOUSE Kelompok 10 - DWO F</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>