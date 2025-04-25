@extends('nakes.layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Akun Ibu Hamil</h4>
        </div>
    </div>
</div>
<div class="button-container">
    <a href="{{ url('/nakes/akun/create') }}" class="btn btn-primary float-right">
        Tambah Akun
    </a>
</div><br>
@endsection
