@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="{{ asset('dist/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendor/sweetalert/sweetalert.css') }}" />
@endpush
@push('style')
    <link rel="stylesheet" href="{{ asset('select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@section('title')
    Dashboard
@endsection

@section('pages')
    Manage Produk
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Produk<small>Berikut Merupakan Informasi data produk anda</small> </h2>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="d-flex flex-row-reverse">

                                <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal"
                                    class="btn btn-primary mt-2"><i class="fa fa-plus">
                                    </i> Tambah
                                    produk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Harga Jual</td>
                                    <td>Stok</td>
                                    <td>
                                        <div class="btn-group d-flex justify-content-around" role="group"
                                            aria-label="Basic example">
                                            <a href="#defaultModal1" class="btn btn-warning mr-2" data-toggle="modal"
                                                data-target="#defaultModal">Edit</a>
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Harga Jual</td>
                                    <td>Stok</td>
                                    <td>
                                        <div class="btn-group d-flex justify-content-around" role="group"
                                            aria-label="Basic example">
                                            <button type="button" class="btn btn-warning mr-2">Edit</button>
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('pages.admin.produk.create')
    @include('pages.admin.produk.edit')
@endsection

@push('script')
    <script src="{{ asset('dist/assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('dist/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dist/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('dist/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dist/assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('dist/assets/vendor/sweetalert/sweetalert.min.js') }}"></script> <!-- SweetAlert Plugin Js -->
    <script src=" {{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
@endpush
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
