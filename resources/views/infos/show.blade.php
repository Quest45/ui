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

    <title>UNIVINFO - Information</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('css/vendor/fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/ionicons/css/ionicons.min.css') }}">

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
            <li class="nav-item"><a href="#" class="nav-link"><i data-feather="aperture"></i> Aide</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i data-feather="message-square"></i> Feedback</a></li>
          </ul>
        </div><!-- sidebar-body -->
    </div><!-- sidebar -->

    <div class="content content-page">
        <div class="header">
          <div class="header-left">
            <a href="#" class="burger-menu"><i data-feather="menu"></i></a>
  
            <div class="header-search">
              <i data-feather="search"></i>
              <input type="search" class="form-control" placeholder="Que recherchez-vous ?">
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
        
        <div class="pd-20 content-body">
          <div class="card-explode">
            <div class="card card-hover card-blog-one">
                <div class="card-img-wrapper"><img style="height:300px;" src="{{ asset('img/img26.jpg') }}" class="card-img" alt=""></div>
                <div class="card-body">
                    <div class="marker marker-ribbon marker-success marker-top-right pos-absolute t-10 r-0">Important</div> 
                  <h5 class="card-title">10 Technologies That Are About to Change the World</h5>
                  <p class="card-desc">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum.
                    </p>
                  </p>
                  <div style="padding-left:0px; padding-right: 0px; " class="card-footer">
                    <span>Présidence de l'Université</span>
                    <span class="tx-gray-500 mg-l-auto">
                    <nav class="nav nav-card-icon">
                    <a  href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></a>
                        <a style="margin-left: 0px;" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 svg-14"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></a>
                    </nav>
                    </span>
                    </div><!-- card-footer -->
                </div><!-- card-body -->
            </div>
        </div><!-- content-body -->
        </div><!-- content-body -->
      </div><!-- content -->
      <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
      <script src=" {{ asset('js/jqueryui/jquery-ui.min.js') }} "></script>
      <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
      <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
      <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
      <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
      <script src=" {{ asset('js/cassie.js') }} "></script>
  </body>
  </html>