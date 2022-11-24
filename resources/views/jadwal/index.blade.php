@extends('layouts.admin')

@section('content')

    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Jadwal
                        <a href="{{ route('jadwal.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Movies</th>
                                        <th>Kursi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Tanggal Tayang</th>
                                        <th>Jam Tayang</th>
                                        <th>Jam Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($jadwal as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->movies->name }}</td>
                                            <td>{{ $data->kursi->nama_kursi }}</td>
                                            <td>Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                                            <td>{{ $data->stok }}</td>
                                            <td>{{ $data->tgl }}</td>
                                            <td>{{ $data->tayang }}</td>
                                            <td>{{ $data->selesai }}</td>
                                            <td>
                                                <form action="{{ route('jadwal.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('jadwal.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    
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