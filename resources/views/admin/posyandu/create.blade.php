@extends('admin.layouts.base')

@section('content')
    <form action="{{ url('/admin/posyandu/store') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- Token keamanan Laravel -->

        <div class="row">
            <div class="mb-3 col-6">
                <label for="nama_posyandu" class="form-label">Nama Posyandu</label>
                <input type="text" name="nama_posyandu" id="nama_posyandu" class="form-control"
                    placeholder="Masukkan Nama Posyandu" required>
            </div>

            <div class="mb-3 col-6">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control"
                    placeholder="Masukkan Tanggal" required>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="time" name="waktu" id="waktu" class="form-control"
                    placeholder="Masukkan Waktu Posyandu" required>
            </div>

            <div class="mb-3 col-6">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" class="form-control"
                    placeholder="Masukkan Lokasi" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="fasyankes_id" class="form-label">Pilih Fasyankes</label>
            <select name="fasyankes_id" id="fasyankes_id" class="form-control select2" required>
                <option value="" disabled selected>Pilih Fasyankes</option>
                @foreach ($fasyankesList as $fasyankes)
                    <option value="{{ $fasyankes->id }}">{{ $fasyankes->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto Posyandu</label>
            <input type="file" name="foto" id="foto" class="form-control">
            <small class="form-text text-muted">Format foto: jpeg, png, jpg, gif (maksimal 2MB)</small>
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
