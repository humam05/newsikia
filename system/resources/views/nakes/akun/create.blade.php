@extends('nakes.layouts.base')
@section('content')
    <form action="{{ url('nakes/akun/store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Pengguna"
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                    required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" id="password" class="form-control"
                    placeholder="Masukkan Waktu Password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
