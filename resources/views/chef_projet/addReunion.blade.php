@extends('layouts.chef_projet.dashboard')
@section('title')
      Ajouter reunion
@endsection
@section('content')
<h2 class="ui header">Ajouter une nouvelle reunion</h2>
<form class="ui form" action="{{route('reunions.store')}}" method="post">
 @csrf
 <div class="fields">
   <div class="six wide field">
     <label>Sujet du reunion</label>
     <input type="text" name="sujetReunion" value="{{old('sujetReunion')}}">
   </div>
   <div class="four wide field">
     <label>Date et Heure</label>
     <input type="datetime-local" name="dateDebut" value="{{old('dateDebut')}}">
   </div>
   <div class="six wide field">
     <label>Projet</label>
     @if ($projets->count()==0)
     <a href="{{route('projets.create')}}"><button type="button" class="btn btn-warning">Ajouter projet</button></a>
     @else
      <select class="ui dropdown" name="projet">
       @foreach ($projets as $item)
           <option value="{{  $item->id_projet }}">{{ $item->Nom_projet }}</option>
       @endforeach
     </select>
     @endif
    
    
   </div>
 </div>
 <div class="fields">
   <div class="field sixteen wide">
     <label>Description</label>
     <textarea rows="3" name="descr">{{old('descr')}}</textarea>
   </div>
 </div>
 <input class="ui submit button black" id="btn_ajout" type="submit"  value="Ajouter">
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
