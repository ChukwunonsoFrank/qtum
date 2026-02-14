@extends('theme.auth')

@section('content')
    <div class="wrap">
        <div class="tf-container">
            <form class="from-login" method="post" novalidate="">
                @csrf
                <div class="top-from">
                    <h4 class="title fw-6">Create an account</h4>
                    <div class="sub-title">Choose a method to sign up.</div>
                </div>
                <div class="middle-from">
                    <a href="register/passphrase" class="tf-btn primary mb-12 text-white">Pass Phrase</a>
                    <a href="register/secretkey" class="tf-btn primary mb-12 text-white">Secret Key</a>
                    <a href="register/recoverytoken" class="tf-btn primary mb-12 text-white">Recovery Token</a>
                    <a href="register/create" class="tf-btn primary mb-12 text-white">Create New</a>

                    <p>Already have an account? <a href="login">Sign in</a></p>
                </div>
            </form>

        </div>

    </div>
@endsection
