@extends('layouts.chef_projet.dashboard')

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
      <td class="center aligned" data-label="Name">{{++$i}}</td>
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