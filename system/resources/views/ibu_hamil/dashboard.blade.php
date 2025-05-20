@extends('ibu_hamil.layouts.base')
@section('content')
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
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Selamat Datang di SIKIA Kabupaten Ketapang</h4>
            </div>
        </div>
    </div>
    <div class="profile-box">
        <img src="">
        <div class="profile-title">Data Keluarga</div>
        <div class="button-container">
            <a href="{{ route('ibu_hamil.identitas.lengkapi') }}" class="btn btn-primary">Lengkapi Data</a>

        </div><br>
    </div>

    {{-- <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                <h5 class="mt-0 font-14">Berat Badan Anak</h5>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Series A</p>
                        </li>
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-muted"></i>Series B</p>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-bar-stacked" class="morris-chart" dir="ltr" style="height: 300px;"></div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-box">
                <h5 class="mt-0 font-14">Sales Analytics</h5>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Mobiles</p>
                        </li>
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-info"></i>Tablets</p>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-line-chart" class="morris-chart" dir="ltr" style="height: 300px;"></div>
            </div>
        </div>
    </div> --}}
@endsection
