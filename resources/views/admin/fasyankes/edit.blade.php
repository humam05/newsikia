@extends('admin.layouts.base')

@section('content')
<head>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            margin-top: 5%;
        }

        .card {
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            border: none;
            border-radius: 10px;
            background-color: #ffffff;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-success {
            background-color: #28a745;
            font-weight: bold;
            padding: 10px 20px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-secondary {
            font-weight: bold;
            padding: 10px 20px;
        }

        .btn i {
            margin-right: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Edit Fasyankes</h1>
            <form action="{{ url('admin/fasyankes/update', $detail->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="form-label"><i class="fas fa-clinic-medical"></i> Nama Fasyankes</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $detail->nama }}" >
                </div>
                <div class="mb-4">
                    <label for="kecamatan" class="form-label"><i class="fas fa-map-marker-alt"></i> Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $detail->kecamatan }}" >
                </div>
                <div class="mb-4">
                    <label for="kelurahan" class="form-label"><i class="fas fa-map-marker-alt"></i> Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="{{ $detail->kelurahan }}" >
                </div>
                <div class="mb-4">
                    <label for="desa" class="form-label"><i class="fas fa-map-marker-alt"></i> Desa</label>
                    <input type="text" class="form-control" id="desa" name="desa" value="{{ $detail->desa }}" >
                </div>
                <div class="mb-4">
                    <label for="rt_rw" class="form-label"><i class="fas fa-map-marked-alt"></i> RT/RW</label>
                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" value="{{ $detail->rt_rw }}" >
                </div>
                <div class="d-flex mt-3">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('admin/fasyankes') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
