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

    <title>UNIVINFO - Profile</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('js/fortawesome/fontawesome-free/css/all.min.css') }}">
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
      <div class="header">
        <div class="header-left">
          <a id="mainMenu" href="#" class="burger-menu d-none d-lg-flex"><i data-feather="menu"></i></a>
          <a id="profileMenu" href="#" class="burger-menu d-lg-none"><i data-feather="arrow-left"></i></a>

          <div class="header-search">
            <i data-feather="search"></i>
            <input type="search" class="form-control" placeholder="What are you looking for?">
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
                <a href="/users/1" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                <a href="/settings" class="dropdown-item"><i data-feather="briefcase"></i> Paramètres</a>
                <a href="/logout" class="dropdown-item"><i data-feather="log-out"></i> Déconnexion</a>
              </div>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- header-right -->
      </div><!-- header -->

      <div class="content-body content-body-profile">
        <div class="profile-sidebar">
          <div class="profile-sidebar-header">
            <div class="avatar"><img src="{{ asset('img/img9.jpg') }}" class="rounded-circle" alt=""></div>

            <h5>Abigail Johnson</h5>
            <p>Etudiant en 1ère année (ENSI)</p>
            <span>Lomé, Zanguéra</span>
            
          </div><!-- profile-sidebar-header -->
            <hr class="mg-b-25">
          <div class="profile-sidebar-body">
            <label class="content-label">Information personnelles</label>
            <ul class="list-unstyled profile-info-list mg-b-0">
              <li><i data-feather="briefcase"></i> <span class="tx-color-03">ENSI, génie civil</span></li>
              <li><i data-feather="home"></i> <span class="tx-color-03">Togo, Lomé (Zanguéra)</span></li>
              <li><i data-feather="smartphone"></i> <a href="#">(+228) 90 23 52 52</a></li>
              <li><i data-feather="mail"></i> <a href="#">me@johnson.tg</a></li>
            </ul>
          </div><!-- profile-sidebar-body -->
        </div><!-- profile-sidebar -->
        <div class="profile-body">
          <div class="profile-body-header">
            <div class="nav-wrapper">
              <ul class="nav nav-line" id="profileTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Aperçu</a>
                </li>
              </ul>
            </div><!-- nav-wrapper -->
          </div><!-- profile-body-header -->
          <div class="tab-content pd-15 pd-sm-20">
            <div id="overview" class="tab-pane active show">
              <label class="content-label content-label-lg mg-b-15 tx-color-01">Biographie</label>
              <p class="tx-color-03">Un développeur front-end qui se concentre davantage sur la conception de l'interface utilisateur, une assistante d'interface Web, une connectrice géniale et une jumelle perdu depuis longtemps de Vin Diesel. </p>

              <hr class="mg-y-15 op-0">
              <div class=" mg-sm-t-20">
                <div class="card card-hover card-calendar-one">
                  <div class="row no-gutters">
                    <div class="col-sm order-1 order-sm-0">
                      <div class="card-header bg-transparent pd-y-15 pd-l-20 pd-r-15 bd-b-0">
                        <div>
                          <h6 class="card-title mg-b-0">Prochains cours</h6>
                        </div>
                        <nav class="nav">
                          <a title="afficher le calendrier" href="/calendar" class="link-gray-500"><i  style="height:20px;" data-feather="calendar"></i></a>
                        </nav>
                      </div>
                      <div class="card-body pd-t-0">
                        <ul class="list-unstyled mg-b-0">
                          <li>
                            <h6 class="tx-13 mg-b-3"><a href="">Mathématiques 100</a> <span class="bg-blue"></span></h6>
                            <p class="tx-12 tx-color-04 mg-b-10">Aujourd'hui, 8:00 - 11:00 | présentiel | <em>Pr Akapko kodjo jean</em></p>
                            <div class="avatar-group">
                              <div class="avatar avatar-xxs"><img src="{{ asset('img/img6.jpg') }}" class="rounded-circle" alt=""></div>
                              <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-dark">k</span></div>
                            </div>
                          </li>
                          <li>
                            <h6 class="tx-13 mg-b-3"><a href="">Cours d'électronique 200</a> <span class="bg-pink"></span></h6>
                            <p class="tx-12 tx-color-04 mg-b-10">Aujourd'hui, 15:00 - 18:00 | présentiel | <em>Mme Afandédji georgette </em></p>
                            <div class="avatar-group">
                              <div class="avatar avatar-xxs"><img src="{{ asset('img/img6.jpg') }}" class="rounded-circle" alt=""></div>
                              <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-dark">a</span></div>
                              <div class="avatar avatar-xxs"><img src="{{ asset('img/img7.jpg') }}" class="rounded-circle" alt=""></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div><!-- col -->
                    <div class="col-sm">
                      <div class="ht-100p bd-sm-l pd-x-15 pd-sm-x-20 pd-t-15 pd-sm-t-20 pd-b-15">
                        <div id="datepicker1" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">June</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">31</span></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">5</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">6</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">12</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">13</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">19</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">20</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">26</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">27</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td></tr></tbody></table></div></div>
                      </div>
                    </div><!-- col -->
                  </div>
                </div><!-- card -->
              </div>
            </div>
          </div><!-- tab-content -->
        </div>
      </div><!-- content-body -->
    </div><!-- content -->

    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
    <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
    <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
    <script src=" {{ asset('js/cassie.js') }} "></script>
    <script>
      $(function(){

        'use strict'

        $('#profileMenu').on('click', function(e) {
          e.preventDefault();

          $('body').addClass('profile-menu-show');
          $('#mainMenu').removeClass('d-none');
          $(this).addClass('d-none');
        })

      })
    </script>
  </body>
</html>
