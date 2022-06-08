@extends('layouts.chef_projet.dashboard')
@section('title')

@endsection

@section('content')
<h2 class="ui header">{{$tache->nom_tache}}</h2>
<form class="ui form" action="{{route('col_listetache.update')}}" method="POST">
  @csrf
    <div class="fields">
     
      <div class="four wide field">
        <label>Date de début</label>
        <input type="date" name="dateDebut" value="{{$tache->date_début}}" >
      </div>
      <div class="six wide field">
        <label>Durée du Tâche ( En jours )</label>
        <input type="text" name="dureeTache" value="{{$tache->durée}}">
      </div>
    </div>
    <div class="fields">
       
        <div class="eight wide field">
          <label>Projet</label>
          <input type="text" name="projet"   value="{{$tache->projet}}">
        </div>
        <div class="eight wide field">
          <label>etat de tache</label>
          <input type="text" name="projet"   value="{{$tache->état_tache}}">
        </div>
       
      </div>
    <div class="fields">
      <div class="field sixteen wide">
        <label>Description</label>
        <textarea rows="3" name="descr"></textarea>
      </div>
    </div>

    <form action="{{route('col_listetache.update',$tache->id_tache)}}" method="post" id="form_modifier">
      <div class="ui icon button" data-tooltip="Modifier"> 
        <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
</form> 
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
    @if (\Session::has('success'))
 <div class="ui visible message" role="alert">
   <p> {!! \Session::get('success') !!} </p>
 </div>
 @endif
   </form>
@endsection