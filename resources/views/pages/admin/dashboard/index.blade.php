@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('pages')
    Dashboard
@endsection
@section('content')
    <div class="row clearfix row-deck">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card top_widget">
                <div class="body">
                    <div class="icon"><i class="fa fa-flag"></i> </div>
                    <div class="content">
                        <div class="text mb-2 text-uppercase">Cabang</div>
                        <h4 class="number mb-0">5 </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card top_widget">
                <div class="body">
                    <div class="icon"><i class="fa fa-users"></i> </div>
                    <div class="content">
                        <div class="text mb-2 text-uppercase">Karyawan</div>
                        <h4 class="number mb-0">15 </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card top_widget">
                <div class="body">
                    <div class="icon"><i class="fa fa-user"></i> </div>
                    <div class="content">
                        <div class="text mb-2 text-uppercase">Sales</div>
                        <h4 class="number mb-0">21K </h4>
                        <small class="text-muted">Analytics for last Month</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card top_widget">
                <div class="body">
                    <div class="icon"><i class="fa fa-thumbs-up"></i> </div>
                    <div class="content">
                        <div class="text mb-2 text-uppercase">Pembelian</div>
                        <h4 class="number mb-0">53K </h4>
                        <small class="text-muted">Analytics for last week</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix row-deck">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Google Analytics Dashboard</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <select class="custom-select custom-select-sm">
                                <option>Open this select menu</option>
                                <option value="1">Sessions</option>
                                <option value="2">Users</option>
                                <option selected value="3">Page Views</option>
                                <option value="4">Bounce Rate</option>
                                <option value="5">Location</option>
                                <option value="6">Pages</option>
                                <option value="7">Referrers</option>
                                <option value="8">Searches</option>
                                <option value="9">Technology</option>
                                <option value="10">404 Errors</option>
                            </select>
                        </div>
                        <div class="d-flex">
                            <button type="button" class="btn btn-outline-primary mr-2"><i class="fa fa-download"></i>
                                Download report</button>
                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-send"></i> Send
                                report</button>
                        </div>
                    </div>
                    <div id="Google-Analytics-Dashboard" style="height: 230px"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
