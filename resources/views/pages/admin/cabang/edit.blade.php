@extends('layouts.master')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('title')
    Dashboard
@endsection

@section('pages')
    Manage Cabang
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Edit Cabang</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate>
                        <div class="form-group">
                            <label>Name Cabang</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gmaps</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input type="file" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Longtitude</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Latitude</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Desc</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
