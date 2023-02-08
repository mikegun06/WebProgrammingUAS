@extends('Main.structure')

@section('container')

    <div class="Login-Page">

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade shadow" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade shadow" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="Login-Title">
            <h4><u>Login</u></h4>
        </div>

            <div class="Login-Card">
                <form action="/Login" method="post">
                    @csrf
                    <div class="form-floating mb-2" style="display: flex">
                        <div class="Login-form-Text">
                            <p>Email Address:</p>
                        </div>
                        <div class="Login-form-input">
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-2" style="display: flex">
                        <div class="Login-form-Text">
                            <p>Password:</p>
                        </div>
                        <div class="Login-form-input">
                            <input type="password" name="password" id="password" placeholder="password" required>
                        </div>
                    </div>
                    <div class="Check-Box">
                        <input type="checkbox" value="lsRememberMe" id="rememberMe">
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <button class="login-btn" type="submit">Log in</button>
                </form>
                <div class="Login-Text">
                    <p>Don't have an account?</p>
                    <a href="/Register">Register Here</a>
                </div>
            </div>
    </div>
    
    <div class="Index-Footer">
        <div class="Index-Footer-Detail">
            <p>@ Amazing E-Grocery 2023</p>
        </div>
    </div>

@endsection