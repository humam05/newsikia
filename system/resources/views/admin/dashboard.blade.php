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
                                    <b>8954</b>
                                </h2>
                                <p class="text-muted mb-0">Total Bidan</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="fas fa-hospital text-teal mr-2"></i>
                                    <b>7841</b>
                                </h2>
                                <p class="text-muted mb-0">Total Fasyankes</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="mdi mdi-baby text-info mr-2"></i>
                                    <b>6521</b>
                                </h2>
                                <p class="text-muted mb-0">Total Bayi</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="fas fa-users text-danger mr-2"></i>
                                    <b>325</b>
                                </h2>
                                <p class="text-muted mb-0">Total Orang Tua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                <h5 class="mt-0 font-14">Total Revenue</h5>
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
