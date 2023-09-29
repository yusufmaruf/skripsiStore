@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="{{ asset('select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@section('title')
    Dashboard
@endsection

@section('pages')
    Manage Pegawai
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Tambah Pegawai</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate>
                        @csrf
                        <div class="form-group">
                            <label>Name Pegawai</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Cabang</label>
                            <select class="form-control bs4" name="state" style="width: 100%;">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.bs4').select2({
                theme: 'bootstrap4',
            })
        });
    </script>
@endpush
