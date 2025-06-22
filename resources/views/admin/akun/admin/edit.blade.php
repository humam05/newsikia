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
            <h1 class="text-center mb-4">Edit Akun</h1>
            <form action="{{ url('admin/akun/admin/update', $detail->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label">
                        <i class="fas fa-user-nurse"></i> Nama Pemilik Akun
                    </label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $detail->name }}" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">
                        <i class="fas fa-id-card"></i> Email
                    </label>
                    <input type="text" class="form-control" id="email" name="email"
                        value="{{ $detail->email }}" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ url('admin/akun/admin') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
