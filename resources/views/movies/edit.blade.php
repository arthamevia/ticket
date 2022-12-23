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
                                <input type="text" class="form-select  @error('name') is-invalid @enderror"
                                    name="name" value="{{ $movies->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Decs </label>
                                <input type="text" class="form-select  @error('desc') is-invalid @enderror"
                                    name="desc" value="{{ $movies->desc }}">
                                @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">gambar produk</label>
                            <p>
                                @if (isset($movies) && $movies->img)
                                    <img src="{{ asset($movies->img) }}"
                                        class="img-rounded img-responsive"
                                        style="width:150px; height:150px; border-radius:10px border-radius:10px"
                                        alt="">
                                @endif
                            </p>
                            <input type="file" class="form-control mb-2  @error('img') is-invalid @enderror"
                                name="img">
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Trailer movies</label>
                                <input type="file" class="form-select  @error('vid') is-invalid @enderror"
                                    name="vid">
                                @error('vid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="mb-3">
                                    <label class="form-label">Price </label>
                                    <input type="number" class="form-select  @error('price') is-invalid @enderror"
                                        name="price" value="{{ $movies->price }}">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Klasifikasi</label>
                                    <select name="klasifikasi" class="form-select @error('klasifikasi') is-invalid @enderror">
                                        <option value="{{ $movies->klasifikasi }}" selected>{{ $movies->klasifikasi }}</option>
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
                                    <label class="form-label">Name Category</label>
                                    <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                        @foreach ($category as $data)
                                        @if (old('category_id', $data->id) == $movies->category->id)
                                        <option value="{{ $data->id }}" selected hidden>{{ $data->title }}</option>
                                        @else
                                        <option value="{{ $data->id }}">{{ $data->title }}</option>
                                        @endif
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
                                    <input type="text" class="form-select  @error('director') is-invalid @enderror"
                                        name="director" value="{{ $movies->director }}">
                                    @error('director')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rilis </label>
                                    <input type="number" class="form-select  @error('release') is-invalid @enderror"
                                        name="release" value="{{ $movies->release }}">
                                    @error('release')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Duration </label>
                                    <input type="time" class="form-select  @error('duration') is-invalid @enderror"
                                        name="duration" value="{{ $movies->duration }}">
                                    @error('duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rate </label>
                                    <input type="number" class="form-select  @error('rate') is-invalid @enderror"
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
                                    <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection