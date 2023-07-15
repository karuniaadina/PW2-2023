@extends('admin.layouts.app')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Anime
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ url('/admin/anime/create') }}" class="btn btn-gradient-primary btn-sm mb-3">+ Tambah
                            Data</a>
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
                                        <th>Title</th>
                                        <th>Genre</th>
                                        <th>Country</th>
                                        <th>Release Date</th>
                                        <th>Rating</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anime as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->genres->name }}</td>
                                            <td>{{ $item->countries->name }}</td>
                                            <td>{{ $item->release_date }}</td>
                                            <td>{{ $item->rating }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="/anime/{{ $item->id }}">Detail</a>

                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ url('/admin/anime/' . $item->id . '/edit') }}">Edit</a>
                                                <form action="{{ url('/admin/anime', $item->id) }}" class="d-inline"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="if(!confirm('Anda yakin akan menghapus data {{ $item->title }} ?')) {return false};"
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
