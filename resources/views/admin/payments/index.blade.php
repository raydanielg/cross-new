@extends('adminlte::page')

@section('title', 'Payments & Finance')

@section('content_header')
    <h1>Payments & Finance</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Revenue</span>
                    <span class="info-box-number">TZS 4,500,000</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fas fa-clock"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Pending Payments</span>
                    <span class="info-box-number">TZS 1,200,000</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Transactions</h3>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>User</th>
                        <th>Method</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TXN-100293</td>
                        <td>Hamisi Ali</td>
                        <td>M-Pesa</td>
                        <td>TZS 50,000</td>
                        <td><span class="badge badge-success">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop