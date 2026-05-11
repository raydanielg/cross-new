@extends('adminlte::page')

@section('title', 'Security & Access')

@section('content_header')
    <h1>Security & Access</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Recent Login Attempts</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Admin logged in from 127.0.0.1 - 2 mins ago</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop