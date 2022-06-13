<!DOCTYPE html>
    <html lang="en">
    
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title')</title>
<!-- plugins:css -->
      <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
       <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
<!-- endinject -->
<!-- Plugin css for this page -->
<script >
  document.querySelector("body").style.display = "none";
document.querySelector("body").classList.add("spinner-1");
setTimeout(() => {
document.querySelector("body").classList.remove("spinner-1");
document.querySelector("body").style.display = "block";
}, 1000);
</script>
       <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">

<!-- End plugin css for this page -->
<!-- inject:css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/semantic_ui/semantic.min.css')}}">
    <link rel="stylesheet" href="{{asset('css_template/vertical-layout-light/style.css')}}">
     <link rel="stylesheet" href="{{asset('css_template/index.css')}}">
<!-- endinject -->      <link rel="icon" href="{{asset('assets/images/dashboard.png')}}">
    </head>
    <body onload="showDate();">
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
       
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo mr-7" href="{{route('Homepage')}}"><img src="{{asset('assets/images/full2_logo.png')}}" class="mr-2" alt="logo"/></a>
              <a class="navbar-brand brand-logo-mini" href="{{route('Homepage')}}"><img src="{{asset('assets/images/small_logo.png')}}" alt="logo"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
              </button>
            
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                      <i class="ti-settings text-primary"></i>
                      Profile
                    </a> 
                    <a href="dropdown-item">
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      
                      <x-jet-dropdown-link href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                      this.closest('form').submit();"> 
                       <i class="ti-power-off text-primary"></i>  {{ __('Déconnexion') }}
                      </x-jet-dropdown-link> 
                      </form>
                      </a> 
                   
                </div>
                </li>
           
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
              </button>
            </div>
          </nav>       
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_settings-panel.html -->
         
          <!-- partial -->
          <!-- partial:partials/_sidebar.html -->
          
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('redirect') }}">
                  <i class="th icon menu-icon mb-1"></i>
                  <span class="menu-title">Tableau du bord</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('col_listetache.index')}}">
                  <i class="tasks icon menu-icon mb-1"></i>
                  <span class="menu-title">Mes tâches</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('col_listereunion.index')}}">
                  <i class="calendar icon menu-icon mb-1"></i>
                  <span class="menu-title">Mes Réunions</span>
                </a>
              </li> 
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel"> 
            <div class="content-wrapper pb-0"> 
                @yield('content')
            </div> 
            
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            
            <footer class="footer pt-5">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © {{date('Y')}}  <a href="{{route('Homepage')}}" target="_blank">Unipro</a> Tous droits réservés.</span>
                  
                </div>
              </footer>
            
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
     
 <script src="{{asset('vendors/js/vendor.bundle.base.js')}}" defer></script>

       <!-- plugins:js -->
 {{-- <script src="{{asset('assets/js/jquery.js')}}" ></script> --}}
 <script src="{{ asset('assets/semantic_ui/semantic.min.js')}}" defer></script>
 <!-- endinject -->
 <script src="{{asset('js_template/off-canvas.js')}}" defer></script>
 <script src="{{asset('js_template/hoverable-collapse.js')}}"defer ></script>
 {{-- <script src="{{asset('js_template/template.js')}}"defer></script> --}}
 <script src="{{asset('js_template/settings.js')}}" defer></script>
  <script src="{{asset('js_template/todolist.js')}}" defer></script> 
 <!-- endinject -->
 <!-- Custom js for this page-->
 <script src="{{asset('js/app.js')}}" defer></script>
 {{-- <script src="{{asset('js_template/dashboard.js')}}" defer></script> --}}
 {{-- <script src="js_template/Chart.roundedBarCharts.js"></script> --}}
 <!-- End custom js for this page-->
    </body>
    
    </html>