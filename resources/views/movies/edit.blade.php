<!-- @extends('layouts.admin')

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
                        <form action="{{ route('movies.update', $movies->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama </label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ $movies->nama }}">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Decs </label>
                                <input type="text" class="form-control  @error('decs') is-invalid @enderror"
                                    name="decs" value="{{ $movies->decs }}">
                                @error('decs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title movies</label>
                                <input type="file" class="form-control  @error('title_img') is-invalid @enderror"
                                    name="title_img" value="{{ $movies->title_img }}">
                                @error('title_img')
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
                                <input type="text" class="form-control  @error('directory') is-invalid @enderror"
                                    name="directory" value="{{ $movies->directory }}">
                                @error('directory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rilis </label>
                                <input type="number" class="form-control  @error('rilis') is-invalid @enderror"
                                    name="rilis" value="{{ $movies->rilis }}">
                                @error('rilis')
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
                                <label class="form-label">Riviews </label>
                                <input type="number" class="form-control  @error('riviews') is-invalid @enderror"
                                    name="riviews" value="{{ $movies->riviews }}">
                                @error('riviews')
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
@endsection -->