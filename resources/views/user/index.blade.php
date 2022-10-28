@extends('layouts.admin')

@section('content')
    
    <div class="card shadow-lg rounded card">
        
        <div class="table-responsive text-nowrap">
            <div class="container">
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>User</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (count($users))
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $user->no_hp }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $user->email }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $user->role }}
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                            @csrf
                                            
                                            
                                            <!-- Modal -->
                                            <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Hapus
                                        </button>

                                        <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">
                                    <div class='alert alert-primary text-center'>
                                        Tidak ada data
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection