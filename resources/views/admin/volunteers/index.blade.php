@extends('adminlte::page')

@section('title', 'Volunteers')

@section('content_header')
    <h1>Volunteers</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Registered Volunteers</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Assigned Event</th>
                                <th>Assigned Task</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Amani Mussa</td>
                                <td>Coastal Ride</td>
                                <td>First Aid</td>
                                <td>+255 712 000 000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop