<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Assembleia de Deus</title>
  <link rel="stylesheet" href="../../cssTest/style.css">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/AD.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <!-- Favicon icon -->
  <!-- Custom CSS -->
  <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="../../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.esm.min.js" integrity="sha512-ESlgC6ZyzTZdmD7XoDrXJNOqoIugH+FNKg8nAk8sa3cZfFALiV+lo5xoia649oyygwnkKsdUdPAJ+puqGbOs+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
  
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="navbar-brand" href="index.php">
            <b class="logo-icon ps-2">
              <img src="https://www.serfautec.com.br/images/igraja-serfautec.jpg" alt="homepage" class="light-logo" style="height: 40px; border-radius: 100px; width: 50px; margin-left: -10px;" />
            </b>
            <span class="logo-text ms-2">
              Assembleia de Deus
            </span>
          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse " id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav float-start me-auto ">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="d-none d-md-block">Op????es<i class="fa fa-angle-down"></i></span>
                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">teste</a>
                </li>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item search-box">
              <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-magnify fs-4"></i></a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
              </form>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-end">
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell font-24"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="font-24 mdi mdi-comment-processing"></i>
              </a>
              <ul class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  " aria-labelledby="2">
                <ul class="list-style-none">
                  <li>
                    <div class="">
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-calendar text-white fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Event today</h5>
                            <span class="mail-desc">Just a reminder that event</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-settings fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Settings</h5>
                            <span class="mail-desc">You can customize this template</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-account fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-link fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Luanch Admin</h5>
                            <span class="mail-desc">Just see the my new admin!</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> My
                  Profile</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet me-1 ms-1"></i> My
                  Balance</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-settings me-1 ms-1"></i> Account
                  Setting</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                <div class="dropdown-divider"></div>
                <div class="ps-4 p-10">
                  <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                </div>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashbord.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Principal</span></a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="relatorioofertas.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Relat??rio de ofertas</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="relatoriodizimos.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Relat??rio de d??zimos</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="relatoriodedizimistas.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Relat??rio de dizimistas</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="relatoriodeofertas.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Relat??rio de ofertas nos cultos</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="relatoriodespesas.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Relat??rio de despesas</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="relatoriogeral.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Relat??rio geral</span></a>
            </li>
            <!---->
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>

    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 id="titulo" class="page-title">Menu Principal</h4>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Library
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        
      </div>

    </div>
    <div class="container" >
      <div class="row d-flex justify-content-center">
        <div class="col-8 text ">
            <canvas id="myChart" width="70" height="25"></canvas>
        </div>
      </div>
    </div>
    <script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Red'],
        datasets: [{
            label: '#RELAT??RIO DAS OFERTAS',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 0, 0)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
  </div>
  </div>
  <!-- Column -->
  </div>
   
  <!-- ============================================================== -->
  <!-- Sales chart -->
  <!-- ============================================================== -->
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="d-md-flex align-items-center">
            <!--aqui pode ter um card-->
          </div>
          <div class="row">
            <!-- column -->
            <div class="col-lg-9">
              <!--AQUI PODE FICAR UM CARD-->
            </div>
            <div class="col-lg-3">
              <div class="row">
                <!--aqui fica um card a direita-->
              </div>
            </div>
          </div>
          <!-- column -->
        </div>
      </div>
    </div>
  </div>

  </div>

  </div>
  <footer class="footer text-center">
    Develop Isael Silva
    <a href="https://www.wrappixel.com">Assembleia de Deus</a>.
  </footer>
  </div>
    <script src="scriptTable.js"></script>
  <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="../../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../../dist/js/custom.min.js"></script>
  <script src="../../dist/js/custom.min.js"></script>

  <!--This page JavaScript -->
  <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
  <!-- Charts js Files -->
  <script src="../../assets/libs/flot/excanvas.js"></script>
  <script src="../../assets/libs/flot/jquery.flot.js"></script>
  <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
  <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
  <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
  <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
  <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
  
</body>

</html>