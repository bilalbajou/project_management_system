@extends('layouts.chef_projet.dashboard')

@section('title') 
   Liste des collaborateurs
@endsection

@section('content')
<h2 class="ui header">Liste des collaborateurs</h2>
@if (\Session::has('success'))
 <div class="ui visible message" role="alert">
   <p> {!! \Session::get('success') !!} </p>
 </div>
 @endif
<table class="ui celled table">
  <thead>
    <tr class="center aligned" ><th>#</th>
    <th class="center aligned" >Nom et Prenom</th>
    <th class="center aligned" >Email </th>
    <th class="center aligned" >Action</th> 
  </tr></thead>
  <tbody>
    @foreach($user as  $value)
    <tr>
      <td class="center aligned" data-label="Name" s>{{++$i}}</td>
      <td class="center aligned"  data-label="Age">{{$value->name }}</td>
      <td class="center aligned"  data-label="Job">{{$value->email}}</td>     

      <td class="center aligned"  data-label="Job">
       
  <div class="container_form">
  <form action="{{route('collabs.destroy',$value->id)}}" method="POST" id="form_suppr">
      @csrf
      @method('DELETE')
      <div class="ui icon button"  data-tooltip="Supprimer"> 
        <a ><button type="submit" class="btn_supp"><i class="trash icon"></i></button></a></div>
  </form>
</div>
</td>
       
          
      </td>    
    </tr>
   @endforeach
  </tbody>
</table>
@endsection