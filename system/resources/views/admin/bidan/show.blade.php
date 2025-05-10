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
            padding: 2rem;
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

        .detail-item {
            margin-bottom: 1.5rem;
        }

        .detail-label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .detail-value {
            padding: 0.75rem 1rem;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .btn-success {
            background: #28a745;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
        }

        .btn-secondary {
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
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
            justify-content: flex-start;
            gap: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Detail Bidan</h1>
            <div class="detail-item">
                <label class="detail-label"><i class="fas fa-graduation-cap"></i> Nama Bidan</label>
                <div class="detail-value">{{ $bidan->nama_bidan }}</div>
            </div>
            <div class="detail-item">
                <label class="detail-label"><i class="fas fa-code-branch"></i> NIK</label>
                <div class="detail-value">{{ $bidan->nik }}</div>
            </div>
            <div class="detail-item">
                <label class="detail-label"><i class="fas fa-user-tie"></i> No. Telepon</label>
                <div class="detail-value">{{ $bidan->no_telpon }}</div>
            </div>
            <div class="detail-item">
                <label class="detail-label"><i class="fas fa-envelope"></i> Email</label>
                <div class="detail-value">{{ $bidan->email }}</div>
            </div>
            <div class="detail-item">
                <label class="detail-label"><i class="fas fa-hospital"></i> Fasyankes ID</label>
                <div class="detail-value">{{ $bidan->fasyankes_id }}</div>
            </div>
            <div class="d-flex mt-3">
                <a href="{{ url('admin/bidan') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Batal
                </a>
            </div>
        </div>
    </div>
</body>
@endsection
