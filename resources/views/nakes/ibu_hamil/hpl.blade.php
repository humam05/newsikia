@extends('nakes.layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">HPL Ibu Hamil</h4>
        </div>
    </div>
</div>

<form action="{{ url('/nakes/hpl/store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="mb-3 col-6">
            <label for="hpl" class="form-label">Hari Perkiraan Lahir (HPL)</label>
            <input type="date" name="hpl" id="hpl" class="form-control" required>
        </div>

        <div class="mb-3 col-6">
            <label for="usia_kehamilan" class="form-label">Usia Kehamilan (minggu)</label>
            <input type="number" name="usia_kehamilan" id="usia_kehamilan" class="form-control" placeholder="Contoh: 32" required>
        </div>
    </div>

    <div class="text-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection
