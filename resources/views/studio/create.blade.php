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
                        <form action="{{ route('studio.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Studio</label>
                                    <select name="name_studio" class="form-select @error('name_studio') is-invalid @enderror" >
                                        <option value="Studio 1">Studio 1</option>
                                        <option value="Studio 2">Studio 2</option>
                                    </select>
                                    @error('name_studio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kursi</label>
                                <select  name="id_kursi" class="form-select @error('id_kursi') is-invalid @enderror"
                                    id="select2">
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