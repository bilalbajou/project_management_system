@extends('layouts.chef_projet.dashboard')

@section('title')
     Ajouter tâche
@endsection

@section('content')
<h2 class="ui header">Ajouter une nouvelle tâche</h2>
<form class="ui form" action="{{route('taches.store')}}" method="POST">
  @csrf
    <div class="fields">
      <div class="six wide field">
        <label>Nom du Tâche</label>
        <input type="text" name="nomTache">
      </div>
      <div class="four wide field">
        <label>Date de début</label>
        <input type="date" name="dateDebut" >
      </div>
      <div class="six wide field">
        <label>Durée du Tâche ( En jours )</label>
        <input type="text" name="dureeTache">
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
          @if ($projets->count()==0)
          <a href="{{route('projets.create')}}"><button type="button" class="btn btn-outline-info">Info</button></a>
          @else
          <select class="ui dropdown" name="projet">
            @foreach ($projets as $value)
                <option value="{{ $value->id_projet }}"> {{$value->Nom_projet}} </option>
            @endforeach
          </select>
          @endif
         
        </div>
    
       
      </div>
    <div class="fields">
      <div class="field sixteen wide">
        <label>Description</label>
        <textarea rows="3" name="descr"></textarea>
      </div>
    </div>
    <input class="ui black button" type="submit" value="Ajouter">
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