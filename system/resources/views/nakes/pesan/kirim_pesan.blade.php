@extends('nakes.layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <h4>Kirim Pesan WhatsApp ke {{ $ibu->ibu_nama }}</h4>
            <hr>

            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomor_wa">Nomor WhatsApp</label>
                    <input type="text" id="nomor_wa" class="form-control" value="{{ $ibu->ibu_telepon }}" readonly>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="5" class="form-control" required>Halo Ibu {{ $ibu->ibu_nama }}, ini adalah pesan dari petugas kesehatan. Mohon diperhatikan ya Bu 🙏</textarea>
                </div>

                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $ibu->ibu_telepon) }}?text={{ urlencode('Halo Ibu ' . $ibu->ibu_nama . ', ini adalah pesan dari petugas kesehatan. Mohon diperhatikan ya Bu 🙏') }}"
                    target="_blank" class="btn btn-success">
                    Kirim via WhatsApp
                </a>

                <a href="{{ url('nakes/pesan') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
