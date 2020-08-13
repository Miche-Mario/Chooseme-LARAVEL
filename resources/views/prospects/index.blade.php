@extends('layouts.dashboard')


@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Liste des prospects</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped table-vcenter datatable" id="mydata">
                        <thead class="thead-primary">
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Date d'iinscription</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prospects as $key => $prospect )
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $prospect->nom }}</td>
                                    <td>{{ $prospect->prenom }}</td>
                                    <td>{{ $prospect->email }}</td>
                                    <td>{{ dateToFrench($prospect->created_at, 'd F Y à H:i:s') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
