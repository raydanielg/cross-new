@extends('adminlte::page')

@section('title', 'Roles Management | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Roles & Permissions Management</h1>
            </div>
            <div class="col-sm-6 text-right">
                <button class="btn btn-primary"><i class="fas fa-plus"></i> Create New Role</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <!-- SEARCH & FILTERS -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Roles by name, level...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control">
                            <option value="">Filter by Status (All)</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-default btn-block">Filter</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROLES STATISTICS -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3>12</h3>
                        <p>Total Roles</p>
                    </div>
                    <div class="icon"><i class="fas fa-tags"></i></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Active Roles</p>
                    </div>
                    <div class="icon"><i class="fas fa-check-circle"></i></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>2</h3>
                        <p>Inactive Roles</p>
                    </div>
                    <div class="icon"><i class="fas fa-times-circle"></i></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>156</h3>
                        <p>Assigned Users</p>
                    </div>
                    <div class="icon"><i class="fas fa-users"></i></div>
                </div>
            </div>
        </div>

        <!-- ROLES LIST TABLE -->
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Roles List</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 50px">#</th>
                            <th>ROLE NAME</th>
                            <th>LEVEL</th>
                            <th>STATUS</th>
                            <th>USERS</th>
                            <th style="width: 150px">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><b>Super Admin</b></td>
                            <td><span class="badge badge-danger">Level 5</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-sm btn-info" title="Permissions"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Senior Admin</td>
                            <td><span class="badge badge-warning">Level 4</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Event Admin</td>
                            <td><span class="badge badge-info">Level 3</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>7</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Support Admin</td>
                            <td><span class="badge badge-info">Level 3</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>5</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Organizer</td>
                            <td><span class="badge badge-primary">Level 2</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>12</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pro Cyclist</td>
                            <td><span class="badge badge-secondary">Level 1</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>45</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Amateur Cyclist</td>
                            <td><span class="badge badge-secondary">Level 1</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>234</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Platinum Sponsor</td>
                            <td><span class="badge badge-primary">Level 2</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>4</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Volunteer</td>
                            <td><span class="badge badge-secondary">Level 1</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>156</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Content Editor</td>
                            <td><span class="badge badge-primary">Level 2</span></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-key"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <div class="float-left">
                    <select class="form-control form-control-sm">
                        <option>Show 10 entries</option>
                        <option>Show 25 entries</option>
                        <option>Show 50 entries</option>
                    </select>
                </div>
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo; Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next &raquo;</a></li>
                </ul>
                <div class="text-center mt-2">
                    <span class="text-muted small">Page 1 of 3</span>
                </div>
            </div>
        </div>
    </div>
@stop