@extends('admin.layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Akun Dinas</h4>
        </div>
    </div>
</div>
<div class="button-container">
    <a href="{{ url('/admin/akun/dinas/create') }}" class="btn btn-primary float-right">
        Tambah Akun
    </a>
</div><br>
@endsection
