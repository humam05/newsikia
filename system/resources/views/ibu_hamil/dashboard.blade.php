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
   
@endsection
