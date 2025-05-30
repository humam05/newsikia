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
            <h4 class="header-title mb-3">Edit Pemeriksaan Ibu Hamil</h4>
        </div>
    </div>
</div>

<form action="{{ url('admin/ibu_hamil/periksa_rutin/update', $periksaRutin->id ) }}" method="POST">
    @csrf

    <input type="hidden" name="identitas_id" value="{{ $periksaRutin->identitas_id }}">

    <div class="form-row">
        <div class="form-col">
            <label>Nama Ibu</label>
            <input type="text" class="form-control" value="{{ $periksaRutin->identitas->ibu_nama }}" readonly>
        </div>
        <div class="form-col">
            <label>NIK</label>
            <input type="text" class="form-control" value="{{ $periksaRutin->identitas->ibu_nik }}" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Tanggal Periksa</label>
            <input type="date" name="tanggal_periksa" class="form-control" value="{{ $periksaRutin->tanggal_periksa }}">
        </div>
        <div class="form-col">
            <label>Umur Kehamilan (minggu)</label>
            <input type="number" name="umur_kehamilan" class="form-control" value="{{ $periksaRutin->umur_kehamilan }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Berat Badan (kg)</label>
            <input type="number" step="0.1" name="berat_badan" class="form-control" value="{{ $periksaRutin->berat_badan }}">
        </div>
        <div class="form-col">
            <label>Tinggi Badan (cm)</label>
            <input type="number" step="0.1" name="tinggi_badan" class="form-control" value="{{ $periksaRutin->tinggi_badan }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Lingkar Lengan (cm)</label>
            <input type="number" step="0.1" name="lingkar_lengan" class="form-control" value="{{ $periksaRutin->lingkar_lengan }}">
        </div>
        <div class="form-col">
            <label>Tekanan Darah</label>
            <input type="text" name="tekanan_darah" class="form-control" value="{{ $periksaRutin->tekanan_darah }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Tinggi Fundus Uteri (TFU) (cm)</label>
            <input type="number" step="0.1" name="tfu" class="form-control" value="{{ $periksaRutin->tfu }}">
        </div>
        <div class="form-col">
            <label>Denyut Jantung Janin (DJJ) (bpm)</label>
            <input type="number" name="djj" class="form-control" value="{{ $periksaRutin->djj }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Gerakan Janin</label>
            <select name="gerakan_janin" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="ada" {{ $periksaRutin->gerakan_janin == 'ada' ? 'selected' : '' }}>Ada</option>
                <option value="tidak_ada" {{ $periksaRutin->gerakan_janin == 'tidak_ada' ? 'selected' : '' }}>Tidak Ada</option>
            </select>
        </div>
        <div class="form-col">
            <label>Posisi Janin</label>
            <select name="posisi_janin" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="kepala" {{ $periksaRutin->posisi_janin == 'kepala' ? 'selected' : '' }}>Kepala</option>
                <option value="sungsang" {{ $periksaRutin->posisi_janin == 'sungsang' ? 'selected' : '' }}>Sungsang</option>
                <option value="lintang" {{ $periksaRutin->posisi_janin == 'lintang' ? 'selected' : '' }}>Lintang</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Kaki Bengkak</label>
        <input type="text" name="kaki_bengkak" class="form-control" value="{{ $periksaRutin->kaki_bengkak }}">
    </div>

    <div class="form-group">
        <label>Keluhan</label>
        <textarea name="keluhan" class="form-control" rows="2">{{ $periksaRutin->keluhan }}</textarea>
    </div>

    <div class="form-group">
        <label>Tindakan</label>
        <textarea name="tindakan" class="form-control" rows="2">{{ $periksaRutin->tindakan }}</textarea>
    </div>

    <div class="form-group">
        <label>Catatan</label>
        <textarea name="catatan" class="form-control" rows="2">{{ $periksaRutin->catatan }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Pemeriksaan</button>
</form>
@endsection
