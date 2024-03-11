<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>@@yield('titre')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset ('assets_private/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_private/vendors/base/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{asset ('assets_private/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets_private/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
            <a class="navbar-brand brand-logo" href="index.html"
              ><img src="{{ asset('assets_private/images/logo.svg') }}" alt="logo"
            /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"
              ><img src="{{ asset('assets_private/images/logo-mini.svg') }}" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <!--<ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-1">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-message-text mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="messageDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Messages
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{ asset('assets_private/images/faces/face4.jpg') }}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{asset ('assets_private/images/faces/face2.jpg') }}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{ asset('assets_private/images/faces/face3.jpg') }}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Johnson</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
                <img src="images/faces/face5.jpg" alt="profile" />
                <span class="nav-profile-name">Louis Barnett</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- 2eme navbar -->

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Tableau de bord</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/evenement/evenement.html">
                <i class="mdi mdi-application menu-icon"></i>
                <span class="menu-title">Evènements</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/utilisateurs.html">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Utilisateurs</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/categories.html">
                <i class="mdi mdi-equal-box menu-icon"></i>
                <span class="menu-title">Catgories</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/profil/profil.html">
                <i class="mdi mdi-account-box-outline menu-icon"></i>
                <span class="menu-title">Profil</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- fin de la deuxieme nav bar-->

        <!-- la partie de bienvenue -->

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                      <h2>Bienvenue Administraeur OUEDRAOGO,</h2>
                      <p class="mb-md-0">dans votre tableau de bord</p>
                    </div>
                    <div class="d-flex">
                      <i class="mdi mdi-home text-muted hover-cursor"></i>
                      <p class="text-muted mb-0 hover-cursor">
                        &nbsp;/&nbsp;Tableau de bord&nbsp;
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- fin de bienvenue -->

            <!-- partie de evenement catégorie et utilisateur -->

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="overview-tab"
                          data-bs-toggle="tab"
                          href="#overview"
                          role="tab"
                          aria-controls="overview"
                          aria-selected="true"
                          >Evènements</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="sales-tab"
                          data-bs-toggle="tab"
                          href="#sales"
                          role="tab"
                          aria-controls="sales"
                          aria-selected="false"
                          >Cathégories</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="purchases-tab"
                          data-bs-toggle="tab"
                          href="#purchases"
                          role="tab"
                          aria-controls="purchases"
                          aria-selected="false"
                          >Utilisateurs</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content py-0 px-0">
                      <div
                        class="tab-pane fade show active"
                        id="overview"
                        role="tabpanel"
                        aria-labelledby="overview-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a
                                  class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                  href="#"
                                  role="button"
                                  id="dropdownMenuLinkA"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <h5 class="mb-0 d-inline-block">
                                    26 Jul 2018
                                  </h5>
                                </a>
                                <div
                                  class="dropdown-menu"
                                  aria-labelledby="dropdownMenuLinkA"
                                >
                                  <a class="dropdown-item" href="#"
                                    >12 Aug 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >22 Sep 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >21 Oct 2018</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Revenue</small>
                              <h5 class="me-2 mb-0">$577545</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-eye me-3 icon-lg text-success"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Total views</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-download me-3 icon-lg text-warning"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Downloads</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-flag me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Flagged</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="sales"
                        role="tabpanel"
                        aria-labelledby="sales-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a
                                  class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                  href="#"
                                  role="button"
                                  id="dropdownMenuLinkA"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <h5 class="mb-0 d-inline-block">
                                    26 Jul 2018
                                  </h5>
                                </a>
                                <div
                                  class="dropdown-menu"
                                  aria-labelledby="dropdownMenuLinkA"
                                >
                                  <a class="dropdown-item" href="#"
                                    >12 Aug 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >22 Sep 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >21 Oct 2018</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-download me-3 icon-lg text-warning"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Downloads</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-eye me-3 icon-lg text-success"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Total views</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Revenue</small>
                              <h5 class="me-2 mb-0">$577545</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-flag me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Flagged</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="purchases"
                        role="tabpanel"
                        aria-labelledby="purchases-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a
                                  class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                  href="#"
                                  role="button"
                                  id="dropdownMenuLinkA"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <h5 class="mb-0 d-inline-block">
                                    26 Jul 2018
                                  </h5>
                                </a>
                                <div
                                  class="dropdown-menu"
                                  aria-labelledby="dropdownMenuLinkA"
                                >
                                  <a class="dropdown-item" href="#"
                                    >12 Aug 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >22 Sep 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >21 Oct 2018</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Revenue</small>
                              <h5 class="me-2 mb-0">$577545</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-eye me-3 icon-lg text-success"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Total views</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-download me-3 icon-lg text-warning"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Downloads</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-flag me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Flagged</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- fin de evenement cathégorie et utilisateur -->

            <!-- évènement récent -->
            <div class="row">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Evènements Récents</p>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
                        <thead>
                          <tr>
                            <th>Nom</th>
                            <th>Lieu</th>
                            <th>Date debut</th>
                            <th>Date fin</th>
                            <th>Promoteur</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>FESPACO</td>
                            <td>OUAGADOUGOU</td>
                            <td>10/02/2023</td>
                            <td>10/05/2023</td>
                            <td>ORANGE</td>
                          </tr>
                          <tr>
                            <td>NAK</td>
                            <td>KOUDOUGOU</td>
                            <td>1/12/2023</td>
                            <td>10/12/2023</td>
                            <td>UNEB</td>
                          </tr>
                          <tr>
                            <td>SIAO</td>
                            <td>OUAGADOUGOU</td>
                            <td>3/02/2023</td>
                            <td>5/05/2023</td>
                            <td>SEB</td>
                          </tr>
                          <tr>
                            <td>FESTIGRILLE</td>
                            <td>OUAGADOUGOU</td>
                            <td>10/02/2023</td>
                            <td>10/05/2023</td>
                            <td>BUNESA</td>
                          </tr>
                          <tr>
                            <td>FETE de la MUSIC</td>
                            <td>OUAGADOUGOU</td>
                            <td>10/02/2023</td>
                            <td>10/05/2023</td>
                            <td>SIG</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright ©
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >bootstrapdash.com </a
                >2021</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Only the best
                <a href="https://www.bootstrapdash.com/" target="_blank">
                  Bootstrap dashboard
                </a>
                templates</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('assets_private/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset ('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets_private/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets_private/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets_private/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets_private/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets_private/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets_private/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets_private/js/data-table.js') }}"></script>
    <script src="{{ asset('assets_private/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets_private/js/dataTables.bootstrap4.js') }}"></script>
    <!-- End custom js for this page-->

    <script src="{{asset ('assets_private/js/js/jquery.cookie.js') }}" type="text/javascript"></script>
  </body>
</html>
