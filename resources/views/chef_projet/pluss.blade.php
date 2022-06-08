@extends('layouts.chef_projet.dashboard')

@section('title')
<div class="row">
  <div class="col-md-6 mb-4 stretch-card transparent">
    <div class="card card-tale">
      <div class="card-body">
        <p class="mb-4">nom du projet</p>
        <p class="fs-30 mb-2">4006</p>
      </div>
    </div>
  </div>
  <div class="col-md-6 mb-4 stretch-card transparent">
    <div class="card card-dark-blue">
      <div class="card-body">
        <p class="mb-4">Nombre des tâches </p>
        <p class="fs-30 mb-2">34040</p>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
    <div class="card card-light-blue">
      <div class="card-body">
        <p class="mb-4">Nombre des taches finis</p>
        <p class="fs-30 mb-2">34040</p>
        
      </div>
    </div>
  </div>
  <div class="col-md-6 stretch-card transparent">
    <div class="card card-light-danger">
      <div class="card-body">
        <p class="mb-4">Nombre des réunions </p>
        <p class="fs-30 mb-2">47033</p>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection
@section('content')

          <!-- partial -->
          <div class="main-panel"> 
            <div class="content-wrapper pb-0"> 
              <h2 class="ui header">Liste des taches du projet</h2>
              <table class="ui celled table">
                <thead>
                  <th class="center aligned" >id tache</th>
                  <th class="center aligned" >nom de tache</th>
                  <th class="center aligned" >nom du collaborateurs</th> 
                  <th class="center aligned" >etat de la tache</th> 
                </tr></thead>
                <tbody>
                  @foreach($projet as $projets)
                  <tr>
                    <td class="center aligned"  data-label="Age">{{$projets->id_tache}}</td>
                    <td class="center aligned"  data-label="Job">{{$projets->nom_tache}}</td>
                    <td  class="center aligned" data-label="Job">{{$projets->name}}</td>
                    <td class="center aligned"  data-label="Job">{{$projets->état_tache}}</td>    
              
                  </tr>
                 @endforeach
                </tbody>
              </table>

            </div> @endsection
          </div>
        