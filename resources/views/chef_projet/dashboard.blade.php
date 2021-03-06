@extends('layouts.chef_projet.dashboard')

@section('title')
       Tableau du bord
@endsection

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="row">
      <div class="col-12 col-xl-8 mb-1 mb-xl-0">
        <h3 class="font-weight-bold">Bonjour {{ Auth::user()->name}}</h3>
        <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
      </div>
      <div class="col-12 col-xl-4">
           <p id="horloge"></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 grid-margin ">
    <div class="card">
      <div class="card-people mt-auto d-flex justify-content-center">
        <img src="{{asset('assets/images/Enthusiastic-bro.png')}}" class="w-50 h-75" alt="people">
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin transparent">
    <div class="row">
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
          <div class="card-body">
            <p class="mb-4">Nombre des projets</p>
            <p class="fs-30 mb-2">{{$projets}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4">Nombre des taches</p>
            <p class="fs-30 mb-2">{{$taches}}</p>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4">Nombre des réunions</p>
            <p class="fs-30 mb-2">{{$reunions}}</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Nombre des collaborateurs </p>
            <p class="fs-30 mb-2">{{$collabs}}</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>   

@endsection
