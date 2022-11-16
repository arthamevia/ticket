@extends('layouts.admin')

@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Transaksi
                        <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Transaksi</th>
                                        <th>Costumer</th>
                                        <th>Movies</th>
                                        <th>Film Tayang</th>
                                        <th>Kursi</th>
                                        <th>Banyak Pesan</th>
                                        <th>Total Harga</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($transaksi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->kode_transaksi }}</td>
                                            <td>{{ $data->id_costumer }}</td>
                                            <td>{{ $data->id_movie }}</td>
                                            <td>{{ $data->id_jadwal }}</td>
                                            <td>{{ $data->id_kursi }}</td>
                                            <td>{{ $data->banyak }}</td>
                                            <td>Rp {{ $data->total_harga }}</td>
                                            <td>{{ $data->tgl_psn }}</td>
                                            <td>
                                                <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('transaksi.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('transaksi.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
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