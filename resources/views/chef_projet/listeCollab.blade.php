@extends('layouts.chef_projet.dashboard')

@section('title')
     Liste collaborateurs
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
    <th class="center aligned" >nom et prenom</th>
    <th class="center aligned" >email </th>
    <th class="center aligned" >Action</th> 
  </tr></thead>
  <tbody>
    @foreach($user as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{$value->id}}</td>
      <td class="center aligned"  data-label="Age">{{$value->name }}</td>
      <td class="center aligned"  data-label="Job">{{$value->email}}</td>    
      <td class="center aligned"  data-label="Job">
        {{-- <div class="ui icon button" data-tooltip="Modifier"> 
        <a href=""><i class="edit icon"></i> </a> </div> 
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a href=""><i class="trash icon"></i> </a> </div>  --}}
      {{-- <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a> --}}
  <div class="container_form">
  <form action="{{route('collabs.update',$value->id)}}" method="POST" id="form_modifier">
         
    @csrf
    @method('DELETE')
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
  </form>
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