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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
            <!-- Create the editor container -->
            <form action="/">
              <textarea id="myEditor">
                Bienvenue !
              </textarea>
              <div style="float:right;" class="form-group d-flex mg-t-15 mg-b-0">
                <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill"><i data-feather="save"></i> ENREGISTRER</button>
              </div>
            </form>
        </div><!-- content-body -->
      </div><!-- content -->
      <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
      <script src=" {{ asset('js/jqueryui/jquery-ui.min.js') }} "></script>
      <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
      <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
      <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
      <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
      <script src=" {{ asset('js/cassie.js') }} "></script>
      <script src="https://cdn.tiny.cloud/1/id3nkenqfoygia99u47alvqvliwt3lc1hpwj7tou3wez29qj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script>
        tinymce.init({
          selector:"#myEditor",
          language: 'fr_FR',
          plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
          ],
          toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
          menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
          },
          menubar: 'favs file edit view insert format tools table help',
              });
      </script>
  </body>
  </html>