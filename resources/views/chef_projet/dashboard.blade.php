@extends('layouts.chef_projet.dashboard')

@section('title')
      Liste des tache
@endsection

@section('content')
<h2 class="ui header">Bonjour {{Auth::user()->name}}</h2>
@if (\Session::has('success'))
 <div class="ui visible message" role="alert">
   <p> {!! \Session::get('success') !!} </p>
 </div>
 @endif

@endsection