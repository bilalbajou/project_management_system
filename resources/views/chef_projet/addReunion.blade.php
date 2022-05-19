<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/dashboard.png"/>
    @extends('style.style')
    <title>Document</title>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
       
        @extends('bloc.navbar')
       
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
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
                    <li class="nav-item"><a class="nav-link" href="">Liste des Tâche</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('addTache')}} ">Ajouter Tâche</a></li>
                  </ul>     
                </div>
    
              </li>
    
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <i class="user icon menu-icon mb-1"></i>
                  <span class="menu-title">coloborateur</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="">Liste des coloborateurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Ajouter Membre</a></li>
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
                    <li class="nav-item"> <a class="nav-link" href="">Liste des Réunions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Ajouter Réunion</a></li>
                  </ul>
                </div>
              </li>
             
            </ul>
          </nav>
          
          <!-- partial -->
          <div class="main-panel"> 
            <div class="content-wrapper pb-0"> 
              <h2 class="ui header">Ajouter une nouvelle reunion</h2>
               <form class="ui form" action="">
                <div class="fields">
                  <div class="six wide field">
                    <label>Nom du reunion</label>
                    <input type="text" name="nomreunion">
                  </div>
                  <div class="four wide field">
                    <label>Date de début</label>
                    <input type="date" name="dateDebut" >
                  </div>
                  <div class="six wide field">
                    <label>Date de fin</label>
                    <input type="date" name="dateFin">
                  </div>
                  <div class="six wide field">
                    <label>inviter</label>
                    <input type="text" name="lesinviter">
                  </div>
                </div>
                <div class="fields">
                  <div class="field sixteen wide">
                    <label>Description</label>
                    <textarea rows="3" name="descr"></textarea>
                  </div>
                </div>
                <div class="ui submit button black" id="btn_ajout">Ajouter</div>
                <div class="ui error message" ></div>
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
    @extends('js.js')
</body>
</html>