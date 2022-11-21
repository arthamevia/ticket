@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Edit Data Movies
                    </div>
                    <div class="card-body">
                        <form action="{{ route('movies.update', $movies->id) }}"  method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama </label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                    name="name" value="{{ $movies->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Decs </label>
                                <input type="text" class="form-control  @error('desc') is-invalid @enderror"
                                    name="desc" value="{{ $movies->desc }}">
                                @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto movies</label>
                                <input type="file" class="form-control  @error('img') is-invalid @enderror"
                                    name="img" value="{{ $movies->img }}">
                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price </label>
                                    <input type="number" class="form-control  @error('price') is-invalid @enderror"
                                        name="price" value="{{ $movies->price }}">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label class="form-label">Klasifikasi</label>
                            <select name="klasifikasi" class="form-control @error('klasifikasi') is-invalid @enderror" value="{{ $movies->klasifikasi }}">
                                <option value="up_comming">Up Comming</option>
                                <option value="popular">Popular</option>
                                <option value="trending">Trending</option>
                                <option value="top_rated">Top Rated</option>
                            </select>
                            @error('klasifikasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Data Title</label>
                                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror"
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
                                <label class="form-label">Directory </label>
                                <input type="text" class="form-control  @error('director') is-invalid @enderror"
                                    name="director" value="{{ $movies->director }}">
                                @error('director')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rilis </label>
                                <input type="number" class="form-control  @error('release') is-invalid @enderror"
                                    name="release" value="{{ $movies->release }}">
                                @error('release')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Duration </label>
                                <input type="time" class="form-control  @error('duration') is-invalid @enderror"
                                    name="duration" value="{{ $movies->duration }}">
                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rate </label>
                                <input type="number" class="form-control  @error('rate') is-invalid @enderror"
                                    name="rate" value="{{ $movies->rate }}">
                                @error('rate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection