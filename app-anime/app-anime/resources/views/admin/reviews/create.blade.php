@extends('admin.layouts.app')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-book"></i>
                </span> Form reviews
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ url('/admin/reviews') }}" class="btn btn-gradient-primary btn-sm mb-3">Back</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Add reviews</h3><br />
                <form class="forms-sample" action="{{ url('/admin/reviews') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="date" name="date"
                                placeholder="Date reviews" value="{{ old('date') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('date') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="users_id" class="col-sm-4 col-form-label">Users</label>
                        <div class="col-sm-8">
                            <select class="form-control bg-white text-dark" id="users_id" name="users_id">
                                <option value="">-- Select Users --</option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('users_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('users_id') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="movies_id" class="col-sm-4 col-form-label">Anime</label>
                        <div class="col-sm-8">
                            <select class="form-control bg-white text-dark" id="movies_id" name="movies_id">
                                <option value="">-- Select Anime --</option>
                                @foreach ($anime as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('movies_id') == $item->id ? 'selected' : '' }}>{{ $item->title }}
                                    </option>
                                @endforeach
                            </select>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('movies_id') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" max="5" class="form-control" id="rating"
                                name="rating" placeholder="Rating reviews" value="{{ old('rating') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('rating') }}</small></i>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-sm-4 col-form-label">Description</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="description" name="description" placeholder="Description reviews"
                                value="{{ old('description') }}"> {{ old('description') }}</textarea>
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
