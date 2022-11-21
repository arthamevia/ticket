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
                        <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name </label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                    name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description </label>
                                <input type="text" class="form-control  @error('desc') is-invalid @enderror"
                                    name="desc">
                                @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto movies</label>
                                <input type="file" class="form-select  @error('img') is-invalid @enderror"
                                    name="img">
                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price </label>
                                <input type="number" class="form-control  @error('price') is-invalid @enderror"
                                    name="price">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Klasifikasi</label>
                            <select name="klasifikasi" class="form-control @error('klasifikasi') is-invalid @enderror">
                                <option value="Up Comming">Up Comming</option>
                                <option value="Popular">Popular</option>
                                <option value="Trending">Trending</option>
                                <option value="Top Rated">Top Rated</option>
                            </select>
                            @error('klasifikasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Data Title</label>
                                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror"
                                    id="">
                                    @foreach ($category as $data)
                                        <option value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Director </label>
                                <input type="text" class="form-control  @error('director') is-invalid @enderror"
                                    name="director">
                                @error('director')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Release </label>
                                <input type="number" class="form-control  @error('release') is-invalid @enderror"
                                    name="release">
                                @error('release')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Duration </label>
                                <input type="time" class="form-control  @error('duration') is-invalid @enderror"
                                    name="duration">
                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rate </label>
                                <input type="number" class="form-control  @error('rate') is-invalid @enderror"
                                    name="rate">
                                @error('rate')
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