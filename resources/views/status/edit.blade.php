<!-- @extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Edit Data Status
                    </div>
                    <div class="card-body">
                        <form action="{{ route('status.update', $status->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            
                            <div class="mb-3">
                                <label class="form-label">Movies</label>
                                <select name="movie_id" class="form-control @error('movie_id') is-invalid @enderror"
                                    id="">
                                    @foreach ($movies as $data)
                                        <option value="{{ $data->id }}">{{ $data->id }}</option>
                                    @endforeach
                                </select>
                                @error('movie_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                        <option value="{{ $status->jenis }}" selected>
                                            {{ $status->jenis }}</option>
                                        <option value="UpComming">Up Comming</option>
                                        <option value="Popular">Popular</option>
                                        <option value="Trending">Trending</option>
                                        <option value="TopRated">Top Rated</option>
                                    </select>
                                    @error('jenis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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