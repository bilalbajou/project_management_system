@extends('layouts.chef_projet.dashboard')

@section('title')
     Modifier tache
@endsection

@section('content')
<h2 class="ui header">Modifier une tâche</h2>
<form class="ui form" action="{{route('taches.update',$tache->id_tache)}}" method="POST">
  @csrf
  @method('PUT')
    <div class="fields">
      <div class="six wide field">
        <label>Nom du Tâche</label>
        <input type="text" name="nomTache" value="{{$tache->nom_tache}}">
      </div>
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
          <label>Affecter à</label>
          <select class="ui dropdown" name="collab">
            @foreach ($collab as $item)
                 <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="eight wide field">
          <label>Projet</label>
          <select class="ui dropdown" name="projet">
            @foreach ($projets as $value)
                <option value="{{ $value->id_projet }}"> {{$value->Nom_projet}} </option>
            @endforeach
          </select>
        </div>
    
       
      </div>
    <div class="fields">
      <div class="field sixteen wide">
        <label>Description</label>
        <textarea rows="3" name="descr">{{$tache->description_tache}}</textarea>
      </div>
    </div>
    <input class="ui black button" type="submit" value="Modifier">
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