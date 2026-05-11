@extends('adminlte::page')

@section('title', 'Sponsors & Partners')

@section('content_header')
    <h1>Sponsors & Partners</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Active Sponsors</h3>
                    <div class="card-tools">
                        <button class="btn btn-sm btn-primary">Add New Sponsor</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="p-3 border rounded">
                                <i class="fas fa-handshake fa-3x text-info mb-2"></i>
                                <h5>Corporate Sponsor A</h5>
                                <span class="badge badge-primary">Gold Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop