@extends('admin.layouts.app')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-book"></i>
                </span> Form users
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ url('/admin/users') }}" class="btn btn-gradient-primary btn-sm mb-3">Back</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Add users</h3><br />
                <form class="forms-sample" action="{{ url('/admin/users') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Name users" value="{{ old('name') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('name') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email users" value="{{ old('email') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('email') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="password" name="password"
                                placeholder="Password users" value="{{ old('password') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('password') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-4 col-form-label">Role</label>
                        <div class="col-sm-8">
                            <select class="form-control bg-white text-dark" id="role" name="role">
                                <option value="">-- Select Role --</option>
                                <option value="admin" {{ old('role') == "admin" ? 'selected' : '' }}>
                                    admin
                                </option>
                                <option value="user" {{ old('role') == "user" ? 'selected' : '' }}>
                                    user
                                </option>
                            </select>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('role') }}</small></i>
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
