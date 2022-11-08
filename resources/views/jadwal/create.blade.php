@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                       Buat Data Jadwal
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jadwal.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Id Movie</label>
                                <select name="id_movie" class="form-control @error('id_movie') is-invalid @enderror"
                                    id="">
                                    @foreach ($movies as $data)
                                        <option value="{{ $data->id }}">{{ $data->id_movie }}</option>
                                    @endforeach
                                </select>
                                @error('id_movie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Id Studio</label>
                                <select name="id_studio" class="form-control @error('id_studio') is-invalid @enderror"
                                    id="">
                                    @foreach ($studio as $data)
                                        <option value="{{ $data->id }}">{{ $data->id_studio }}</option>
                                    @endforeach
                                </select>
                                @error('id_studio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga </label>
                                <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                    name="harga">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok </label>
                                <input type="number" class="form-control  @error('stok') is-invalid @enderror"
                                    name="stok">
                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Tayang </label>
                                <input type="date" class="form-control  @error('tgl') is-invalid @enderror"
                                    name="tgl">
                                @error('tgl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam Tayang</label>
                                <input type="time" class="form-control  @error('tayang') is-invalid @enderror"
                                    name="tayang">
                                @error('tayang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam Selesai </label>
                                <input type="time" class="form-control  @error('selesai') is-invalid @enderror"
                                    name="selesai">
                                @error('selesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('jadwal.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection