@extends('layouts.admin')

@section('content')
<style>
    .rating-css div {
    color: #ffe400;
    font-size: 10px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 10px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }

</style>
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Director</th>
                                        <th>Release</th>
                                        <th>Duration</th>
                                        <th>Rate</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($movies as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->desc }}</td>
                                            <!-- <td>{{ $data->img }} -->
                                            <td><img src="{{ $data->img_show() }}" style="width: 100px; height:100px;"
                                                alt="">
                                            </td>
                                            <td>Rp {{ $data->price }}</td>
                                            <td>{{ $data->category_id }}</td>
                                            <td>{{ $data->director }}</td>
                                            <td>{{ $data->release }}</td>
                                            <td>{{ $data->duration }}</td>
                                            <td>{{ $data->rate }}</td>
                                                <form action="{{ route('movies.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('movies.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <!-- <a href="{{ route('movies.show', $data->id) }}"
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