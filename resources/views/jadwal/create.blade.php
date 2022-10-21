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
                                <label class="form-label">Judul</label>
                                <select name="nama" class="form-control @error('nama') is-invalid @enderror"
                                    id="">
                                    @foreach ($movies as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('nama')
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
                                <label class="form-label">Kode Tiket</label>
                                <select name="kode" class="form-control @error('kode') is-invalid @enderror"
                                    id="">
                                    @foreach ($tiket as $data)
                                        <option value="{{ $data->id }}">{{ $data->kode }}</option>
                                    @endforeach
                                </select>
                                @error('kode')
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