@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Tiket
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tiket.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kode</label>
                                <input type="Number" class="form-control  @error('kode') is-invalid @enderror"
                                    name="kode">
                                @error('kode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control  @error('stok') is-invalid @enderror"
                                    name="stok">
                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="Number" class="form-control  @error('harga') is-invalid @enderror"
                                    name="harga">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Data Nomor Kursi</label>
                                <select name="nk" class="form-control @error('nk') is-invalid @enderror"
                                    id="">
                                    @foreach ($kursi as $data)
                                        <option value="{{ $data->id }}">{{ $data->nk }}</option>
                                    @endforeach
                                </select>
                                @error('nk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="mb-3">
                                <label class="form-label">Pilih Data Judul</label>
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