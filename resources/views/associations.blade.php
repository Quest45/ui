<!DOCTYPE html>
<html lang="fr">
  
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UNIVINFO - description">
    <meta name="author" content="GTEA">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <title>UNIV-INFO - calendar</title>

       <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('js/fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/ionicons/css/ionicons.min.css') }}">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

  </head>
  <body>
    
    <div class="sidebar">
        <div class="sidebar-header">
          <div>
            <a href="/" class="sidebar-logo"><span>UNIVINFO</span></a>
            <small class="sidebar-logo-headline">UNIVERSITE CATHOLIQUE DE L'AFRIQUE DE L'OUEST</small>
          </div>
        </div><!-- sidebar-header -->
        <div id="dpSidebarBody" class="sidebar-body">
          <ul class="nav nav-sidebar">
            <li class="nav-label"><label class="content-label">MENU</label></li>
            <li class="nav-item show">
                <li class="nav-item"><a href="/infos" class="nav-link"><i data-feather="layers"></i> Publications</a></li>
                <li class="nav-item"><a href="/calendar" class="nav-link"><i data-feather="calendar"></i> Calendrier</a></li>
                <li class="nav-item"><a href="/restaurant" class="nav-link"><i data-feather="wind"></i> Restaurant</a></li>
                <li class="nav-item"><a href="/map" class="nav-link"><i data-feather="map-pin"></i> Carte interactive</a></li>
                <li class="nav-item"><a href="/associations" class="nav-link"><i data-feather="users"></i> Associations</a></li>
                <li class="nav-item"><a href="/distinction" class="nav-link"><i data-feather="award"></i> Distinctions</a></li>
                <li class="nav-item"><a href="/jobs" class="nav-link"><i data-feather="briefcase"></i> Emplois & Stages</a></li>
              </nav>
            </li>
          </ul>
          <hr class="mg-t-30 mg-b-25">
          <ul class="nav nav-sidebar">
          <li class="nav-label"><label class="content-label">SUPPORT</label></li>
            <li class="nav-item"><a href="/" class="nav-link"><i data-feather="aperture"></i> Aide</a></li>
            <li class="nav-item"><a href="/" class="nav-link"><i data-feather="message-square"></i> Feedback</a></li>
          </ul>
  
  
        </div><!-- sidebar-body -->
    </div><!-- sidebar -->

    <div class="content">
      <div class="header header-calendar">
        <div class="header-left">
          <a href="#" class="burger-menu"><i data-feather="menu"></i></a>

          <div class="header-search">
            <i data-feather="search"></i>
            <input type="search" class="form-control" placeholder="Search calendar">
          </div><!-- header-search -->
        </div><!-- header-left -->

        <div class="header-right">
          <a href="#" class="header-help-link"><i data-feather="help-circle"></i></a>
          <div class="dropdown dropdown-notification">
            <a href="#" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-menu-header">
                <h6>Notifications</h6>
                <a href="#"><i data-feather="more-vertical"></i></a>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-menu-body">
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                    <span>5 hours ago</span>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                    <span>8 hours ago</span>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                    <span>a day ago</span>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                    <span>2 days ago</span>
                  </div>
                </a>
              </div><!-- dropdown-menu-body -->
              <div class="dropdown-menu-footer">
                <a href="#">View All Notifications</a>
              </div>
            </div><!-- dropdown-menu -->
          </div>
          <div class="dropdown dropdown-loggeduser">
            <a href="#" class="dropdown-link" data-toggle="dropdown">
              <div class="avatar avatar-sm">
                <img src="{{ asset('img/img1.jpg') }}" class="rounded-circle" alt="">
              </div><!-- avatar -->
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-menu-header">
                <div class="media align-items-center">
                  <div class="avatar">
                    <img src="{{ asset('img/img1.jpg') }}" class="rounded-circle" alt="">
                  </div><!-- avatar -->
                  <div class="media-body mg-l-10">
                    <h6>Louise Kate Lumaad</h6>
                    <span>Administrator</span>
                  </div>
                </div><!-- media -->
              </div>
              <div class="dropdown-menu-body">
                  <a href="/users/1" class="dropdown-item"><i data-feather="user"></i> Profile</a>
                  <a href="/settings" class="dropdown-item"><i data-feather="briefcase"></i> Paramètres</a>
                  <a href="/logout" class="dropdown-item"><i data-feather="log-out"></i> Déconnexion</a>
                </div>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- header-right -->
      </div><!-- header -->
      <div class="content-body">
        <div style="float:left;" class="col-xl-6 mg-t-15 mg-sm-t-20">
            <div class="card card-project-three card-project-primary">
              <div class="card-body">
                <div class="marker marker-ribbon marker-primary marker-top-right pos-absolute t-10 r-0">A LA UNE</div>
                <label class="content-label tx-600 tx-primary mg-b-5">SCIENCES & TECHNOLOGIES</label>
                <h5 class="project-title"><a href="">GTEA (Lorem Ipusm Dolor Sit Emet)</a></h5>
                <p class="tx-13 tx-gray-600">Sunt in culpa qui officia deserunt mol. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol.</p>

                <div class="project-data-group mg-b-25">
                  <div>
                    <h3>80</h3>
                    <label>Projets</label>
                  </div>
                  <div>
                    <h3>6,000</h3>
                    <label><a href="#">Stars github</a></label>
                  </div>
                  <div>
                    <h3>Site web</h3>
                    <label><a href="#">www.gtea.com</a></label>
                  </div>
                </div><!-- project-data group -->

                <div class="d-flex align-items-center">
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><img src="{{ asset('img/img9.jpg') }}" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-primary">f</span></div>
                  </div>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-5">20 membres</span>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-auto">Depuis: Sep, 2019</span>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div>
         <div style="float:left;" class="col-xl-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-project-three">
              <div class="card-body">
                <label class="content-label tx-600 tx-success mg-b-5">ZOOLOGIE & BOTANIQUE</label>
                <h5 class="project-title"><a href="">DARWINO</a></h5>
                <p class="tx-13 tx-gray-600">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol. Excepteur sint occaecat cupidatat non proident.</p>

                <div class="project-data-group mg-b-25">
                    <div>
                        <h3>10</h3>
                        <label>Projets</label>
                      </div>
                      <div>
                        <h3>500</h3>
                        <label><a href="#">Stars github</a></label>
                      </div>
                      <div>
                        <h3>Site web</h3>
                        <label><a href="#">www.facebook.com/darwino</a></label>
                      </div>
                </div><!-- project-data group -->

                <div class="d-flex align-items-center">
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-green">m</span></div>
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-primary">x</span></div>
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-purple">b</span></div>
                  </div>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-5">30 membres</span>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-auto">Depuis: jan, 2020</span>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div>
      </div>
    </div><!-- content -->

    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/jqueryui/jquery-ui.min.js') }} "></script>        
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
    <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
    <script src=" {{ asset('js/moment/min/moment.min.js') }} "></script>
    <script src=" {{ asset('js/fullcalendar/fullcalendar.min.js') }} "></script>
    <script src=" {{ asset('js/select2/js/select2.full.min.js') }} "></script>
    <script src=" {{ asset('js/cassie.js') }} "></script>
    <script src=" {{ asset('js/calendar-events.js') }} "></script>
    <script src=" {{ asset('js/calendar.js') }} "></script>
    <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
  </body>

<!-- Mirrored from themepixels.me/cassie/pages/app-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 23:44:59 GMT -->
</html>
