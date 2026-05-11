@extends('adminlte::page')

@section('title', 'User Management | CTCMS')

@section('content_header')
    <h1>User Management</h1>
@stop

@section('content')
    <div class="container-fluid">
        <!-- USER ROLES GRID -->
        <div class="row">
            <!-- ADMIN (Super) -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-danger">
                    <span class="info-box-icon"><i class="fas fa-user-shield"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ADMIN</span>
                        <span class="info-box-number">(Super User)</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">Full System Access</span>
                    </div>
                </div>
            </div>

            <!-- ORGANIZER (Event Mgr) -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-primary">
                    <span class="info-box-icon"><i class="fas fa-calendar-alt"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ORGANIZER</span>
                        <span class="info-box-number">(Event Mgr)</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">Manage Tours & Events</span>
                    </div>
                </div>
            </div>

            <!-- CYCLIST (Rider) -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-success">
                    <span class="info-box-icon"><i class="fas fa-bicycle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">CYCLIST</span>
                        <span class="info-box-number">(Rider)</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                        <span class="progress-description">Participants & Racers</span>
                    </div>
                </div>
            </div>

            <!-- SPONSOR (Funder) -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="fas fa-hand-holding-usd"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">SPONSOR</span>
                        <span class="info-box-number">(Funder)</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">Financial Partners</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <!-- VOLUNTEER (Helper) -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-hands-helping"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">VOLUNTEER</span>
                        <span class="info-box-number">(Helper)</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">Event Assistance</span>
                    </div>
                </div>
            </div>

            <!-- PARTNER (Collaborator) -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-secondary">
                    <span class="info-box-icon"><i class="fas fa-handshake"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">PARTNER</span>
                        <span class="info-box-number">(Collaborator)</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 30%"></div>
                        </div>
                        <span class="progress-description">Strategic Alliances</span>
                    </div>
                </div>
            </div>

            <!-- GUEST (Visitor) -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-dark">
                    <span class="info-box-icon"><i class="fas fa-user-clock"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">GUEST</span>
                        <span class="info-box-number">(Visitor)</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 10%"></div>
                        </div>
                        <span class="progress-description">Public View Access</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- USERS TABLE -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">All System Users</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search by name or email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Assigned Role</th>
                                    <th>Status</th>
                                    <th>Joined Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>System Admin</td>
                                    <td>admin@crosscycling.com</td>
                                    <td><span class="badge badge-danger">ADMIN</span></td>
                                    <td><span class="badge badge-success">Online</span></td>
                                    <td>May 10, 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kelvin Arusha</td>
                                    <td>kelvin@example.com</td>
                                    <td><span class="badge badge-success">CYCLIST</span></td>
                                    <td><span class="badge badge-warning">Away</span></td>
                                    <td>May 11, 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop