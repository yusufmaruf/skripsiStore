@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="{{ asset('dist/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendor/sweetalert/sweetalert.css') }}" />
@endpush

@section('title')
    Dashboard
@endsection

@section('pages')
    Manage Admin
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Admin<small>Berikut Merupakan Informasi data admin anda</small> </h2>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="d-flex flex-row-reverse">

                                <a href="{{ route('admin.create') }}" class="btn btn-primary mt-2"><i class="fa fa-plus">
                                    </i> Tambah
                                    admin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <div class="btn-group d-flex justify-content-around" role="group"
                                            aria-label="Basic example">
                                            <a href="{{ route('admin.edit', ['admin' => 1]) }}"
                                                class="btn btn-warning mr-2">Edit</a>
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
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
