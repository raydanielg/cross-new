@extends('adminlte::page')

@section('title', 'Create Event | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create New Cycling Event</h1>
            </div>
            <div class="col-sm-6 text-right">
                <button class="btn btn-success"><i class="fas fa-paper-plane"></i> PUBLISH</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid pb-5">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <!-- LEFT COLUMN -->
                <div class="col-md-7">
                    <!-- BASIC INFORMATION -->
                    <div class="card card-primary card-outline">
                        <div class="card-header"><h3 class="card-title"><i class="fas fa-info-circle mr-1"></i> BASIC INFORMATION</h3></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Event Name*</label>
                                <input type="text" class="form-control" value="Kilimanjaro Cycling Challenge 2026" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Event Type*</label>
                                        <select class="form-control" required>
                                            <option selected>Competition</option>
                                            <option>Community Ride</option>
                                            <option>Training</option>
                                            <option>Festival</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Event Category</label>
                                        <select class="form-control">
                                            <option selected>Elite Professional</option>
                                            <option>Amateur</option>
                                            <option>Junior</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Event Tagline</label>
                                <input type="text" class="form-control" value="The ultimate challenge in Africa's roof">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="4">Join us for an unforgettable cycling experience around Mount Kilimanjaro...</textarea>
                            </div>
                            <div class="form-group">
                                <label>Event Banner</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="banner">
                                    <label class="custom-file-label" for="banner">Choose File (Recommended: 1200x600px)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DATE & TIME -->
                    <div class="card card-info card-outline">
                        <div class="card-header"><h3 class="card-title"><i class="fas fa-calendar-alt mr-1"></i> DATE & TIME</h3></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Date*</label>
                                        <div class="row">
                                            <div class="col-7"><input type="date" class="form-control" value="2026-06-15"></div>
                                            <div class="col-5"><input type="time" class="form-control" value="09:00"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End Date*</label>
                                        <div class="row">
                                            <div class="col-7"><input type="date" class="form-control" value="2026-06-17"></div>
                                            <div class="col-5"><input type="time" class="form-control" value="18:00"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small">Registration Opens</label>
                                        <input type="date" class="form-control form-control-sm" value="2026-03-01">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small">Registration Closes</label>
                                        <input type="date" class="form-control form-control-sm" value="2026-06-10">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small">Early Bird Until</label>
                                        <input type="date" class="form-control form-control-sm" value="2026-04-30">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CAPACITY & REGISTRATION -->
                    <div class="card card-warning card-outline">
                        <div class="card-header"><h3 class="card-title"><i class="fas fa-users mr-1"></i> CAPACITY & REGISTRATION</h3></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Max Participants*</label>
                                        <input type="number" class="form-control" value="250">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Minimum Age</label>
                                        <input type="number" class="form-control" value="18">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Team Limit</label>
                                        <input type="number" class="form-control" value="5">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="waitlist" checked>
                                    <label for="waitlist" class="custom-control-label">Allow waitlist when full</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="medical" checked>
                                    <label for="medical" class="custom-control-label">Require medical certificate</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="insurance">
                                    <label for="insurance" class="custom-control-label">Require insurance</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-md-5">
                    <!-- LOCATION & ROUTE -->
                    <div class="card card-success card-outline">
                        <div class="card-header"><h3 class="card-title"><i class="fas fa-map-marked-alt mr-1"></i> LOCATION & ROUTE</h3></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Region*</label>
                                        <select class="form-control"><option selected>Kilimanjaro</option></select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control"><option selected>Moshi</option></select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Start Point</label>
                                <input type="text" class="form-control" value="Moshi Town Square">
                            </div>
                            <div class="form-group">
                                <label>End Point</label>
                                <input type="text" class="form-control" value="Moshi Town Square">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Route Distance (km)*</label>
                                        <input type="number" class="form-control" value="125">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Elevation Gain (m)</label>
                                        <input type="number" class="form-control" value="2850">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Difficulty Level</label>
                                <select class="form-control">
                                    <option selected>Extreme</option>
                                    <option>Hard</option>
                                    <option>Moderate</option>
                                    <option>Easy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Route Description</label>
                                <textarea class="form-control" rows="2">Loop around Mount Kilimanjaro via Machame, Sanya Juu, and Boma Ng'ombe</textarea>
                            </div>
                            <div class="btn-group w-100">
                                <button type="button" class="btn btn-outline-info"><i class="fas fa-map"></i> View on Map</button>
                                <button type="button" class="btn btn-outline-primary"><i class="fas fa-file-upload"></i> GPX File Upload</button>
                            </div>
                        </div>
                    </div>

                    <!-- PRICING & FEES -->
                    <div class="card card-danger card-outline">
                        <div class="card-header"><h3 class="card-title"><i class="fas fa-money-bill-wave mr-1"></i> PRICING & FEES</h3></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Registration Fee (TSh)</label>
                                <input type="text" class="form-control" value="150,000">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="small">Early Bird Fee</label>
                                        <input type="text" class="form-control" value="120,000">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="small">Late Registration</label>
                                        <input type="text" class="form-control" value="200,000">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Payment Methods</label>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="custom-control custom-checkbox mr-3">
                                        <input class="custom-control-input" type="checkbox" id="mpesa" checked>
                                        <label for="mpesa" class="custom-control-label">M-Pesa</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-3">
                                        <input class="custom-control-input" type="checkbox" id="tigo" checked>
                                        <label for="tigo" class="custom-control-label">Tigo Pesa</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="card" checked>
                                        <label for="card" class="custom-control-label">Credit Card</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SPONSORS & PARTNERS -->
                    <div class="card card-dark card-outline">
                        <div class="card-header border-0"><h3 class="card-title"><i class="fas fa-handshake mr-1"></i> SPONSORS & PARTNERS</h3></div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    KCB Bank - Platinum Sponsor
                                    <button type="button" class="btn btn-xs btn-danger">Remove</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Coca-Cola - Gold Sponsor
                                    <button type="button" class="btn btn-xs btn-danger">Remove</button>
                                </li>
                            </ul>
                            <div class="p-3 text-center border-top">
                                <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i> Add Sponsor</button>
                            </div>
                        </div>
                    </div>

                    <!-- ADDITIONAL INFO -->
                    <div class="card card-secondary card-outline">
                        <div class="card-header"><h3 class="card-title"><i class="fas fa-address-book mr-1"></i> ADDITIONAL INFO</h3></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" value="John Mbowe">
                            </div>
                            <div class="form-group">
                                <label>Event Status</label>
                                <div class="d-flex gap-3">
                                    <div class="custom-control custom-radio mr-3">
                                        <input class="custom-control-input" type="radio" id="draft" name="status">
                                        <label for="draft" class="custom-control-label">Draft</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="published" name="status" checked>
                                        <label for="published" class="custom-control-label">Published</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FORM FOOTER -->
            <div class="card card-outline card-secondary mt-3">
                <div class="card-body text-right">
                    <button type="button" class="btn btn-default mr-2">SAVE DRAFT</button>
                    <button type="button" class="btn btn-info mr-2">PREVIEW</button>
                    <button type="button" class="btn btn-danger mr-2">CANCEL</button>
                    <button type="submit" class="btn btn-primary px-5">PUBLISH EVENT</button>
                </div>
            </div>
        </form>
    </div>
@stop