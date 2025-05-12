@extends('admin.layouts.base')

@section('content')
    <h1>Detail Identitas Ibu Hamil</h1>
    <p>Nama: {{ $identitas->ibu_nama }}</p>
    <p>NIK: {{ $identitas->ibu_nik }}</p>
    <p>Telepon: {{ $identitas->ibu_telepon }}</p>
    <!-- Tambah field lain sesuai kebutuhan -->
@endsection
