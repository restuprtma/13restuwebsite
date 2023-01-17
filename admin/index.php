<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="img/mcpr1.jpg" alt="person">
          <h2 class="h5 text-white text-uppercase mb-0">RESTU</h2>
          <p class="text-sm mb-0 text-muted">Web Developer</p>
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
          <p class="h1 m-0">BD</p></a>
      </div>
      <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
      <ul class="list-unstyled">                  
        <li class="sidebar-item"><a class="sidebar-link" href="index.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Home </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Forms </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="charts.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Charts </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="tables.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Tables </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#browser-window-1"> </use>
            </svg>Example dropdown </a>
          <ul class="collapse list-unstyled " id="exampledropdownDropdown">
            <li><a class="sidebar-link" href="#">Page</a></li>
            <li><a class="sidebar-link" href="#">Page</a></li>
            <li><a class="sidebar-link" href="#">Page</a></li>
          </ul>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#disable-1"> </use>
            </svg>Login page </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="#!"> 
            <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
              <use xlink:href="#imac-screen-1"> </use>
            </svg>Demo
            <div class="badge bg-warning">6 New</div></a></li>
      </ul><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Second menu</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item"> <a class="sidebar-link" href="#!"> 
            <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
              <use xlink:href="#chart-1"> </use>
            </svg>Demo</a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="">
            <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
              <use xlink:href="#imac-screen-1"> </use>
            </svg>Demo
            <div class="badge bg-info">Special</div></a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href=""> 
            <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
              <use xlink:href="#quality-1"> </use>
            </svg>Demo</a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href=""> 
            <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
              <use xlink:href="#security-shield-1"> </use>
            </svg>Demo</a></li>
      </ul>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
              <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                    <use xlink:href="#menu-1"> </use>
                  </svg></a><a class="navbar-brand ms-2" href="index.html">
                  <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">Bootstrap </span><strong class="text-primary text-sm">Dashboard</strong></div></a></div>
              <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a class="nav-link text-white position-relative" id="notifications" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#chart-1"> </use>
                    </svg><span class="badge bg-warning">12</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="notifications">
                    <li><a class="dropdown-item py-3" href="#!"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-blue">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#envelope-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item py-3" href="#!"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-green">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#chats-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">4 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item py-3" href="#!"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-orange">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#checked-window-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted</span><small class="small text-gray-600">8 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item py-3" href="#!"> 
                        <div class="d-flex">
                          <div class="icon icon-sm bg-green">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#chats-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">10 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item all-notifications text-center" href="#!"> <strong class="text-xs text-gray-600">view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a class="nav-link text-white position-relative" id="messages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#envelope-1"> </use>
                    </svg><span class="badge bg-info">10</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="messages">
                    <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="img/avatar-1.jpg" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small>
                          <p class="mb-0 small text-gray-600">3 days ago at 7:58 pm - 10.06.2014</p>
                        </div></a></li>
                    <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="img/avatar-2.jpg" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small>
                          <p class="mb-0 small text-gray-600">3 days ago at 7:58 pm - 10.06.2014</p>
                        </div></a></li>
                    <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="img/avatar-3.jpg" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small>
                          <p class="mb-0 small text-gray-600">3 days ago at 7:58 pm - 10.06.2014</p>
                        </div></a></li>
                    <li><a class="dropdown-item text-center" href="#!"> <strong class="text-xs text-gray-600">Read all messages       </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-white text-sm" id="languages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block ms-2">English</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="languages">
                    <li><a class="dropdown-item" rel="nofollow" href="#!"> <img class="me-2" src="img/flags/16/DE.png" alt="English"><span>German</span></a></li>
                    <li><a class="dropdown-item" rel="nofollow" href="#!"> <img class="me-2" src="img/flags/16/FR.png" alt="English"><span>French                                                         </span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a class="nav-link text-white text-sm ps-0" href="../index.php"> <span class="d-none d-sm-inline-block">Logout</span>
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#security-1"> </use>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <section class="py-5">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#user-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">New Clients</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p class="display-6 mb-0">25</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#survey-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Work Orders</h3>
                  <p class="text-gray-500 small">Last 5 days</p>
                  <p class="display-6 mb-0">400</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#list-details-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">New Quotes</h3>
                  <p class="text-gray-500 small">Last 2 months</p>
                  <p class="display-6 mb-0">342</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#numbers-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">New Invoices</h3>
                  <p class="text-gray-500 small">Last 2 days</p>
                  <p class="display-6 mb-0">123</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#literature-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Open Cases</h3>
                  <p class="text-gray-500 small">Last 3 months</p>
                  <p class="display-6 mb-0">92</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#paper-stack-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">New Cases</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p class="display-6 mb-0">70</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Header Section-->
      <section class="bg-white py-5">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <div class="col-lg-3 col-md-6">
              <div class="card shadow-0">
                <div class="card-body p-0">
                  <h2 class="h3 fw-normal">To do List</h2>
                  <p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <form>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list1">
                      <label class="form-check-label text-sm" for="list1">Similique sunt in culpa qui officia</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list2">
                      <label class="form-check-label text-sm" for="list2">Ed ut perspiciatis unde omnis iste</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list3">
                      <label class="form-check-label text-sm" for="list3">At vero eos et accusamus et iusto </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list4">
                      <label class="form-check-label text-sm" for="list4">Explicabo Nemo ipsam voluptatem</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list5">
                      <label class="form-check-label text-sm" for="list5">Similique sunt in culpa qui officia</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list6">
                      <label class="form-check-label text-sm" for="list6">At vero eos et accusamus et iusto</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list7">
                      <label class="form-check-label text-sm" for="list7">Similique sunt in culpa qui officia</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list8">
                      <label class="form-check-label text-sm" for="list8">Ed ut perspiciatis unde omnis iste</label>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card shadow-0">
                <h2 class="h3 fw-normal">Project Beta progress</h2>
                <p class="text-sm text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="pie-chart">
                  <canvas id="pieChart" style="width: 300px; height: 300px; max-width: 100%"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12">
              <div class="card shadow-0">
                <h2 class="h3 fw-normal">Sales marketing report</h2>
                <p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
                <canvas id="lineCahrt"></canvas>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
      <section class="py-5">
        <div class="container-fluid">
          <div class="row align-items-stretch gy-4">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card text-center h-100 mb-0">
                <div class="card-body">
                  <svg class="svg-icon svg-icon-big svg-icon-light mb-4 text-muted">
                    <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <p class="text-gray-700 display-6">126,418</p>
                  <p class="text-primary h2 fw-bold">All Income</p>
                  <p class="text-xs text-gray-600 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              <div class="card h-100 mb-0">
                <div class="card-body">
                  <h2 class="h3 fw-normal mb-4">Monthly Usage</h2>
                  <div class="row align-items-center mb-3 gx-lg-5">
                    <div class="col-lg-6">
                      <table class="w-100">
                        <tbody>
                          <tr>
                            <td>
                              <div class="position-relative mx-auto" style="max-width: 120px">
                                <canvas class="mx-auto" id="monthlyProgress" width="150" height="150"></canvas>
                                <p class="h3 text-primary fw-normal position-absolute top-50 start-50 translate-middle text-center m-0">80%</p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-lg-6 border-start">
                      <p class="fw-bold h2 text-primary">80.56 Gb</p>
                      <p class="text-xs fw-light text-gray-500 mb-0">Current Plan</p>
                      <p class="text-gray-500">100 Gb Monthly</p>
                    </div>
                  </div>
                  <p class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- User Actibity-->
              <div class="card h-100 mb-0">
                <div class="card-body">
                  <h2 class="h3 fw-normal mb-4">User Activity</h2>
                  <p class="display-6">210</p>
                  <h3 class="h4 fw-normal">Social Users</h3>
                  <div class="progress rounded-0 mb-3">
                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="text-start">
                      <p class="h5 fw-normal mb-2">Pages Visits</p>
                      <p class="fw-bold text-xl text-primary mb-0">230</p>
                    </div>
                    <div class="text-end">
                      <p class="h5 fw-normal mb-2">New Visits</p>
                      <p class="fw-bold text-xl text-primary mb-0">73.4%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
      <section class="mb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <!-- Recent Updates Widget          -->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#updates-box" aria-expanded="true">News Updates</a></h2>
                </div>
                <div class="card-body p-0">
                  <div class="collapse show" id="updates-box" role="tabpanel">
                    <ul class="list-unstyled">
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- Daily Feed Widget-->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#feeds-box" aria-expanded="true">Your daily Feeds
                      <div class="badge bg-primary position-absolute end-0 me-4">10 messages</div></a></h2>
                </div>
                <div class="card-body-0">
                  <div class="collapse show" id="feeds-box" role="tabpanel">
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-5.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Sri Rejeki</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Aril Plongoh</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                            <div class="d-flex"><a class="btn btn-xs btn-dark py-1 m-1" href="#!"><i class="fas fa-thumbs-up me-1"></i>Like</a><a class="btn btn-xs btn-dark py-1 m-1" href="#!"><i class="fas fa-heart me-1"> </i>Love  </a></div>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Sasmita Bijer</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Jason Ranti</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                      <div class="mt-3 ms-5 ps-3">
                        <div class="bg-light p-3 shadow-sm"><small class="text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years.</small></div>
                        <div class="text-end mt-2"><a class="btn btn-xs btn-dark py-1" href="#!"><i class="fas fa-thumbs-up me-1"></i>Like</a></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-6.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Sam Shu Din</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Daily Feed Widget End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- Recent Activities Widget      -->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#activities-box" aria-expanded="true">Recent Activities</a></h2>
                </div>
                <div class="card-body p-0">
                  <div class="collapse show" id="activities-box" role="tabpanel">
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
          <div class="row text-center gy-3">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0 text-sm text-gray-600">Your company &copy; 2017-2021</p>
            </div>
            <div class="col-sm-6 text-sm-end">
              <p class="mb-0 text-sm text-gray-600">Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>