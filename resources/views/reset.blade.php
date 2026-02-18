@extends('theme.auth')

@section('content')
    <div class="wrap">
        <div class="tf-container">
            <div class="wg-verification">
                <div class="image-verification-forgot lock-icon">
                    <img loading="lazy" alt="img" width="96" height="96"
                        src="{{ asset('assets/images/sign-up/empty-state.png') }}" class="img-1">
                    <div class="icon">
                        <i class="icon-lock"></i>
                        <span class="dot-error"></span>
                    </div>
                </div>

                <form class="from-verification-forgot from-forgot" method="post">
                    @csrf
                    <h4 class="title">
                        Can’t sign in?
                    </h4>
                    <div class="sub-title">
                        Enter the email associated with your account, and we will send you a link to reset your
                        password.
                    </div>
                    <fieldset class="tf-field icon-absolute">
                        <i class="icon-mail"></i>
                        <input type="email" placeholder="" name="email" class="tf-field-input tf-input" id="mail"
                            required>
                        <label class="tf-field-label" for="mail">Email</label>
                    </fieldset>
                    <div class="fixed-bottom-btn">
                        <div class="tf-container">
                            <button type="submit" class="tf-btn primary mb-12">Continue</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
