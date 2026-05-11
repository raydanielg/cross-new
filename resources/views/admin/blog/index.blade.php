@extends('adminlte::page')

@section('title', 'Blog & Content')

@section('content_header')
    <h1>Blog & Content</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12 text-right mb-3">
            <button class="btn btn-primary"><i class="fas fa-plus"></i> New Post</button>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Training for your first Tour</h5>
                    <p class="card-text">Tips for beginner cyclists preparing for long distance tours...</p>
                    <a href="#" class="btn btn-sm btn-info">Edit Post</a>
                </div>
            </div>
        </div>
    </div>
@stop