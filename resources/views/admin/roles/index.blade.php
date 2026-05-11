@extends('adminlte::page')

@section('title', 'Roles Management | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Roles Management</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.roles.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Create New Role</a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        @include('admin.roles.partials.role-stats')
        
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Roles List</h3>
            </div>
            <div class="card-body p-0">
                @include('admin.roles.partials.role-table')
            </div>
        </div>
    </div>
@stop