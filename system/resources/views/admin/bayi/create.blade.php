@extends('admin.layouts.base')
@section('content')
    <form action="{{ url('/admin/bayi/store') }}" method="POST">
        @csrf <!-- Token keamanan Laravel -->

        <div class="mb-3">
            <label for="ortu_id" class="form-label">ID Orang Tua</label>
            <input type="text" name="ortu_id" id="ortu_id" class="form-control" placeholder="Masukkan ID" required>
        </div>
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="mb-3">
            <label for="jk_bayi" class="form-label">Jenis Kelamin</label>
            <select name="jk_bayi" id="jk_bayi" class="form-control" required>
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tmp_lahir_bayi" class="form-label">Tempat Lahir</label>
            <input type="text" name="tmp_lahir_bayi" id="tmp_lahir_bayi" class="form-control" placeholder="Masukkan Tempat lahir"
                required>
        </div>

        <div class="mb-3">
            <label for="tgl_lahir_bayi" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir_bayi" id="tgl_lahir_bayi" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
