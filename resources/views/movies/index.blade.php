@extends('layouts.admin')

@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Movies
                        <a href="{{ route('movies.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>decs</th>
                                        <th>Harga</th>
                                        <th>Img</th>
                                        <th>Category_id</th>
                                        <th>Directory</th>
                                        <th>Rilis</th>
                                        <th>Duration</th>
                                        <th>Rate</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($movies as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->decs }}</td>
                                            <td>Rp {{ $data->harga }}</td>
                                            <!-- <td>{{ $data->img }} -->
                                            <td><img src="{{ $data->img_show() }}" style="width: 100px; height:100px;"
                                                alt="">
                                            </td>
                                            <td>{{ $data->category_id }}</td>
                                            <td>{{ $data->directory }}</td>
                                            <td>{{ $data->rilis }}</td>
                                            <td>{{ $data->duration }}</td>
                                            <td>{{ $data->rate }}</td>
                                            <td>{{ $data->stok }}</td>
                                            <td>
                                                <form action="{{ route('movies.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('movies.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('movies.show', $data->id) }}"
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