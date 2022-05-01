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
      <title>Unipro</title>
      @extends('style.style')
      <link rel="icon" href="assets/images/dashboard.png"/>
    </head>
    <body>
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
                <a class="nav-link" href="{{ route('dashboard') }}">
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
                    <li class="nav-item"><a class="nav-link" href="{{route('addTache')}} ">Ajouter Tâche</a></li>
                  </ul>     
                </div>
    
              </li>
    
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <i class="user icon menu-icon mb-1"></i>
                  <span class="menu-title">Membres</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Liste des Membres</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Ajouter Membre</a></li>
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
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Liste des Réunions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Ajouter Réunion</a></li>
                  </ul>
                </div>
              </li>
             
            </ul>
          </nav>
          
          <!-- partial -->
          <div class="main-panel"> 
            <div class="content-wrapper pb-0"> 
              <h2 class="ui header">Ajouter nouveaux projet </h2>
              
               <form class="ui form" action="{{route('addProjet')}}" method="POST">
                 @csrf
                <div class="fields">
                  <div class="six wide field">
                    <label>Nom du projet</label>
                    <input type="text" name="nomProjet">
                    
                  </div>
                  <div class="four wide field">
                    <label>Date de début</label>
                    <input type="date" name="dateDebut" >
                  </div>
                  <div class="six wide field">
                    <label>Date de fin</label>
                    <input type="date" name="dateFin">
                  </div>
                 
                </div>
                <div class="fields">
                  <div class="field sixteen wide">
                    <label>Description</label>
                    <textarea rows="3" name="descr"></textarea>
                  </div>
                </div>
                <input class="ui submit button black" id="btn_ajout" type="submit" value="Ajouter">
                @if ($errors->any())
                <div class="ui info message">
                  <div class="header">
                    Vérifiez vos informations !
                  </div>
                  <ul class="list">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                     @endforeach
                  </ul>
                </div>
                @endif
               </form>
               
              
              
              
            </div> 
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <script>
                 document.querySelector("body").style.display = "none";
                  document.querySelector("body").classList.add("spinner-1");
                  setTimeout(() => {
                  document.querySelector("body").classList.remove("spinner-1");
                  document.querySelector("body").style.display = "block";
                  }, 1000);
              </script>
              
             
            @extends('bloc.footer')
            
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
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
