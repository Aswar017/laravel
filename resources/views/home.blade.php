<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->


<!-- Awal yang di copy dari waket 2 -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengajuan Barang</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/djibe/bootstrap-material-datetimepicker@6659d24c7d2a9c782dc2058dcf4267603934c863/css/bootstrap-material-datetimepicker-bs4.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Pengajuan Barang
          Waket<sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-paperclip"></i>
          <span>Data Pengajuan</span>
        </a>
        <a class="nav-link" href="pengajuan.html">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Pengajuan Barang</span>
        </a>
        <a class="nav-link" href="histori.html">
          <i class="fas fa-fw fa-history"></i>
          <span>Histori Pengajuan</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anonymous</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-blue-800">FORM PENGAJUAN BARANG</h1>
          <p>
            *&nbsp; Lengkapi nama barang dengan ukuran dan warna yang lebih spesifik <br>
            *&nbsp; Lengkapi quantity barang dengan jelas (pcs/lusin/pack)
          </p>
        </div>
        <hr>
        <!-- /.container-fluid -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <div class="form-group">
                <label for="exampleInputName1">Nama Pengaju Barang</label>
                <input type="name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp"
                  placeholder="nama lengkap">
              </div>
              <div class="form-group">
                <label for="exampleInputUnit1">Unit</label>
                <input type="text" class="form-control" id="exampleInputUnit1" placeholder="Nama Unit">
              </div>
              <div class="input-group">
                <label for="exampleInputName1">Waket & Satker</label>
                <div class="input-group">
                  <input type="text" class="form-control" aria-label="Text input with dropdown button"
                    placeholder="Pilih Waket & Satker">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Pilih</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Waket 1</a>
                      <a class="dropdown-item" href="#">Waket 2</a>
                      <a class="dropdown-item" href="#">Waket 3</a>
                      <a class="dropdown-item" href="#">NFComp</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="textArea">Perihal</label>
                <textarea class="form-control" id="textArea" rows="3"></textarea>
              </div>
              <div class="form-group">
                <form action="/action_page.php">
                  Tanggal Pengajuan Barang <input type="date" name="date">
                </form>
              </div>
              <div class="card">
                <div class="card-header">
                  <h6 class="font-weight-bold text-primary">List Barang</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Barang</th>
                          <th>Qty</th>
                          <th>Unit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Double Tape</td>
                          <td>4</td>
                          <td>pcs</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="form-group">
                      <label for="exampleInputUnit1">Tanda Tangan Waket</label>
                  </div>
                <input type="file" class="card-body form-control-file border">
              </div>
            </div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid">
          <br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#success">
            Submit Form
          </button>
          <div class="modal" id="success">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title mx-auto">Submit Form Berhasil</h4>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger mx-auto" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/moment/moment@develop/min/moment-with-locales.min.js"></script>
  <script>
    $(function () {
      var $now = moment();
      var $dateMin = $now.subtract(3, 'days');


      $('#datetimepicker').bootstrapMaterialDatePicker({
        format: 'MM/DD/YYYY HH:mm',
        shortTime: false,
        //minDate: $dateMin,
        //maxDate: null,
        //currentDate: $now,
        //disabledDays: [],
        date: true,
        time: true,
        monthPicker: false,
        year: true,
        clearButton: false,
        nowButton: false,
        switchOnClick: true,
        cancelText: 'Cancel',
        //okText: 'VALIDER',
        //clearText: 'EFFACER',
        //nowText: 'MAINTENANT',
        //triggerEvent: 'focus',
        //lang: 'en',
        //weekStart: 1,
      });

      $('#datetimepicker-fr').bootstrapMaterialDatePicker({
        format: 'DD/MM/YYYY HH:mm',
        shortTime: false,
        clearButton: false,
        nowButton: false,
        cancelText: 'annuler',
        //okText: 'valider',
        //clearText: 'effacer',
        nowText: 'maintenant',
        lang: 'fr',
        weekStart: 1,
      });

      $('#timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        shortTime: false,
        date: false,
        time: true,
        monthPicker: false,
        year: false,
        switchOnClick: true
      });

      $('#datepicker').bootstrapMaterialDatePicker({
        format: 'DD/MM/YYYY',
        shortTime: false,
        date: true,
        time: false,
        monthPicker: false,
        year: false,
        switchOnClick: true,
      });

      $('#monthpicker').bootstrapMaterialDatePicker({
        format: 'MM',
        shortTime: false,
        date: false,
        time: false,
        monthPicker: true,
        year: false
      });

      $('#yearpicker').bootstrapMaterialDatePicker({
        format: 'YYYY',
        shortTime: false,
        date: false,
        time: false,
        monthPicker: false,
        year: true,
        switchOnClick: true,
      });
    });
  </script>

</body>

</html>
