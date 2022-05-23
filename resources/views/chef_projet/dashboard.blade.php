{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            {{ __('Bonjour') }} {{ Auth::user()->name }}
        </h2>
    </x-slot> --}}
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      @extends('style.style')
      <link rel="icon" href="assets/images/dashboard.png"/>
      <title>Unipro</title>
      
    </head>
    <body onload="showDate();">
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
       
        @extends('bloc.navbar')
       
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_settings-panel.html -->
           {{-- <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
              <i class="settings-close ti-close"></i>
              <p class="settings-heading">Thème</p>
              <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
              <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
              <p class="settings-heading mt-2">HEADER SKINS</p>
              <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
              </div>
            </div>
          </div>  --}}
          <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">Réunions</a>
              </li>
              
            </ul>
            <div class="tab-content" id="setting-content">
              <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                <div class="events pt-2 px-3">
                  <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 11 2018</span>
                  </div>
                  <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                  <p class="text-gray mb-0">The total number of sessions</p>
                </div>
                <div class="events pt-4 px-3">
                  <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 7 2018</span>
                  </div>
                  <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                  <p class="text-gray mb-0 ">Call Sarah Graves</p>
                </div>
               
              </div>
              
            </div>
          </div> 
          <!-- partial -->
          <!-- partial:partials/_sidebar.html -->
          
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('redirect') }}">
                  <i class="th icon menu-icon mb-1"></i>
                  <span class="menu-title">Tableau du board</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="briefcase icon menu-icon mb-1"></i>
                  <span class="menu-title">Projets</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('listeProjet')}}">Liste des projets</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('addProjet')}}">Ajouter un projet</a></li>
                    
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <i class="tasks icon menu-icon mb-1"></i>
                  <span class="menu-title">Tâche</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Liste des Tâche</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('taches.create')}} ">Ajouter Tâche</a></li>
                  </ul>     
                </div>
    
              </li>
    
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <i class="user icon menu-icon mb-1"></i>
                  <span class="menu-title">Collaborateurs</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Liste des Collaborateurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('collaborateurs.create') }}">Ajouter Collaborateur</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <i class="calendar icon menu-icon mb-1"></i>
                  <span class="menu-title">Réunions</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Liste des Réunions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('reunions.create')}}">Ajouter Réunion</a></li>
                  </ul>
                </div>
              </li>
             
            </ul>
          </nav>
          
          <!-- partial -->
          <div class="main-panel"> 
            <div class="content-wrapper pb-0"> 
              <div class="row">
                <div class="col-md-12 grid-margin">
                  <div class="row">
                    <div class="col-12 col-xl-8 mb-1 mb-xl-0">
                      <h3 class="font-weight-bold">Bonjour {{ Auth::user()->name}}</h3>
                      <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                    </div>
                    <div class="col-12 col-xl-4">
                         <p id="horloge"></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card tale-bg">
                    <div class="card-people mt-auto">
                      <img src="images/dashboard/people.svg" alt="people">
                      <div class="weather-info">
                        <div class="d-flex">
                          <div>
                            <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                          </div>
                          <div class="ml-2">
                            <h4 class="location font-weight-normal" id="city">Bangalore</h4>
                            <h6 class="font-weight-normal" id="country">India</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                  <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                      <div class="card card-tale">
                        <div class="card-body">
                          <p class="mb-4">Nombre des Collaborateurs</p>
                          <p class="fs-30 mb-2">4006</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                      <div class="card card-dark-blue">
                        <div class="card-body">
                          <p class="mb-4">Nombre des Projets</p>
                          <p class="fs-30 mb-2">34040</p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                      <div class="card card-light-blue">
                        <div class="card-body">
                          <p class="mb-4">Nombre des Réunions</p>
                          <p class="fs-30 mb-2">34040</p>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                      <div class="card card-light-danger">
                        <div class="card-body">
                          <p class="mb-4">Nombre des Tâche </p>
                          <p class="fs-30 mb-2">47033</p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   

            </div> 
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            
            @extends('bloc.footer')
           
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <script>
       document.querySelector("body").style.display = "none";
document.querySelector("body").classList.add("spinner-1");
setTimeout(() => {
 document.querySelector("body").classList.remove("spinner-1");
 document.querySelector("body").style.display = "block";
}, 1000);
            
      </script>
         <script type="text/javascript"> 
          function refresh(){
              var t = 1000; // rafraîchissement en millisecondes
              setTimeout('showDate()',t)
          }
          function showDate() {
              var date = new Date()
              var h = date.getHours();
              var m = date.getMinutes();
              var s = date.getSeconds();
              if( h < 10 ){ h = '0' + h; }
              if( m < 10 ){ m = '0' + m; }
              if( s < 10 ){ s = '0' + s; }
              var time = h + ':' + m + ':' + s
              document.getElementById('horloge').innerHTML = time;
              refresh();
           }    
       </script>
      
      @extends('js.js')
    </body>
    
    </html>
    
    














    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
{{-- </x-app-layout> --}}
