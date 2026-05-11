@extends('adminlte::page')

@section('title', 'Routes & Locations')

@section('content_header')
    <h1>Routes & Locations</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Register New Route</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Route Name</label>
                            <input type="text" class="form-control" placeholder="e.g. Dar to Moro">
                        </div>
                        <div class="form-group">
                            <label>Distance (KM)</label>
                            <input type="number" class="form-control" placeholder="0">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Route</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Saved Cycling Routes</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> Map integration will be displayed here.
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Distance</th>
                                <th>Difficulty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Coastal Ride</td>
                                <td>45 KM</td>
                                <td><span class="badge badge-success">Easy</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop