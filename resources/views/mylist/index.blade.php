@extends('layouts.admin')

@section('content')
    <div class="container-fluid" >
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Mylist
                        <a href="{{ route('mylist.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name Costumer</th>
                                        <th>Name Film</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($mylist as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->user->name }}</td>
                                            <td>{{ $data->movies->name }}</td>
                                            <td>
                                                <form action="{{ route('mylist.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('mylist.edit', $data->id) }}"
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