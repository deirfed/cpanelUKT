@extends('layouts.base')

@section('title-head')
    <title>Dashboard | cPanel</title>
@endsection


@section('content')
    @include('layouts.nav')

    @include('layouts.subnav')

    <div class="main">
        <div class="main-inner">
            <div class="container mb-5">
                <div class="row">
                    <div class="span12">
                        <div id="xterm-container" style="height: 300px; width: 100%; background: black;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
