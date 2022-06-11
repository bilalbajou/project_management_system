@extends('layouts.chef_projet.dashboard')

@section('title')
     Ajouter collaborateur
@endsection

@section('content')
<h2 class="ui header">Ajouter un nouveaux collaborateur</h2>
<form class="ui form" action="{{route('collabs.store')}}" method="post">
  @csrf
 <div class="fields">
   <div class="eight wide field">
     <label>Nom</label>
     <input type="text" name="nom" value="{{old('nom')}}">
   </div>
   <div class="eight wide field">
     <label>Prenom</label>
     <input type="text" name="prenom" value="{{old('prenom')}}">
   </div>
   
 </div>
 
 <div class="fields">
     <div class="eight wide field">
         <label>Email</label>
         <input type="text" name="email" value="{{old('email')}}">
       </div>
      <div class="eight wide field">
     <label>Téléphone</label>
     <input type="text" name="tel" value="{{old('tel')}}">
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
