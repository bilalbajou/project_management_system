@extends('layouts.chef_projet.dashboard1')

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
  </tr></thead>
  <tbody>
    @foreach($projet as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{$value->id_projet}}</td>
      <td class="center aligned"  data-label="Age">{{$value->Nom_projet}}</td>
      <td class="center aligned"  data-label="Job">{{$value->Date_début}}</td>
      <td  class="center aligned" data-label="Job">{{$value->Date_fin}}</td>
      <td class="center aligned"  data-label="Job">{{$value->etat_projet}}</td>    
      
    
    </tr>
   @endforeach
  </tbody>
</table> 
@endsection