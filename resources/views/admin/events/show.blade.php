@extends('adminlte::page')

@section('title', 'Event Details | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('admin.events') }}" class="btn btn-default btn-sm mb-2"><i class="fas fa-arrow-left"></i> Back to Events</a>
                <h1 class="font-weight-bold"><i class="fas fa-bicycle text-primary mr-2"></i> KILIMANJARO CYCLING CHALLENGE 2026</h1>
                <p class="text-muted">The ultimate challenge on Africa's highest mountain</p>
            </div>
            <div class="col-sm-6 text-right">
                <button class="btn btn-primary mr-1"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid pb-5">
        <!-- TABS NAVIGATION -->
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="eventTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="summary-tab" data-toggle="pill" href="#summary" role="tab">Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="registrations-tab" data-toggle="pill" href="#registrations" role="tab">Registrations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="route-tab" data-toggle="pill" href="#route" role="tab">Route</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sponsors-tab" data-toggle="pill" href="#sponsors" role="tab">Sponsors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="photos-tab" data-toggle="pill" href="#photos" role="tab">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="eventTabContent">
                    <!-- SUMMARY TAB -->
                    <div class="tab-pane fade show active" id="summary" role="tabpanel">
                        <!-- EVENT OVERVIEW -->
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="info-box shadow-none border">
                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar-day"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Dates</span>
                                        <span class="info-box-number">15-17 Jun</span>
                                        <span class="text-muted small">3 days</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="info-box shadow-none border">
                                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-map-marker-alt"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Location</span>
                                        <span class="info-box-number text-truncate">Moshi, Kilimanjaro</span>
                                        <span class="text-muted small">Start: Town Sq</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="info-box shadow-none border">
                                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Capacity</span>
                                        <span class="info-box-number">156/200</span>
                                        <span class="text-muted small">78% filled</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="info-box shadow-none border">
                                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-money-bill-wave"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Fee</span>
                                        <span class="info-box-number">TSh 150k</span>
                                        <span class="text-muted small">Early: 120k</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="card card-outline card-secondary mt-3">
                            <div class="card-header"><h3 class="card-title">📝 DESCRIPTION</h3></div>
                            <div class="card-body">
                                <p>The Kilimanjaro Cycling Challenge is Tanzania's premier cycling competition, attracting elite riders from across East Africa. The route circles Mount Kilimanjaro, offering breathtaking views and challenging terrain. Participants will navigate through diverse landscapes, from lush forests to rugged volcanic paths, making this a true test of endurance and skill.</p>
                            </div>
                        </div>

                        <!-- QUICK ACTIONS -->
                        <div class="card card-outline card-primary mt-4">
                            <div class="card-header"><h3 class="card-title">🚀 QUICK ACTIONS</h3></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mb-2"><button class="btn btn-outline-primary btn-block"><i class="fas fa-list mr-1"></i> View Registrations</button></div>
                                    <div class="col-md-4 mb-2"><button class="btn btn-outline-success btn-block"><i class="fas fa-file-export mr-1"></i> Export Data</button></div>
                                    <div class="col-md-4 mb-2"><button class="btn btn-outline-info btn-block"><i class="fas fa-envelope mr-1"></i> Email Participants</button></div>
                                    <div class="col-md-4 mb-2"><button class="btn btn-outline-dark btn-block"><i class="fas fa-qrcode mr-1"></i> Generate QR Codes</button></div>
                                    <div class="col-md-4 mb-2"><button class="btn btn-outline-secondary btn-block"><i class="fas fa-print mr-1"></i> Print Reports</button></div>
                                    <div class="col-md-4 mb-2"><button class="btn btn-outline-warning btn-block"><i class="fas fa-bullhorn mr-1"></i> Send Announcement</button></div>
                                </div>
                            </div>
                        </div>

                        <!-- RECENT REGISTRATIONS -->
                        <div class="card mt-4">
                            <div class="card-header"><h3 class="card-title">🆕 RECENT REGISTRATIONS</h3></div>
                            <div class="card-body p-0">
                                <table class="table table-hover table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Payment</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ali Ntenegen</td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td><span class="text-success"><i class="fas fa-check-circle"></i> Paid</span></td>
                                            <td>10 May 2026</td>
                                        </tr>
                                        <tr>
                                            <td>Sarah Mushi</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td><span class="text-warning"><i class="fas fa-hourglass-half"></i> Waiting</span></td>
                                            <td>09 May 2026</td>
                                        </tr>
                                        <tr>
                                            <td>John Mbowe</td>
                                            <td><span class="badge badge-primary">Checked In</span></td>
                                            <td><span class="text-success"><i class="fas fa-check-circle"></i> Paid</span></td>
                                            <td>08 May 2026</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="text-primary font-weight-bold">View All 156 Registrations →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop