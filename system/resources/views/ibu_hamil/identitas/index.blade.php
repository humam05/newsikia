@extends('ibu_hamil.layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Data Diri</h4>
        </div>
    </div>
</div>
<div class="button-container float-right">
    <a href="{{ url('/ibu_hamil/identitas/create') }}" class="btn btn-primary">
        Tambah Data
    </a>
</div><br>
@endsection
