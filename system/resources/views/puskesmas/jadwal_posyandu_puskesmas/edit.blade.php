<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Posyandu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 5%;
        }

        .card {
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            border: none;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-success {
            background: #28a745;
            font-weight: bold;
            padding: 10px 20px;
        }

        .btn-secondary {
            font-weight: bold;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1 class="text-center mb-4">Edit Posyandu</h1>
            <form action="{{ url('puskesmas/jadwal_posyandu_puskesmas/update', $detail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nama_posyandu" class="form-label">Nama Posyandu</label>
                    <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" value="{{ $detail->nama_posyandu }}" required>
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $detail->tanggal }}" required>
                </div>
                <div class="mb-4">
                    <label for="waktu" class="form-label">Waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" value="{{ $detail->waktu }}" required>
                </div>
                <div class="mb-4">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $detail->lokasi }}" required>
                </div>
                <div class="mb-4">
                    <label for="nama_fasyankes" class="form-label">Nama Fasyankes</label>
                    <input type="text" class="form-control" id="nama_fasyankes" name="nama_fasyankes" value="{{ $detail->nama_fasyankes }}" required>
                </div>
                <div class="mb-4">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    @if($detail->foto)
                        <img src="{{ asset('storage/posyandu/' . $detail->foto) }}" alt="Foto Posyandu" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ url('puskesmas/jadwal_posyandu_puskesmas') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
