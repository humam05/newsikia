@extends('admin.layouts.base')
@section('content')
    <form action="{{ url('/admin/bidan/store') }}" method="POST">
        @csrf <!-- Token keamanan Laravel -->
        <div class="row">
            <div class="mb-3 col-6">
                <label for="nama_bidan" class="form-label">Nama Posyandu</label>
                <input type="text" name="nama_bidan" id="nama_bidan" class="form-control"
                    placeholder="Masukkan Nama Posyandu" required>
            </div>

            <div class="mb-3 col-6">
                <label for="nik" class="form-label">Tanggal</label>
                <input type="date" name="nik" id="nik" class="form-control" placeholder="Masukkan Tanggal"
                    required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="no_telpon" class="form-label">Waktu</label>
                <input type="time" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Waktu Posyandu"
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Lokasi</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                    required>
            </div>
        </div>

        <div class="mb-3">
            <label for="fasyankes_id" class="form-label">Nama Fasyankes</label>
            <input type="text" name="fasyankes_id" id="fasyankes_id" class="form-control"
                placeholder="Masukkan Nama Fasyankes" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
