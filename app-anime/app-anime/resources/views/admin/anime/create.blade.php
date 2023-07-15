@extends('admin.layouts.app')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-book"></i>
                </span> Form Anime
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ url('/admin/anime') }}" class="btn btn-gradient-primary btn-sm mb-3">Back</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Add anime</h3><br />
                <form class="forms-sample" action="{{ url('/admin/anime') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Title Anime</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Title Anime" value="{{ old('title') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('title') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="poster" class="col-sm-4 col-form-label">Poster</label>
                        <div class="col-sm-8">
                            <input type="url" class="form-control" id="poster" name="poster" placeholder="https://"
                                value="{{ old('poster') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('poster') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="countries_id" class="col-sm-4 col-form-label">Country</label>
                        <div class="col-sm-8">
                            <select class="form-control bg-white text-dark" id="countries_id" name="countries_id">
                                <option value="">-- Select Country --</option>
                                @foreach ($countries as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('countries_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('countries_id') }}</small></i>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="genres_id" class="col-sm-4 col-form-label">Genre</label>
                        <div class="col-sm-8">
                            <select class="form-control bg-white text-dark" id="genres_id" name="genres_id">
                                <option value="">-- Select Genre --</option>
                                @foreach ($genres as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('genres_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('genres_id') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="release_date" class="col-sm-4 col-form-label">Release date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="release_date" name="release_date"
                                placeholder="Release_date Anime" value="{{ old('release_date') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('release_date') }}</small></i>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" max="5" class="form-control" id="rating"
                                name="rating" placeholder="Rating Anime" value="{{ old('rating') }}">
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('rating') }}</small></i>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="synopsis" class="col-sm-4 col-form-label">Synopsis</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="synopsis" name="synopsis" placeholder="Synopsis Anime"
                                value="{{ old('synopsis') }}"> {{ old('synopsis') }}</textarea>
                            @if (count($errors) > 0)
                                <i class="text-danger"><small>{{ $errors->first('synopsis') }}</small></i>
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
