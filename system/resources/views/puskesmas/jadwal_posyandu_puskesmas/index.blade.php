@extends('puskesmas.layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Jadwal Posyandu</h4>
        </div>
    </div>
</div>
<div class="button-container">
    <a href="{{ url('/puskesmas/jadwal_posyandu_puskesmas/create') }}" class="btn btn-primary float-right">
        Tambah Data
    </a>
</div><br>
@endsection
