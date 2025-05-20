@extends('nakes.layouts.base')

@section('content')
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
        font-size: 24px;

    }

    .d-flex {
        display: flex;
        justify-content: flex-start;
        gap: 10px;
    }
</style>

<div class="container mt-5">
    <div class="card">
        <h1>Identitas Ibu Hamil</h1>

        <div class="detail-item">
            <label class="detail-label"><i class="fas fa-user"></i> Nama Ibu</label>
            <div class="detail-value">{{ $identitas->ibu_nama }}</div>
        </div>

        <div class="detail-item">
            <label class="detail-label"><i class="fas fa-id-card"></i> NIK</label>
            <div class="detail-value">{{ $identitas->ibu_nik }}</div>
        </div>

        <div class="d-flex mt-3">
            <a href="{{ url('nakes/ibu_hamil/identitas') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>

{{-- Font Awesome --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
@endsection
