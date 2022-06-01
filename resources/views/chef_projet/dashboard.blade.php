@extends('layouts.chef_projet.dashboard');

@section('title')
      Tableau du board
@endsection

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="row">
      <div class="col-12 col-xl-8 mb-1 mb-xl-0">
        <h3 class="font-weight-bold">Bonjour {{ Auth::user()->name}}</h3>
      </div>
      <div class="col-12 col-xl-4">
           <p id="horloge"></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card tale-bg">
      <div class="card-people mt-auto">
        <img src="images/dashboard/people.svg" alt="people">
        <div class="weather-info">
          <div class="d-flex">
            <div>
              <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
            </div>
            <div class="ml-2">
              <h4 class="location font-weight-normal" id="city">Bangalore</h4>
              <h6 class="font-weight-normal" id="country">India</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin transparent">
    <div class="row">
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
          <div class="card-body">
            <p class="mb-4">Nombre des Collaborateurs</p>
            <p class="fs-30 mb-2">4006</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4">Nombre des Projets</p>
            <p class="fs-30 mb-2">34040</p>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4">Nombre des Réunions</p>
            <p class="fs-30 mb-2">34040</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Nombre des Tâche </p>
            <p class="fs-30 mb-2">47033</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection