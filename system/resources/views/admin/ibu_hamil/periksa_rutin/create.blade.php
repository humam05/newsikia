@extends('admin.layouts.base')
@section('content')
<style>
     .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-col {
            flex: 1;
        }
</style>
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Pemeriksaan Ibu Hamil</h4>
            </div>
        </div>
    </div>
    <form action="{{ url('periksa/store') }}" method="POST">
        @csrf
        <div class="form-row">

            <div class="form-col">
                <label>Nama Ibu</label>
                <input type="text" name="ibu_nama" class="form-control" value="{{ $dataIdentitas->ibu_nama }}" readonly>
            </div>
            <div class="form-col">
                <label>NIK</label>
                <input type="text" name="ibu_nik" class="form-control" value="{{ $dataIdentitas->ibu_nik }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="ibu_alamat" class="form-control" value="{{ $dataIdentitas->ibu_alamat }}" readonly>
        </div>
        <div class="form-group">
            <label>Tekanan Darah</label>
            <input type="text" name="tekanan_darah" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pemeriksaan</button>
    </form>
@endsection
