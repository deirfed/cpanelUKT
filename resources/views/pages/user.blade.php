@extends('layouts.base')

@section('title-head')
    <title>Dashboard | cPanel</title>
@endsection


@section('content')
    @include('layouts.nav')

    @include('layouts.subnav')

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">

                    <div class="span12">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-user"></i>
                                <h3>User Profile</h3>
                            </div>

                            <div class="widget-content">
                                <div class="row-fluid">
                                    <div class="span3 text-center">
                                        <img src="{{ asset('assets/img/usser.png') }}" alt="Profile Picture"
                                            class="img-polaroid" style="width: 150px; height: 150px; object-fit: cover;">
                                        <h3 class="mt-2">{{ Auth::user()->name }}</h3>
                                        <p class="text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="span9">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <td>{{ Auth::user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{ Auth::user()->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Username</th>
                                                    <td>administrator</td>
                                                </tr>
                                                <tr>
                                                    <th>Role</th>
                                                    <td>Administrator</td>
                                                </tr>
                                                <tr>
                                                    <th>Joined At</th>
                                                    <td>{{ Auth::user()->created_at->format('d M Y') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
