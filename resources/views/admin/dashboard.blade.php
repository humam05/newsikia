@extends('admin.layouts.base')
@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Selamat Datang di SIKIA Kabupaten Ketapang</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="fas fa-user-md text-primary mr-2"></i>
                                    <b>{{ $totalBidan }}</b>
                                </h2>
                                <p class="text-muted mb-0">Total Bidan</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="fas fa-hospital text-teal mr-2"></i>
                                    <b>{{ $totalFasyankes }}</b>
                                </h2>
                                <p class="text-muted mb-0">Total Fasyankes</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="mdi mdi-baby text-info mr-2"></i>
                                    <b>{{ $totalBayi }}</b>
                                </h2>
                                <p class="text-muted mb-0">Total Bayi</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="mdi mdi-hospital-building text-info mr-2"></i>
                                    <b>{{ $totalPosyandu }}</b>
                                </h2>
                                <p class="text-muted mb-0">Total Posyandu</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="fas fa-users text-danger mr-2"></i>
                                    <b>{{ $totalIdentitas }}</b>
                                </h2>
                                <p class="text-muted mb-0">Ibu Hamil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
