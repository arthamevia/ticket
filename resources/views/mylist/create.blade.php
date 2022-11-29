@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                       Buat Data Movies
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ route('mylist.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name Costumer</label>
                                <select name="user_id" class="form-select @error('user_id') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Movie</label>
                                <select name="movie_id" class="form-select @error('movie_id') is-invalid @enderror"
                                    id="">
                                    @foreach ($movies as $data)
                                        <option value="{{ $data->id }}">{{ $data->name}}</option>
                                    @endforeach
                                </select>
                                @error('movie_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('movies.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection