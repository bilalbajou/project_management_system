@extends('layouts.chef_projet.dashboard');

@section('title')
     Modifier projet
@endsection

@section('content')
<h2 class="ui header">Modifier un projet </h2>
              
<form class="ui form" action="{{route('projets.update',$projet->id_projet)}}" method="POST">
  @csrf
  @method('PUT')
 <div class="fields">
   <div class="eight wide field">
     <label>Nom du projet</label>
     <input type="text" value="{{$projet->Nom_projet}}" name="nomProjet"> 
   </div>
   <div class="eight wide field">
     <label>Date de fin</label>
     <input type="date" value="{{$projet->Date_fin}}" name="dateFin">
   </div>
 </div>
 <div class="fields">
   <div class="field sixteen wide">
     <label>Description</label>
     <textarea rows="3"  name="descr"> {{$projet->description_projet}} </textarea>
   </div>
 </div>
 <input class="ui submit button black" id="btn_mod" type="submit" value="Modifier">
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
