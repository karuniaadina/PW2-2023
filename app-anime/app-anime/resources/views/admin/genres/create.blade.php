@extends('admin.layouts.app')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-book"></i>
                </span> Form genres
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ url('/admin/genres') }}" class="btn btn-gradient-primary btn-sm mb-3">Back</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Add genres</h3><br />
                <!-- form validasi -->
                <form class="forms-sample" action="{{ url('/admin/genres') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name genres</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Name genres" value="{{ old('name') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('name') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-4 col-form-label">Description genres</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="description" name="description" placeholder="Description genres"
                                value="{{ old('description') }}">{{ old('description') }}</textarea>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('description') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary btn-sm me-2">Submit</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
