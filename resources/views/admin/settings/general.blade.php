@extends('adminlte::page')

@section('title', 'System Settings')

@section('content_header')
    <h1>System Settings</h1>
@stop

@section('content')
    <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="pill" href="#general" role="tab">General Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="email-tab" data-toggle="pill" href="#email" role="tab">Email Config</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade show active" id="general" role="tabpanel">
                    <div class="form-group">
                        <label>Application Name</label>
                        <input type="text" class="form-control" value="Cross Tanzania Cycling Management System">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop