@extends('adminlte::page')

@section('title', 'Event Statistics | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Event Statistics Dashboard</h1>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <!-- FIRST ROW: CORE STATS -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-left-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-muted font-weight-bold small mb-1">📊 TOTAL EVENTS</h6>
                                <h2 class="font-weight-bold mb-0">48</h2>
                                <div class="mt-2 small">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> +8</span>
                                    <span class="text-muted">this year</span><br>
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> +2</span>
                                    <span class="text-muted">this month</span>
                                </div>
                            </div>
                            <i class="fas fa-list fa-3x text-light-gray"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-left-success">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-success font-weight-bold small mb-1">🟢 UPCOMING</h6>
                                <h2 class="font-weight-bold mb-0">12</h2>
                                <div class="mt-2 small">
                                    <span class="text-dark font-weight-bold">Next: 15 June</span><br>
                                    <span class="text-muted">Kilimanjaro Challenge</span>
                                </div>
                            </div>
                            <i class="fas fa-calendar-check fa-3x text-light-gray"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-left-danger">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-danger font-weight-bold small mb-1">🔴 ONGOING</h6>
                                <h2 class="font-weight-bold mb-0">3</h2>
                                <div class="mt-2 small">
                                    <span class="text-dark font-weight-bold">Ends: 17 June</span><br>
                                    <span class="text-muted">Challenge</span>
                                </div>
                            </div>
                            <i class="fas fa-play-circle fa-3x text-light-gray"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECOND ROW: PERFORMANCE STATS -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-left-info">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-info font-weight-bold small mb-1">✅ COMPLETED</h6>
                                <h2 class="font-weight-bold mb-0">30</h2>
                                <div class="mt-2 small">
                                    <span class="text-dark font-weight-bold">62% success</span><br>
                                    <span class="text-muted">rate</span>
                                </div>
                            </div>
                            <i class="fas fa-check-double fa-3x text-light-gray"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-left-warning">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-muted font-weight-bold small mb-1">❌ CANCELLED</h6>
                                <h2 class="font-weight-bold mb-0">3</h2>
                                <div class="mt-2 small">
                                    <span class="text-danger font-weight-bold">6% of total</span><br>
                                    <span class="text-muted">&nbsp;</span>
                                </div>
                            </div>
                            <i class="fas fa-ban fa-3x text-light-gray"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-left-dark">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-dark font-weight-bold small mb-1">👥 TOTAL REACH</h6>
                                <h2 class="font-weight-bold mb-0">2,847</h2>
                                <div class="mt-2 small">
                                    <span class="text-muted">participants</span><br>
                                    <span class="text-muted">across events</span>
                                </div>
                            </div>
                            <i class="fas fa-users fa-3x text-light-gray"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .border-left-primary { border-left: 4px solid #007bff !important; }
        .border-left-success { border-left: 4px solid #28a745 !important; }
        .border-left-danger { border-left: 4px solid #dc3545 !important; }
        .border-left-info { border-left: 4px solid #17a2b8 !important; }
        .border-left-warning { border-left: 4px solid #ffc107 !important; }
        .border-left-dark { border-left: 4px solid #343a40 !important; }
        .text-light-gray { color: #e9ecef !important; }
        .card-body i { position: absolute; right: 1.25rem; top: 1.25rem; opacity: 0.1; }
    </style>
@stop