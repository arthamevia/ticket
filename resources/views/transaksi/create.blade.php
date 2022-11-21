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
                        <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Costumer</label>
                                <select name="id_costumer" class="form-control @error('id_costumer') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->id }}</option>
                                    @endforeach
                                </select>
                                @error('id_costumer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Movies</label>
                                <select name="id_movie" class="form-control @error('id_movie') is-invalid @enderror"
                                    id="">
                                    @foreach ($movies as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_movie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jadwal</label>
                                <select name="id_jadwal" class="form-control @error('id_jadwal') is-invalid @enderror"
                                    id="">
                                    @foreach ($jadwal as $data)
                                        <option value="{{ $data->id }}">{{ $data->id }}</option>
                                    @endforeach
                                </select>
                                @error('id_jadwal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kursi</label>
                                <select name="id_kursi" class="form-control @error('id_kursi') is-invalid @enderror"
                                    id="">
                                    @foreach ($kursi as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kursi }}</option>
                                    @endforeach
                                </select>
                                @error('id_kursi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Banyak </label>
                                <input type="number" class="form-control  @error('banyak') is-invalid @enderror"
                                    name="banyak">
                                @error('banyak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total Harga </label>
                                <input type="number" class="form-control  @error('total_harga') is-invalid @enderror"
                                    name="total_harga">
                                @error('total_harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Pesan </label>
                                <input type="date" class="form-control  @error('tgl_psn') is-invalid @enderror"
                                    name="tgl_psn">
                                @error('tgl_psn')
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