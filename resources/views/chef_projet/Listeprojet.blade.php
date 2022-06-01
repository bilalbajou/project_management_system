@extends('layouts.chef_projet.dashboard');

@section('title')
      Liste des projets
@endsection

@section('content')
<h2 class="ui header">Liste des projets</h2>
<table class="ui celled table">
  <thead>
    <tr class="center aligned" ><th>#</th>
    <th class="center aligned" >Nom du projet</th>
    <th class="center aligned" >Date début</th>
    <th class="center aligned" >date fin</th>
    <th class="center aligned" >Statut</th> 
    <th class="center aligned" ></th> 
  </tr></thead>
  <tbody>
    @foreach($projets as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{$value->id_projet}}</td>
      <td class="center aligned"  data-label="Age">{{$value->Nom_projet}}</td>
      <td class="center aligned"  data-label="Job">{{$value->Date_début}}</td>
      <td  class="center aligned" data-label="Job">{{$value->Date_fin}}</td>
      <td class="center aligned"  data-label="Job">{{$value->etat_projet}}</td>    
      <td class="center aligned"  data-label="Job">
        {{-- <div class="ui icon button" data-tooltip="Modifier"> 
        <a href=""><i class="edit icon"></i> </a> </div> 
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a href=""><i class="trash icon"></i> </a> </div>  --}}
      {{-- <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a> --}}
  <div class="container_form">
  <form action="{{url('/projet/update/' . $value->id_projet)}}" method="POST" id="form_modifier">
         
    @csrf
    @method('DELETE')
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
  </form>
  <form action="{{url('projet/' . $value->id_projet)}}" method="POST" id="form_suppr">
     
      @csrf
      @method('DELETE')
      <div class="ui icon button"  data-tooltip="Supprimer"> 
        <a ><button type="submit" class="btn_supp"><i class="trash icon"></i></button></a></div>
  </form>
  <form action="{{url('projet/détails/' . $value->id_projet)}}" method="POST" id="form_view">
     
    @csrf
    @method('DELETE')
    <div class="ui icon button"  data-tooltip="Plus"> 
      <a ><button type="submit" class="btn_supp"><i class="eye icon"></i></button></a></div>
</form>
</div>
</td>          
  </td>    
    </tr>
   @endforeach
  </tbody>
</table>
@endsection
