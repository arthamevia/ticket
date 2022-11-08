@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Kursi
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kursi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                <label class="form-label">Nomor Kursi</label>
                                <input type="text" class="form-control  @error('nk') is-invalid @enderror"
                                    name="nk">
                                @error('nk')
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