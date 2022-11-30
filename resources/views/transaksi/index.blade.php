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
                                    @if (count($transaksi))
                                    @foreach ($transaksi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->kode_transaksi }}</td>
                                            <td>{{ $data->user->name }}</td>
                                            <td>{{ $data->movies->name }}</td>
                                            <td>{{ $data->jadwal->tayang }}</td>
                                            <td>{{ $data->id_kursi }}</td>
                                            <td>{{ $data->banyak }}</td>
                                            <td>Rp {{ number_format($data->total_harga, 0, ',', '.') }}</td>
                                            <td>{{ $data->tgl_psn }}</td>
                                            <td data-label="" width="300" style="overflow: hidden;">
                                                <form class="row"style="width: 135px;" action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('transaksi.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a>|
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin Untuk Delete?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection