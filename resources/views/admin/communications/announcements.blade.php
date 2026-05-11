@extends('adminlte::page')

@section('title', 'Communications')

@section('content_header')
    <h1>Communications</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3">
            <a href="#" class="btn btn-primary btn-block mb-3">Compose New Message</a>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Folders</h3>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-inbox"></i> Inbox
                                <span class="badge bg-primary float-right">12</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-envelope"></i> Sent
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Announcements</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning">
                        <h5><i class="icon fas fa-bullhorn"></i> Important!</h5>
                        New rules for the 2026 Tour have been posted.
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop