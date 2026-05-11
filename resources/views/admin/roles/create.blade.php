@extends('adminlte::page')

@section('title', 'Create New Role | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create New Role</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.roles') }}" class="btn btn-default"><i class="fas fa-times"></i> Cancel</a>
                <button class="btn btn-primary"><i class="fas fa-save"></i> SAVE ROLE</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">BASIC INFORMATION</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Role Name</label>
                            <input type="text" class="form-control" placeholder="e.g. Editor">
                        </div>
                        <div class="form-group">
                            <label>Role Level</label>
                            <select class="form-control">
                                <option>Level 5 - Root Access</option>
                                <option>Level 4 - Senior Access</option>
                                <option>Level 3 - Management</option>
                                <option selected>Level 2 - Staff</option>
                                <option>Level 1 - Participant</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">INITIAL PERMISSIONS</h3>
                    </div>
                    <div class="card-body text-center py-5">
                        <i class="fas fa-shield-alt fa-3x text-muted mb-3"></i>
                        <p>You can assign detailed permissions after creating the role.</p>
                        <button class="btn btn-outline-primary">Browse Permissions Template</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop