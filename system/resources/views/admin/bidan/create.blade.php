@extends('admin.layouts.base')
@section('content')
    <form action="{{ url('/admin/bidan/store') }}" method="POST">
        @csrf <!-- Token keamanan Laravel -->

        <div class="mb-3">
            <label for="nama_bidan" class="form-label">Nama Bidan</label>
            <input type="text" name="nama_bidan" id="nama_bidan" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">Nik</label>
            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan Nik" maxlength="16" minlength="16" required>
        </div>

        <div class="mb-3">
            <label for="no_telpon" class="form-label">Nomor Telpon</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan No Telpon"
                required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
        </div>

        <div class="mb-3">
            <label for="fasyankes_id" class="form-label">Fasyankes ID</label>
            <input type="text" name="fasyankes_id" id="fasyankes_id" class="form-control"
                placeholder="Masukkan Fasyankes ID" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
