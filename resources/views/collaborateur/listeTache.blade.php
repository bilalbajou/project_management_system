@extends('layouts.chef_projet.dashboard1')

@section('title')
      Liste des tâches
@endsection

@section('content')
<h2 class="ui header">Liste des tâches</h2>
@if (\Session::has('success'))
 <div class="ui visible message" role="alert">
   <p> {!! \Session::get('success') !!} </p>
 </div>
 @endif
<table class="ui celled table">
  <thead>
    <tr class="center aligned" ><th>#</th>
    <th class="center aligned" >Nom du tache</th>
    <th class="center aligned" >Date début</th>
    <th class="center aligned" >durée</th>
    <th class="center aligned" >Statut</th> 
    <th class="center aligned" >Projet</th> 
    <th class="center aligned" >Action</th> 
  </tr></thead>
  <tbody>
    @foreach($tache as $value)

    <tr>
      <td class="center aligned" data-label="Name">{{$value->id_tache}}</td>
      <td class="center aligned"  data-label="Age">{{$value->nom_tache}}</td>
      <td class="center aligned"  data-label="Job">{{$value->date_début}}</td>
      <td  class="center aligned" data-label="Job">{{$value->durée}}</td>
      <td class="center aligned"  data-label="Job">{{$value->état_tache}}</td>    
      <td class="center aligned"  data-label="Job">{{$value->projet}}</td>   
      <td class="center aligned"  data-label="Job">
  <div class="container_form">
 
  <form action="{{route('col_listetache.edit',$value->id_tache)}}" method="GET" id="form_modifier">
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
  </form>
 
  
</div>
</td>
       
          
      </td>    
    </tr>
   @endforeach
  </tbody>
</table> 
@endsection