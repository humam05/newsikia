@extends('nakes.layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <h4>Kirim Pesan WhatsApp ke {{ $ibu->ibu_nama }}</h4>
            <hr>
            {{-- @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif --}}

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif



            <form action="{{ route('nakes.pesan.kirim', $ibu->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomor_wa">Nomor WhatsApp</label>
                    <input type="text" id="nomor_wa" class="form-control" value="{{ $ibu->ibu_telepon }}" readonly>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="5" class="form-control" required>
Halo Ibu {{ $ibu->ibu_nama }}, ini adalah pesan dari petugas kesehatan. Mohon diperhatikan ya Bu 🙏
        </textarea>
                </div>

                <button type="submit" class="btn btn-success">Kirim Pesan</button>
                <a href="{{ route('nakes.pesan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>



        </div>
    </div>
@endsection
