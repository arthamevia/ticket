@extends('layouts.admin')

@section('content')
@section('js')
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

                                        <script>
                                            $(".select2").select2();
                                        </script> -->
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Buat Data Transaksi
                </div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="mb-3">
                                <label class="form-label">Kode </label>
                                <input type="number" class="form-select  @error('kode_transaksi') is-invalid @enderror"
                                    name="kode_transaksi">
                                @error('kode_transaksi')
    <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
@enderror
                            </div> -->
                        <div class="mb-3">
                            <label class="form-label">Costumer</label>
                            <select name="id_costumer" class="form-select @error('id_costumer') is-invalid @enderror"
                                id="">
                                @foreach ($user as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
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
                            <select name="id_movie" class="form-select @error('id_movie') is-invalid @enderror"
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
                            <select name="id_jadwal" class="form-select @error('id_jadwal') is-invalid @enderror"
                                id="">
                                @foreach ($jadwal as $data)
                                    <option value="{{ $data->id }}">{{ $data->tayang }}</option>
                                @endforeach
                            </select>
                            @error('id_jadwal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> Kursi</label>
                            @foreach ($kursi as $data)
                                <label><input type="checkbox"
                                        name="id_kursi"value={{ $data->id }}>{{ $data->id }}</label>
                            @endforeach
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Kursi</label>
                            <select name="id_kursi[]" class="form-select @error('id_kursi') is-invalid @enderror"
                                id="" multiple="multiple">
                                @foreach ($kursi as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kursi }}</option>
                                @endforeach
                            </select>
                            @error('id_kursi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Banyak </label>
                            <input type="number" class="form-select  @error('banyak') is-invalid @enderror"
                                name="banyak">
                            @error('banyak')
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
