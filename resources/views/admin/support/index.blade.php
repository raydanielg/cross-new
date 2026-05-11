@extends('adminlte::page')

@section('title', 'Mobile App & Support')

@section('content_header')
    <h1>Mobile App Management</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Mobile App Version Control</h3>
                </div>
                <div class="card-body">
                    <p>Current Android Version: 1.0.2</p>
                    <p>Current iOS Version: 1.0.0</p>
                    <button class="btn btn-info">Push Update</button>
                </div>
            </div>
        </div>
    </div>
@stop