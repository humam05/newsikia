@extends('nakes.layouts.base')
@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Selamat Datang di SIKIA Kabupaten Ketapang</h4>
            </div>
        </div>
    </div>
    <!-- Form Pencarian -->
    <div class="row">
        <div class="col-12">
            <section class="card">
                <header class="card-header text-uppercase" style="height: 70px;">
                    <form action="{{ url('nakes/dashboard') }}" method="GET" class="form-horizontal form-label-left mb-4">
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <input name="cari" type="search" value="{{ request('cari')}}" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Cari Pasien Berdasarkan NO.KK / NIK" maxlength="16" minlength="16" value="{{ request('cari') }}">
                                <div class="input-group-prepend ml-1">
                                    <button type="submit" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <span class="text">Cari Akun</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </header>
            </section>
        </div>
    </div>
    <div class="row row justify-content-center">
        <div class="col-8">
            <div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="mdi mdi-baby text-info mr-2"></i>
                                    <b>6521</b>
                                </h2>
                                <p class="text-muted mb-0">Total Bayi</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="fas fa-users text-danger mr-2"></i>
                                    <b>325</b>
                                </h2>
                                <p class="text-muted mb-0">Total Ibu Hamil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h5 class="mt-0 font-14 mb-3">Ibu Hamil</h5>
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nik</th>
                                <th>Fasyankes</th>
                                <th>Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tomaslau</td>
                                <td><a href="#" class="text-muted">tomaslau@dummy.com</a></td>
                                <td><b><a href="" class="text-dark"><b>356</b></a></b></td>
                                <td>01/11/2003</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chadengle</td>
                                <td><a href="#" class="text-muted">chadengle@dummy.com</a></td>
                                <td><b><a href="" class="text-dark"><b>568</b></a></b></td>
                                <td>01/11/2003</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Stillnotdavid</td>
                                <td><a href="#" class="text-muted">stillnotdavid@dummy.com</a></td>
                                <td><b><a href="" class="text-dark"><b>201</b></a></b></td>
                                <td>12/11/2003</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kurafire</td>
                                <td><a href="#" class="text-muted">kurafire@dummy.com</a></td>
                                <td><b><a href="" class="text-dark"><b>56</b></a></b></td>
                                <td>14/11/2003</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Shahedk</td>
                                <td><a href="#" class="text-muted">shahedk@dummy.com</a></td>
                                <td><b><a href="" class="text-dark"><b>356</b></a></b></td>
                                <td>20/11/2003</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Adhamdannaway</td>
                                <td><a href="#" class="text-muted">adhamdannaway@dummy.com</a></td>
                                <td><b><a href="" class="text-dark"><b>956</b></a></b></td>
                                <td>24/11/2003</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


@endsection
