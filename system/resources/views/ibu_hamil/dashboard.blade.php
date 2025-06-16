@extends('ibu_hamil.layouts.base')

@section('content')
    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .profile-box {
            position: absolute;
            right: 20px;
            width: 250px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: 0.3s ease;
        }

        .profile-box:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .profile-icon {
            width: 64px;
            height: 64px;
            margin-bottom: 15px;
        }

        .profile-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .profile-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .profile-button:hover {
            background-color: #0056b3;
        }
    </style>

    {{-- Header --}}
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Selamat Datang di SIKIA Kabupaten Ketapang</h4>
            </div>
        </div>
    </div>

    {{-- Grafik --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Berat Badan</p>
                        </li>
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-danger"></i>Tinggi Badan</p>
                        </li>
                    </ul>
                </div>
                <canvas id="grafikAnak" height="100"></canvas>
            </div>
        </div>
    </div>


    {{-- Script Chart --}}
    <script>
        const data = {
            labels: {!! json_encode($periksaBayi->pluck('tanggal_format')) !!},
            datasets: [{
                    label: 'Berat Badan (kg)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    data: {!! json_encode($periksaBayi->pluck('berat_badan')) !!},
                    tension: 0.3,
                },
                {
                    label: 'Tinggi Badan (cm)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    data: {!! json_encode($periksaBayi->pluck('tinggi_badan')) !!},
                    tension: 0.3,
                }
            ]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Grafik Pertumbuhan Anak'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        new Chart(document.getElementById('grafikAnak'), config);
    </script>
@endsection
