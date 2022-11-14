@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" >
                        Data Kursi
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kursi.update', $kursi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Studio</label>
                                <input type="text" class="form-control  @error('studio_id') is-invalid @enderror"
                                    name="studio_id" value="{{ $kursi->studio->nama }}">
                                @error('studio_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Kursi</label>
                                <input type="text" class="form-control  @error('nama_kursi') is-invalid @enderror"
                                    name="nama_kursi" value="{{ $kursi->nama_kursi }}">
                                @error('nama_kursi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror" >
                                        <option value="terisi">Terisi</option>
                                        <option value="kosong">Kosong</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('kursi.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection