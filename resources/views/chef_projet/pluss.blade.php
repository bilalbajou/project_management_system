@extends('layouts.chef_projet.dashboard')

@section('title')
      Liste des projets
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
        