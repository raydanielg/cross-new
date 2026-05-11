@extends('adminlte::page')

@section('title', 'Cycling Events | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cycling Events Management</h1>
            </div>
            <div class="col-sm-6 text-right">
                <button class="btn btn-outline-secondary mr-1"><i class="fas fa-calendar-alt"></i> Calendar View</button>
                <button class="btn btn-primary"><i class="fas fa-plus"></i> Create Event</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <!-- SEARCH & FILTER -->
        <div class="card mb-4">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Events by name, location, date...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-default btn-block"><i class="fas fa-filter mr-1"></i> Advanced Filters</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- EVENTS STATISTICS -->
        <div class="row mb-4">
            <div class="col">
                <div class="small-box bg-dark">
                    <div class="inner"><h3>48</h3><p>Total Events</p></div>
                    <div class="icon"><i class="fas fa-list"></i></div>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-primary">
                    <div class="inner"><h3>12</h3><p>Upcoming</p></div>
                    <div class="icon"><i class="fas fa-clock"></i></div>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-success">
                    <div class="inner"><h3>3</h3><p>Ongoing</p></div>
                    <div class="icon"><i class="fas fa-play-circle"></i></div>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-info">
                    <div class="inner"><h3>30</h3><p>Completed</p></div>
                    <div class="icon"><i class="fas fa-check-double"></i></div>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-danger">
                    <div class="inner"><h3>3</h3><p>Cancelled</p></div>
                    <div class="icon"><i class="fas fa-ban"></i></div>
                </div>
            </div>
        </div>

        <!-- QUICK FILTERS -->
        <div class="mb-4">
            <h6 class="font-weight-bold mb-3"><i class="fas fa-bolt text-warning mr-1"></i> QUICK FILTERS</h6>
            <div class="d-flex flex-wrap gap-2" style="gap: 10px;">
                <button class="btn btn-sm btn-primary">All</button>
                <button class="btn btn-sm btn-outline-secondary">Competitions</button>
                <button class="btn btn-sm btn-outline-secondary">Community Rides</button>
                <button class="btn btn-sm btn-outline-secondary">Trainings</button>
                <button class="btn btn-sm btn-outline-secondary">Festivals</button>
                <span class="mx-2 text-muted">|</span>
                <button class="btn btn-sm btn-outline-info">This Month</button>
                <button class="btn btn-sm btn-outline-info">Next Month</button>
                <select class="form-control form-control-sm d-inline-block w-auto"><option>By Region</option></select>
                <select class="form-control form-control-sm d-inline-block w-auto"><option>By Status</option></select>
            </div>
        </div>

        <!-- EVENTS LIST (CARD VIEW) -->
        <div class="row">
            @php
                $events = [
                    ['name' => 'Kilimanjaro Challenge', 'loc' => 'Moshi, Kilimanjaro', 'date' => '15-17 June 2026', 'reg' => '156/200', 'status' => 'Open', 'color' => 'success', 'icon' => 'fa-bicycle'],
                    ['name' => 'Dar City Ride', 'loc' => 'Dar es Salaam', 'date' => '22 June 2026', 'reg' => '89/150', 'status' => 'Open', 'color' => 'success', 'icon' => 'fa-city'],
                    ['name' => 'Usambara Classic', 'loc' => 'Lushoto, Tanga', 'date' => '05-07 July 2026', 'reg' => '234/250', 'status' => 'Open', 'color' => 'success', 'icon' => 'fa-mountain'],
                    ['name' => 'Zanzibar Beach Tour', 'loc' => 'Zanzibar', 'date' => '22 June 2026', 'reg' => '45/100', 'status' => 'Almost Full', 'color' => 'warning', 'icon' => 'fa-umbrella-beach']
                ];
            @endphp

            @foreach($events as $event)
            <div class="col-md-6 mb-4">
                <div class="card card-outline card-{{ $event['color'] }} shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="font-weight-bold mb-1"><i class="fas {{ $event['icon'] }} mr-2 text-muted"></i> {{ $event['name'] }}</h5>
                                <p class="text-muted small mb-0"><i class="fas fa-map-marker-alt mr-1"></i> {{ $event['loc'] }}</p>
                            </div>
                            <span class="badge badge-{{ $event['color'] }}">{{ $event['status'] }}</span>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted d-block">Date</small>
                                <b>{{ $event['date'] }}</b>
                            </div>
                            <div class="col-6 text-right">
                                <small class="text-muted d-block">Registrations</small>
                                <b>{{ $event['reg'] }}</b>
                            </div>
                        </div>
                        <div class="progress mb-3" style="height: 5px;">
                            @php 
                                $parts = explode('/', $event['reg']);
                                $percent = ($parts[0]/$parts[1]) * 100;
                            @endphp
                            <div class="progress-bar bg-{{ $event['color'] }}" style="width: {{ $percent }}%"></div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-xs btn-outline-primary mr-1"><i class="fas fa-edit"></i> Edit</button>
                            <button class="btn btn-xs btn-outline-info mr-1"><i class="fas fa-eye"></i> View</button>
                            <button class="btn btn-xs btn-primary"><i class="fas fa-tasks"></i> Manage</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-between align-items-center mt-3 pb-4">
            <span class="text-muted small">Page 1 of 4</span>
            <ul class="pagination pagination-sm m-0">
                <li class="page-item disabled"><a class="page-link" href="#">&laquo; Prev</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">Next &raquo;</a></li>
            </ul>
        </div>
    </div>
@stop