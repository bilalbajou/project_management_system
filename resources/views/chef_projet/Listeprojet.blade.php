<<<<<<< HEAD
<<<<<<< HEAD
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
                    <li class="nav-item"><a class="nav-link" href="{{route('taches.index')}}">Liste des Tâche</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="{{route('collaborateurs.index')}}">Liste des Collaborateurs</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="{{route('reunions.index')}}">Liste des Réunions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('reunions.create')}}">Ajouter Réunion</a></li>
                  </ul>
                </div>
              </li>
             
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel"> 
            <div class="content-wrapper pb-0"> 
              <h2 class="ui header">Liste des projets</h2>
              <table class="ui celled table">
                <thead>
                  <tr class="center aligned" ><th>#</th>
                  <th class="center aligned" >Nom du projet</th>
                  <th class="center aligned" >Date début</th>
                  <th class="center aligned" >date fin</th>
                  <th class="center aligned" >Statut</th> 
                  <th class="center aligned" >description du projet</th> 

                  <th class="center aligned" ></th> 
                </tr></thead>
                <tbody>
                  @foreach($projets as $value)
                  <tr>
                    <td class="center aligned" data-label="Name">{{$value->id_projet}}</td>
                    <td class="center aligned"  data-label="Age">{{$value->Nom_projet}}</td>
                    <td class="center aligned"  data-label="Job">{{$value->Date_début}}</td>
                    <td  class="center aligned" data-label="Job">{{$value->Date_fin}}</td>
                    <td class="center aligned"  data-label="Job">{{$value->etat_projet}}</td>    
                    <td class="center aligned"  data-label="Job">{{$value->description_projet}}</td>    
                    <td class="center aligned"  data-label="Job">
                      {{-- <div class="ui icon button" data-tooltip="Modifier"> 
                      <a href=""><i class="edit icon"></i> </a> </div> 
                      <div class="ui icon button" data-tooltip="Modifier"> 
                        <a href=""><i class="trash icon"></i> </a> </div>  --}}
                    {{-- <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a> --}}
                <div class="container_form">
                <form action="{{url('/projet/update/' . $value->id_projet)}}" method="POST" id="form_modifier">
                       
                  @csrf
                  @method('delete')
                      <div class="ui icon button" data-tooltip="Modifier"> 
                        <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
                </form>
                <form action="{{url('projet/' . $value->id_projet)}}" method="POST" id="form_suppr">
                   
                    @csrf
                    @method('delete')
                    <div class="ui icon button"  data-tooltip="Supprimer"> 
                      <a ><button type="submit" class="btn_supp"><i class="trash icon"></i></button></a></div>
                </form>
                <form action="{{url('projet/détails/' . $value->id_projet)}}" method="POST" id="form_view">
                   
                  @csrf
                  @method('delete')
                  <div class="ui icon button"  data-tooltip="Plus"> 
                    <a ><button type="submit" class="btn_supp"><i class="eye icon"></i></button></a></div>
              </form>
              </div>
            </td>
                     
                        
                    </td>    
                  </tr>
                 @endforeach
                </tbody>
              </table>
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
       
      @extends('js.js')
    </body>
    
    </html>
    
    
=======
@extends('layouts.chef_projet.dashboard');
>>>>>>> 6051ec991e298887add1d91d60c2c2cb4c98a764
=======
@extends('layouts.chef_projet.dashboard')
>>>>>>> f97a4de2d96dbf66566dd395fd646193a1211de2

@section('title')
      Liste des projets
@endsection

@section('content')
<h2 class="ui header">Liste des projets</h2>
@if (\Session::has('success'))
 <div class="ui visible message" role="alert">
   <p> {!! \Session::get('success') !!} </p>
 </div>
 @endif
<table class="ui celled table">
  <thead>
    <tr class="center aligned" ><th>#</th>
      <th class="center aligned" >Nom du projet</th>
      <th class="center aligned" >Date début</th>
      <th class="center aligned" >date fin</th>
      <th class="center aligned" >Statut</th> 
      <th class="center aligned" >Action</th> 
  </tr></thead>
  <tbody>
    @foreach($projets as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{$value->id_projet}}</td>
      <td class="center aligned"  data-label="Age">{{$value->Nom_projet}}</td>
      <td class="center aligned"  data-label="Job">{{$value->Date_début}}</td>
      <td  class="center aligned" data-label="Job">{{$value->Date_fin}}</td>
      <td class="center aligned"  data-label="Job">{{$value->etat_projet}}</td>    
      <td class="center aligned"  data-label="Job">
      
  <div class="container_form">
  <form action="{{route('projets.edit',$value->id_projet)}}" method="GET" id="form_modifier">
         
    @csrf
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
  </form>
  <form action="{{route('projets.destroy',$value->id_projet)}}" method="POST" id="form_suppr">
      @csrf
      @method('DELETE')
      <div class="ui icon button"  data-tooltip="Supprimer"> 
        <a ><button type="submit" class="btn_supp"><i class="trash icon"></i></button></a></div>
  </form>
  <form action="{{route('projets.plus',$value->id_projet)}}" method="get" id="form_view">
     
    @csrf
    <div class="ui icon button"  data-tooltip="Plus"> 
      <a ><button type="submit" class="btn_supp"><i class="eye icon"></i></button></a></div>
</form>
</div>
</td>          
  </td>    
    </tr>
   @endforeach
  </tbody>
</table> 
@endsection