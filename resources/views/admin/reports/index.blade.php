@extends('adminlte::page')

@section('title', 'Reports & Analytics')

@section('content_header')
    <h1>Reports & Analytics</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">User Growth Chart</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center">Chart will be rendered here.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Event Popularity</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center">Chart will be rendered here.</p>
                </div>
            </div>
        </div>
    </div>
@stop