<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title style="color:#f3800c">Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/css.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block" style="color:#f3800c">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">






        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/app/profile-img.jpeg" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name }}</span>
          </a>
          <!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->name }}</h6>
            </li>



            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('users')}}">
          <i class="fa fa-user"></i>
          <span>users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="tweets">
        <i class="bi bi-file-text"></i>
        <span>Tweets</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="organizers">
          <i class="bi bi-file-text"></i>
          <span>Organizers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="sponsors">
          <i class="bi bi-file-text"></i>
          <span>Sponsors</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="keyNote">
          <i class="bi bi-file-text"></i>
          <span>Key Note Speackers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="session">
          <i class="bi bi-file-text"></i>
          <span>Special Sessions</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="authors">
          <i class="bi bi-file-text"></i>
          <span>Authors</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="countries">
          <i class="bi bi-file-text"></i>
          <span>Countries</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="videos">
          <i class="bi bi-file-text"></i>
          <span>Videos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="photos">
          <i class="bi bi-file-text"></i>
          <span>Photos</span>
        </a>
      </li>
      







    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="https://kit.fontawesome.com/96f7c268df.js" crossorigin="anonymous"></script>

</body>

</html>