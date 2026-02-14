@extends('theme.auth')

@section('content')
    <div class="wrap">
        <div class="tf-container">
            <form class="from-login" method="post" novalidate="">
                @csrf
                <div class="top-from">
                    <h4 class="title fw-6">Recover Account</h4>
                    <div class="sub-title">Enter your new password.</div>
                </div>
                <div class="middle-from">
                    <p class="mb-2">Enter new password</p>
                    <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="n_password" placeholder="Enter new password" id="id_email-rawPassword"
                            class="password-field" required>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                </div>
                <div class="bottom-from">
                    <button type="submit" class="tf-btn primary mb-12">Complete Recovery</button>
                </div>
            </form>

        </div>

    </div>
@endsection
