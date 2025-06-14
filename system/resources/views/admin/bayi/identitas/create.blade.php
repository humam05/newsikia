@extends('admin.layouts.base')

@section('content')
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f7f9fb;
        color: #333;
    }

    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
    }

    .form-col {
        flex: 1;
    }

    label {
        display: block;
        font-weight: 500;
        margin-bottom: 6px;
        color: #444;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        background-color: #fefefe;
        box-sizing: border-box;
        transition: border-color 0.2s ease;
    }

    input:focus,
    textarea:focus {
        border-color: #3498db;
        outline: none;
    }

    textarea {
        resize: vertical;
        min-height: 60px;
    }

    button {
        display: inline-block;
        margin-top: 25px;
        padding: 10px 20px;
        font-size: 14px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    h4.header-title {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    h2 {
        margin-top: 20px;
        font-size: 20px;
        color: #2c3e50;
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 5px;
    }

    h3 {
        margin-top: 15px;
        font-size: 18px;
        color: #2c3e50;
    }

    @media (max-width: 600px) {
        .form-row {
            flex-direction: column;
        }
    }
</style>

<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Form Data Anak</h4>
        </div>
    </div>
</div>

<form action="{{ url('admin/bayi/identitas/store') }}" method="POST">
    @csrf

    <input type="hidden" name="identitas_id" value="{{ $identitas->id }}">

    <div class="form-row">
        <div class="form-col">
            <label>Nama Ibu</label>
           <input type="text" name="ibu_nama" class="form-control" value="{{ $identitas->ibu_nama }}" readonly>
        </div>
        <div class="form-col">
            <label>NIK</label>
      <input type="text" name="ibu_nik" class="form-control" value="{{ $identitas->ibu_nik }}" readonly>

        </div>
    </div>

    {{-- STEP 3: Data Anak & Fasilitas --}}
    <div class="form-step">
        <h2>Identitas Anak</h2>
        <div class="form-row">
            <div class="form-col">
                <label>Nama</label>
                <input type="text" name="anak_nama" >
            </div>
            <div class="form-col">
                <label>NIK</label>
                <input type="text" name="anak_nik" maxlength="16" minlength="16" >
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>No. JKN</label>
                <input type="text" name="anak_jkn">
            </div>
            <div class="form-col">
                <label>Fasilitas Kesehatan TK1</label>
                <input type="text" name="anak_faskes_tk1">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Fasilitas Kesehatan Rujukan</label>
                <input type="text" name="anak_faskes_rujukan">
            </div>
            <div class="form-col">
                <label>Tempat Lahir</label>
                <input type="text" name="anak_tempat_lahir">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Tanggal Lahir</label>
                <input type="date" name="anak_tanggal_lahir" >
            </div>
            <div class="form-col">
                <label>Alamat Rumah</label>
                <textarea name="anak_alamat" ></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Anak ke-</label>
                <input type="number" name="anak_ke" >
            </div>
            <div class="form-col">
                <label>Nomor Akta Kelahiran</label>
                <input type="text" name="anak_akta_kelahiran">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Golongan Darah</label>
                <input type="text" name="anak_gol_darah">
            </div>
        </div>

        

    <button type="submit" class="btn btn-primary">Simpan Data Bayi</button>
</form>
@endsection
