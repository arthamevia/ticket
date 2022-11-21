@extends('layouts.admin')

@section('content')

    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Klasifikasi
                        <a href="{{ route('status.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Movies</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($status as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->movies->name }}</td>
                                            <td>{{ $data->jenis }}</td>
                                            <td>
                                                <form action="{{ route('status.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('status.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <!-- <a href="{{ route('status.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> | -->
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin Untuk Delete?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection