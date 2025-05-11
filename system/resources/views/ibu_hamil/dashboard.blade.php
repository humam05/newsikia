@extends('ibu_hamil.layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Selamat Datang di SIKIA Kabupaten Ketapang</h4>
        </div>
    </div>
</div>
  <div class="row">
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
    </div>
@endsection
