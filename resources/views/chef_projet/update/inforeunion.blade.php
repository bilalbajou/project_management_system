@extends('layouts.chef_projet.dashboard')
@section('title')
      Modifier reunion
@endsection
@section('content')
<h2 class="ui header">Modifier une  reunion</h2>
<form class="ui form" action="{{route('reunions.update',$reunion->id_reunion)}}" method="POST">
   @csrf
   @method('PUT')
 <div class="fields">
   <div class="six wide field">
     <label>Sujet du reunion</label>
     <input type="text" name="sujetReunion" value="{{$reunion->sujet}}" >
   </div>
   <div class="four wide field">
     <label>Date et Heure</label>
     <input type="datetime-local" name="dateDebut" value="{{$reunion->date_heure}}">
   </div>
   <div class="six wide field">
     <label>Projet</label>
     <select class="ui dropdown" name="projet">
       @foreach ($projets as $item)
           <option value="{{  $item->id_projet }}">{{ $item->Nom_projet }}</option>
       @endforeach
     </select>
   </div>
 </div>
 <div class="fields">
   <div class="field sixteen wide">
     <label>Description</label>
     <textarea rows="3" name="descr">{{ $reunion->description}}</textarea>
   </div>
 </div>
 <input class="ui submit button black" id="btn_modifier" type="submit"  value="Modifier">
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
