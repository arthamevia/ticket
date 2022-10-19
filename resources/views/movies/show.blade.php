@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lihat Data Movies
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $movies->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Decs</label>
                            <input type="text" class="form-control" name="decs" value="{{ $movies->decs }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title movies</label>
                            @if (isset($movies) && $movies->title_img)
                                <p>
                                    <img src="{{ asset('images/movies/' . $movies->title_img) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image movies</label>
                            @if (isset($movies) && $movies->img)
                                <p>
                                    <img src="{{ asset('images/movies/' . $movies->img) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $movies->category->title }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Directory</label>
                            <input type="text" class="form-control" name="directory" value="{{ $movies->directory }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rilis</label>
                            <input type="text" class="form-control" name="rilis" value="{{ $movies->rilis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duration</label>
                            <input type="text" class="form-control" name="duration" value="{{ $movies->duration }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rate</label>
                            <input type="text" class="form-control" name="rate" value="{{ $movies->rate }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Riviews</label>
                            <input type="text" class="form-control" name="riviews" value="{{ $movies->riviews }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
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