@extends('layouts/dashboard', ['title'=>'Home'])

@section('content_header')
    <h1>
        Tableau de bord
        <small>Bienvenue {{ auth::user()->nom }} {{ auth::user()->prenom }}</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Home</a></li>
        <li>Tableau de bord</li>
    </ol>
@stop

@section('content')
	<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $totalProspects }}</h3>
              <p>Prospects</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('prospects.index') }}" class="small-box-footer">Voir détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        </div>
        <!-- ./col -->

        <div class="col-md-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $totalUsers }}</h3>
              <p>Utilisateurs</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
            <a href="{{ route('users.index') }}" class="small-box-footer">Voir détails<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
  </section>
@stop
