@extends('admin.layouts.main_dashboard')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <label>สวัสดีคุณ :</label>
                        {{ Auth::user()->first_name." ".Auth::user()->last_name }}<br>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 2%">
                <div class="row">
                        <div class="card-admin mb-3">
                            <div class="row ">
                                <div class="col-md-3">
                                    <img src="{{ asset('img/users.png') }}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Member</h5>
                                        <p class="card-text">20</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/order.png') }}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Order</h5>
                                        <p class="card-text">20</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/sales.png') }}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Sales</h5>
                                        <p class="card-text">500</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
