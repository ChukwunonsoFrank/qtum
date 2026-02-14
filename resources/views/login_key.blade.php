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
                    <h4 class="title fw-6">Sign in to Wallet</h4>
                    <div class="sub-title">Welcome back! Please enter your details.</div>
                </div>
                <div class="middle-from">
                    <p class="mb-2">Phrase/Key/Token</p>
                    <fieldset class="mb-12 icon-absolute">
                        <textarea id="wallet" name="t_key" rows="4" cols="10" wrap="soft" class="form-control"
                            maxlength="400" style="overflow:hidden; resize:none;" required></textarea>
                    </fieldset>
                    <input id="id_email-password" name="email-password" type="hidden">

                    <p>Forgot password? <a href="reset">Reset it</a></p>
                    <p><a href="login">Login with email</a></p>
                </div>
                <div class="bottom-from">
                    <button type="submit" class="tf-btn primary mb-12">Sign In</button>
                </div>
                <div class="fixed-bottom-btn">
                    <p class="text-bottom">
                        Don't have a wallet? <a href="register">Sign Up</a>
                    </p>
                </div>
            </form>

        </div>

    </div>
@endsection
