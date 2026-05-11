@extends('adminlte::page')

@section('title', 'Dashboard | CTCMS Admin')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6 text-right">
                <h5 id="current-date-time" class="text-muted"></h5>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <!-- WELCOME BANNER -->
        <div class="row">
            <div class="col-12">
                <div class="card bg-gradient-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Welcome Back, {{ Auth::user()->name }}!</h3>
                                <p>Hali ya mfumo wa <b>Cross Tanzania Cycling Management System</b> leo ni shwari. Una usajili mpya 5 wa kufanyia kazi.</p>
                                <a href="{{ route('admin.analytics') }}" class="btn btn-light btn-sm font-weight-bold shadow-sm mt-2">
                                    <i class="fas fa-chart-line mr-1"></i> View Detailed Analytics
                                </a>
                            </div>
                            <div class="col-md-4 text-right d-none d-md-block">
                                <i class="fas fa-bicycle fa-5x opacity-50" style="opacity: 0.3;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KPI CARDS -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>1,250</h3>
                        <p>Total Cyclists</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('admin.users') }}" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>12</h3>
                        <p>Active Events</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <a href="{{ route('admin.events') }}" class="small-box-footer">Manage Events <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>45</h3>
                        <p>New Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="{{ route('admin.registrations') }}" class="small-box-footer">Check New <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>TZS 8.5M</h3>
                        <p>Total Revenue</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <a href="{{ route('admin.payments') }}" class="small-box-footer">Financials <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- CHARTS SECTION 1 -->
        <div class="row">
            <div class="col-md-7">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-chart-line mr-1"></i> Events Trend (Monthly)</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="eventsChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i> Revenue Distribution</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="revenueChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABLE & CHART SECTION 2 -->
        <div class="row">
            <div class="col-md-8">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-list mr-1"></i> Recent Registrations</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.registrations') }}" class="btn btn-tool btn-sm">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Cyclist</th>
                                    <th>Event</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Dar to Moro Challenge</td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td><a href="#" class="text-muted"><i class="fas fa-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Amani Hamisi</td>
                                    <td>Kilimanjaro Tour</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td><a href="#" class="text-muted"><i class="fas fa-search"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-outline card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-star mr-1"></i> Top Sponsors</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="sponsorsChart" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .bg-gradient-primary {
            background: linear-gradient(45deg, #007bff, #00d2ff);
            color: white;
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Update Time
        function updateTime() {
            const now = new Date();
            document.getElementById('current-date-time').innerHTML = now.toDateString() + ' | ' + now.toLocaleTimeString();
        }
        setInterval(updateTime, 1000);
        updateTime();

        // Events Trend Chart
        const ctxEvents = document.getElementById('eventsChart').getContext('2d');
        new Chart(ctxEvents, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Registrations',
                    data: [65, 59, 80, 81, 56, 95],
                    borderColor: '#007bff',
                    fill: true,
                    backgroundColor: 'rgba(0, 123, 255, 0.1)'
                }]
            }
        });

        // Revenue Distribution Chart
        const ctxRevenue = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctxRevenue, {
            type: 'doughnut',
            data: {
                labels: ['Sponsorship', 'Registration', 'Merchandise'],
                datasets: [{
                    data: [50, 30, 20],
                    backgroundColor: ['#28a745', '#ffc107', '#dc3545']
                }]
            }
        });

        // Top Sponsors Chart
        const ctxSponsors = document.getElementById('sponsorsChart').getContext('2d');
        new Chart(ctxSponsors, {
            type: 'bar',
            data: {
                labels: ['Vodacom', 'Tigo', 'CRDB', 'NMB'],
                datasets: [{
                    label: 'Support (M)',
                    data: [12, 19, 10, 15],
                    backgroundColor: '#ffc107'
                }]
            },
            options: {
                indexAxis: 'y',
            }
        });
    </script>
@stop
