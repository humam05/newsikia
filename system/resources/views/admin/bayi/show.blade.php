@extends('admin.layouts.base')

@section('content')
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .card {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
        }

        .card-header {
            background: linear-gradient(90deg, #28a745, #218838);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            border-bottom: 2px solid #28a745;
        }

        .card-body {
            font-size: 18px;
            padding: 2rem;
            background-color: #f8f9fa;
        }

        .detail-item {
            margin-bottom: 1.5rem;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .detail-item:hover {
            background-color: #e9ecef;
        }

        .row .col-md-4 {
            font-weight: bold;
        }

        .btn-primary {
            font-size: 16px;
            font-weight: 600;
            background-color: #28a745;
            border-color: #218838;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1c7430;
        }
    </style>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Detail Bayi
            </div>
            <div class="card-body">
                <div class="row detail-item">
                    <div class="col-md-4">ID Orang Tua:</div>
                    <div class="col-md-8">{{ $bayi->ortu_id }}</div>
                </div>
                <div class="row detail-item">
                    <div class="col-md-4">ID Bayi:</div>
                    <div class="col-md-8">{{ $bayi->id }}</div>
                </div>
                <div class="row detail-item">
                    <div class="col-md-4">Nama Bayi:</div>
                    <div class="col-md-8">{{ $bayi->nama_lengkap }}</div>
                </div>
                <div class="row detail-item">
                    <div class="col-md-4">Tempat Lahir:</div>
                    <div class="col-md-8">{{ $bayi->tmp_lahir_bayi }}</div>
                </div>
                <div class="row detail-item">
                    <div class="col-md-4">Tanggal Lahir:</div>
                    <div class="col-md-8">{{ $bayi->tgl_lahir_bayi }}</div>
                </div>
                <a href="{{ url('admin/bayi') }}" class="btn btn-primary mt-3">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
