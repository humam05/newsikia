@extends('admin.layouts.base')

@section('content')
<head>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width:100%;
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
            <h1 class="text-center mb-4">Edit Bidan</h1>
            <form action="{{ url('admin/bidan/update', $detail->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama_bidan" class="form-label">
                        <i class="fas fa-user-nurse"></i> Nama Bidan
                    </label>
                    <input type="text" class="form-control" id="nama_bidan" name="nama_bidan"
                        value="{{ $detail->nama_bidan }}" required>
                </div>
                <div class="mb-4">
                    <label for="nik" class="form-label">
                        <i class="fas fa-id-card"></i> NIK
                    </label>
                    <input type="text" class="form-control" id="nik" name="nik"
                        value="{{ $detail->nik }}" required>
                </div>
                <div class="mb-4">
                    <label for="no_telpon" class="form-label">
                        <i class="fas fa-phone"></i> No. Telepon
                    </label>
                    <input type="text" class="form-control" id="no_telpon" name="no_telpon"
                        value="{{ $detail->no_telpon }}" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i> Email
                    </label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ $detail->email }}" required>
                </div>
                <div class="mb-4">
                    <label for="fasyankes_id" class="form-label">
                        <i class="fas fa-hospital"></i> ID Fasyankes
                    </label>
                    <input type="text" class="form-control" id="fasyankes_id" name="fasyankes_id"
                        value="{{ $detail->fasyankes_id }}" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ url('admin/bidan') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
