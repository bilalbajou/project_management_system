@extends('layouts.chef_projet.dashboard')

@section('title')
      Liste des réunions
@endsection

@section('content')
<h2 class="ui header">Liste des réunions</h2>
@if (\Session::has('success'))
 <div class="ui visible message" role="alert">
   <p> {!! \Session::get('success') !!} </p>
 </div>
 @endif
<table class="ui celled table">
  <thead>
    <tr class="center aligned" ><th>#</th>
      <th class="center aligned" >Sujet</th>
      <th class="center aligned" >date et heure</th>
      <th class="center aligned" >Statut</th> 
      <th class="center aligned" >Projet</th> 
      <th class="center aligned" >Action</th> 
  </tr></thead>
  <tbody>
    @foreach($reunion as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{$value->id_reunion}}</td>
      <td class="center aligned" data-label="Name">{{$value->sujet}}</td>
      <td class="center aligned" data-label="Name">{{$value->date_heure}}</td>
      <td class="center aligned" data-label="Name">{{$value->etat_reunion}}</td>
      <td class="center aligned" data-label="Name">{{$value->Nom_projet}}</td>
      <td class="center aligned"  data-label="Job">
  <div class="container_form">
  <form action="{{route('reunions.edit',$value->id_reunion)}}" method="GET" id="form_modifier">
         
       @csrf
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
  </form>
  <form action="{{route('reunions.destroy',$value->id_reunion)}}" method="POST" id="form_suppr">
     
      @csrf
      @method('DELETE')
      <div class="ui icon button"  data-tooltip="Supprimer"> 
        <a ><button type="submit" class="btn_supp"><i class="trash icon"></i></button></a></div>
  </form>

</div>
</td>
       
          
      </td>    
    </tr>
   @endforeach
  </tbody>
</table> 
@endsection