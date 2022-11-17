@extends('layouts.admin')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                       Buat Data Studio
                    </div>
                    <div class="card-body">
                        <form action="{{ route('studio.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Studio</label>
                                    <select name="nama" class="form-select @error('nama') is-invalid @enderror" >
                                        <option value="Studio 1">Studio 1</option>
                                        <option value="Studio 2">Studio 2</option>
                                        <option value="Studio 3">Studio 3</option>
                                    </select>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Seat</label>
                                <input type="number" class="form-control  @error('jumlah_sheet') is-invalid @enderror"
                                    name="jumlah_sheet">
                                @error('jumlah_sheet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('studio.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection