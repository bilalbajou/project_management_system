@extends('layouts.chef_projet.dashboard');

@section('title')
        Liste des Réunions
@endsection

@section('content')
<h2 class="ui header">Liste des reunions</h2>
<table class="ui celled table">
  <thead>
    <tr class="center aligned" ><th>#</th>
    <th class="center aligned" >titre du reunion</th>
    <th class="center aligned" >date et heure</th>
    <th class="center aligned" >Description</th> 
    <th class="center aligned" >Statut</th> 
    <th class="center aligned" ></th> 
  </tr></thead>
  <tbody>
    @foreach($reunion as $value)
    <tr>
      <td class="center aligned" data-label="Name">{{$value->id_reunion}}</td>
      <td class="center aligned"  data-label="Age">{{$value->sujet}}</td>
      <td class="center aligned"  data-label="Job">{{$value->Date_heure}}</td>
      <td  class="center aligned" data-label="Job">{{$value->Description}}</td>
      <td class="center aligned"  data-label="Job">{{$value->etat_reunion}}</td>    
      <td class="center aligned"  data-label="Job">
        {{-- <div class="ui icon button" data-tooltip="Modifier"> 
        <a href=""><i class="edit icon"></i> </a> </div> 
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a href=""><i class="trash icon"></i> </a> </div>  --}}
      {{-- <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a> --}}
  <div class="container_form">
  <form action="{{url('/reunion/update/{id_reunion}' . $value->id_reunion)}}" method="POST" id="form_modifier">
         
    @csrf
    @method('DELETE')
        <div class="ui icon button" data-tooltip="Modifier"> 
          <a><button type="submit" class="btn_update"><i class="edit icon"></i></button></a> </div>
  </form>
  <form action="{{url('projet/' . $value->id_reunion)}}" method="POST" id="form_suppr">
     
      @csrf
      @method('DELETE')
      <div class="ui icon button"  data-tooltip="Supprimer"> 
        <a ><button type="submit" class="btn_supp"><i class="trash icon"></i></button></a></div>
  </form>
  <form action="{{url('projet/détails/' . $value->id_reunion)}}" method="POST" id="form_view">
     
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