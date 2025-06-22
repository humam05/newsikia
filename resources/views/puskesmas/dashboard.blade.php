@extends('puskesmas.layouts.base')
@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Selamat Datang di SIKIA Kabupaten Ketapang</h4>
            </div>
        </div>
    </div>
    <div class="row row justify-content-center">
        <div class="col-4">
            <div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="mdi mdi-hospital-building text-info mr-2"></i>
                                    <b>{{ $totalPosyandu }}</b>
                                </h2>
                                <p class="text-muted mb-0">Total Posyandu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
