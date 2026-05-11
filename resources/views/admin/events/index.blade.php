@extends('adminlte::page')

@section('title', 'Cycling Events')

@section('content_header')
    <h1>Cycling Events</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Upcoming & Past Events</h3>
                    <div class="card-tools">
                        <button class="btn btn-success btn-sm">Create Event</button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tanzania Cycling Tour 2026</td>
                                <td>May 15, 2026</td>
                                <td>Dodoma</td>
                                <td><span class="badge badge-warning">Upcoming</span></td>
                                <td>
                                    <button class="btn btn-info btn-sm">Manage</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop