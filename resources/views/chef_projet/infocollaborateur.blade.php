@extends('layouts.chef_projet.dashboard')

@section('title')
     modifier collaborateur
@endsection

@section('content')
<h2 class="ui header">modifier un collaborateur</h2>
<form class="ui form" action="{{route('collabs.update')}}" method="post">
  @csrf
 <div class="fields">
   <div class="eight wide field">
     <label>Nom</label>
     <input type="text" name="nom">
   </div>
   <div class="eight wide field">
     <label>Prenom</label>
     <input type="text" name="prenom">
   </div>
   
 </div>
 
 <div class="fields">
     <div class="eight wide field">
         <label>Email</label>
         <input type="text" name="email">
       </div>
      <div class="eight wide field">
     <label>Mot de passe</label>
     <input type="text" name="pass">
       </div>
 </div>
 <input class="ui submit button black" id="btn_ajout" type="submit" value="Ajouter">
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
