@extends('layouts.base')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Orang Tua</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
        .detail-item i {
            color: #28a745;
            margin-right: 10px;
        }
        .btn-primary {
            font-size: 16px;
            font-weight: 600;
            background-color: #28a745;
            border-color: #218838;
        }
        .row .col-md-4 {
            font-weight: bold;
        }
        .row .col-md-8 {
            font-weight: normal;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #1c7430;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Detail Data Orang Tua
        </div>
        <div class="card-body">
            <div class="row detail-item">
                <div class="col-md-4">Nama :</div>
                <div class="col-md-8">{{ $ortu->nama }}</div>
            </div>
            <div class="row detail-item">
                <div class="col-md-4">Jenis Kelamin:</div>
                <div class="col-md-8">{{ $ortu->jk_ortu }}</div>
            </div>
            <div class="row detail-item">
                <div class="col-md-4">Tempat Lahir :</div>
                <div class="col-md-8">{{ $ortu->tmp_lahir_ortu }}</div>
            </div>
            <div class="row detail-item">
                <div class="col-md-4">Tanggal Lahir :</div>
                <div class="col-md-8">{{ $ortu->tgl_lahir_ortu }}</div>
            </div>
            <div class="row detail-item">
                <div class="col-md-4">No Telpon :</div>
                <div class="col-md-8">{{ $ortu->tlp }}</div>
            </div>
            <div class="row detail-item">
                <div class="col-md-4">Alamat Lengkap :</div>
                <div class="col-md-8">{{ $ortu->alamat }}</div>
            </div>
            <a href="{{ url('admin/ortu') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
@endsection
