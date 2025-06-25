@extends('layouts.base')

@section('title-head')
    <title>Login | cPanel</title>
@endsection

@section('content')
    <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <a class="brand" href="{{ route('login') }}">
                </a>

            </div>

        </div>

    </div>

    <div class="account-container">

        <div class="content clearfix" style="text-align: center">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="logowrapper">
                    <img class="logocpanel" src="{{ asset('assets/img/signin/cpanelogo.png') }}" alt="">
                </div>
                <h1>Login cPanel</h1>

                <div class="login-fields">
                    <p>Please provide your details</p>

                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email"
                            class="login username-field @error('email') is-invalid @enderror" required autofocus />
                        @error('email')
                            <div class="text-danger" style="font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="login password-field @error('password') is-invalid @enderror" required />
                        @error('password')
                            <div class="text-danger" style="font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="login-actions">
                    <button type="submit" class="button btn btn-success btn-large">Sign In</button>
                </div>
            </form>
        </div>
    </div>
@endsection
