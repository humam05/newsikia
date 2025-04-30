@extends('ibu_hamil.layouts.base')
@section('content')
<head>
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

        .btn i {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1 class="text-center mb-4">Edit Identitas</h1>
            <form action="{{ url('ibu_hamil/identitas/update', $detail->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="ibu_nama" class="form-label"><i class="fas fa-graduation-cap"></i> Nama Ibu</label>
                    <input type="text" class="form-control" id="ibu_nama" name="ibu_nama" value="{{ $detail->ibu_nama }}"
                        required>
                </div>
                <div class="mb-4">
                    <label for="ibu_nik" class="form-label"><i class="fas fa-code-branch"></i>NIK</label>
                    <input type="text" class="form-control" id="ibu_nik" name="ibu_nik"
                        value="{{ $detail->ibu_nik }}" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('ibu_hamil/identitas') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                        Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
