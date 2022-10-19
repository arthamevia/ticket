@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Movies
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kode</label>
                            <input type="text" class="form-control" name="kode" value="{{ $tiket->kode }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $tiket->stok }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $tiket->harga }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Kursi</label>
                            <input type="text" class="form-control" name="nk" value="{{ $tiket->kursi->nk }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="nama" value="{{ $tiket->movies->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('tiket.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection