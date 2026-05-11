@extends('adminlte::page')

@section('title', 'Registrations')

@section('content_header')
    <h1>Registrations</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Event Registrations</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Registration ID</th>
                                    <th>Cyclist</th>
                                    <th>Event</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">REG-8821</a></td>
                                    <td>Kelvin Peter</td>
                                    <td>Arusha Cycle Tour</td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>2026-05-10</td>
                                </tr>
                                <tr>
                                    <td><a href="#">REG-8822</a></td>
                                    <td>Sarah Juma</td>
                                    <td>Arusha Cycle Tour</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>2026-05-11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop