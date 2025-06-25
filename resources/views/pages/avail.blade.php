@extends('layouts.base')

@section('title-head')
    <title>Availability | cPanel</title>
@endsection


@section('content')
    @include('layouts.nav')

    @include('layouts.subnav')

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <h2 style="text-align: center">Available Sites</h2>
                <div class="row">
                    <div class="span6">
                        <div class="widget" style="position: relative;">
                            <span class="pulse-indicator-fixed"></span>
                            <div class="widget-content text-center">
                                <h1 style="text-align: center">SIMOJA UKT 2</h1>
                                <img src="{{ asset('assets/img/ukt2logo.png') }}" alt="Logo SIMOJA"
                                    style="max-width: 180px; height: auto; display: block; margin: 0 auto 1rem;">
                                <p>
                                    SIMOJA UKT 2 merupakan sebuah aplikasi yang dapat mengakomodir laporan kerja, absensi,
                                    dan administrasi kantor secara digital dan terpusat. Aplikasi ini dirancang untuk
                                    meningkatkan efisiensi operasional harian, mempermudah monitoring aktivitas personel,
                                    serta mendukung dokumentasi pekerjaan dengan rapi dan real-time. Dengan SIMOJA, proses
                                    pelaporan menjadi lebih cepat, transparan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="widget" style="position: relative;">
                            <span class="pulse-indicator-fixed"></span>
                            <div class="widget-content text-center">
                                <h1 style="text-align: center">ASET UKT 2</h1>
                                <img src="{{ asset('assets/img/ukt2logo.png') }}" alt="Logo SIMOJA"
                                    style="max-width: 180px; height: auto; display: block; margin: 0 auto 1rem;">
                                <p>
                                    ASET UKT 2 merupakan sebuah aplikasi manajemen transaksi aset yang dirancang untuk
                                    mendukung pengelolaan aset secara lebih efisien, transparan, dan terdokumentasi dengan
                                    baik. Aplikasi ini memungkinkan pengguna untuk melakukan pencatatan, pelacakan, dan
                                    pemantauan terhadap seluruh siklus aset—mulai dari pengadaan hingga pemutakhiran data.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .pulse-indicator-fixed {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 15px;
            height: 15px;
            background-color: #28a745;
            border-radius: 50%;
            box-shadow: 0 0 0 rgba(40, 167, 69, 0.4);
            animation: pulse 1s infinite;
            z-index: 10;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.8);
                box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.4);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(40, 167, 69, 0);
            }

            100% {
                transform: scale(0.8);
                box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
            }
        }
    </style>
@endsection
