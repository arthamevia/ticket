<!-- @extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lihat Data Jadwal
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Jadwal</label>
                            <input type="text" class="form-control" name="nama" value="{{ $jadwal->nama }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Tayang</label>
                            <input type="date" class="form-control" name="tgl" value="{{ $jadwal->tgl }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jam tayang</label>
                            <input type="time" class="form-control" name="tayang" value="{{ $jadwal->tayang }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jam Selesai</label>
                            <input type="time" class="form-control" name="selesai" value="{{ $jadwal->selesai }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Tiket</label>
                            <input type="text" class="form-control" name="kode" value="{{ $jadwal->kode }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jadwal.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection -->