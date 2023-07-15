@extends('admin.layouts.app')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Genres
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ url('/admin/genres/create') }}" class="btn btn-gradient-primary btn-sm mb-3">Add Data</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @if (session('success') > 0)
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h4 class="card-title">Data Table</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genres as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ url('/admin/genres/' . $item->id . '/edit') }}">Edit</a>
                                                <form action="{{ url('/admin/genres', $item->id) }}" class="d-inline"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="if(!confirm('Anda yakin akan menghapus data {{ $item->name }} ?')) {return false};"
                                                        class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
