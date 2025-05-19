@extends('admin.layouts.base')

@section('content')
    <form action="{{ url('/admin/bidan/store') }}" method="POST">
        @csrf <!-- Token keamanan Laravel -->

        <div class="mb-3">
            <label for="fasyankes_id" class="form-label">Pilih Fasyankes</label>
            <select name="fasyankes_id" id="fasyankes_id" class="form-control select2" required>
                <option value="" disabled selected>Pilih Fasyankes</option>
                @foreach ($fasyankesList as $fasyankes)
                    <option value="{{ $fasyankes->id }}">{{ $fasyankes->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="nama_bidan" class="form-label">Nama Bidan</label>
                <input type="text" name="nama_bidan" id="nama_bidan" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" maxlength="16" minlength="16" required>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="no_telpon" class="form-label">Nomor Telpon</label>
                <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan No Telpon" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Masukkan Provinsi" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <input type="text" name="kabupaten" id="kabupaten" class="form-control" placeholder="Masukkan Kabupaten" required>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="desa" class="form-label">Desa</label>
                <input type="text" name="desa" id="desa" class="form-control" placeholder="Masukkan Desa" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
            <input type="text" name="alamat_lengkap" id="alamat_lengkap" class="form-control" placeholder="Masukkan Alamat Lengkap" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
        });
    </script>
@endpush
