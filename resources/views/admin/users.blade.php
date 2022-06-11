@extends('layouts.admin.dashboard')

@section('title')
      Utilisateurs 
@endsection

@section('content')
<h2 class="ui header">Liste des Utilisateurs</h2>
@if (\Session::has('success'))
 <div class="ui visible message" role="alert">
   <p> {!! \Session::get('success') !!} </p>
 </div>
 @endif
<table class="ui celled table">
  <thead>
    <tr class="center aligned" ><th>#</th>
      <th class="center aligned" >Nom</th>
      <th class="center aligned" >Email</th>
      <th class="center aligned" >Type de compte</th>
      <th class="center aligned" >Action</th> 
  </tr></thead>
  <tbody>
    @foreach($users as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{++$i}}</td>
      <td class="center aligned"  data-label="Age">{{$value->name}}</td>
      <td class="center aligned"  data-label="Job">{{$value->email}}</td>
      <td  class="center aligned" data-label="Job">{{$value->user_type}}</td>
      <td class="center aligned"  data-label="Job">
      
  <div class="container_form">
    @if ($value->status=="A")
     <form action="{{route('utilisateurs.désactiver',$value->id)}}" method="post" id="form_modifier">
      @csrf
      @method('PUT')
        <div class="ui icon button"> 
          <a><button type="submit" class="btn_update">Désactiver</button></a> </div>
  </form>
    @endif
    @if ($value->status=="D")
     <form action="{{route('utilisateurs.activer',$value->id)}}" method="post" id="form_modifier">
      @csrf
      @method('PUT')
        <div class="ui icon button"> 
          <a><button type="submit" class="btn_update">Activer</button></a> </div>
  </form>
    @endif
  
 
</div>
</td>          
  </td>    
    </tr>
   @endforeach
  </tbody>
</table> 
@endsection