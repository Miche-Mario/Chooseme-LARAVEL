@extends('layouts.dashboard')


@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Liste des utilisateurs du site</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped table-vcenter datatable" id="mydata">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user )
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->nom }}</td>
                                    <td>{{ $user->email }}</td>
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
