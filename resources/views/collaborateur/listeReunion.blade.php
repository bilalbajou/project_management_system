@extends('layouts.collaborateur.dashboard')

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
  </tr></thead>
  <tbody>
    @foreach($reunion as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{++$i}}</td>
      <td class="center aligned" data-label="Name">{{$value->sujet}}</td>
      <td class="center aligned" data-label="Name">{{$value->date_heure}}</td>
      <td class="center aligned" data-label="Name">{{$value->etat_reunion}}</td>
      <td class="center aligned" data-label="Name">{{$value->Nom_projet}}</td>
     
    </tr>
   @endforeach
  </tbody>
</table> 
@endsection