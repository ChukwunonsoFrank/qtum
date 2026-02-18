@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="tf-container">
            <div class="wg-new-pass">
                <div class="header">
                    <a href="{{ url('app/index') }}" class="tf-btn-arrow">
                        <i class="icon-arrow-narrow-left"></i>
                    </a>
                </div>
                <div class="top-wg">
                    <h4 class="title">
                        Change password
                    </h4>
                    <div class="sub-title">
                        Your new password must be different from previous password.
                    </div>
                </div>
                <form action="{{ route('app.change_password.post') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger mb-16">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success mb-16">
                            {{ session('success') }}
                        </div>
                        <script>
                            setTimeout(function () {
                                window.location.href = '{{ url("app/index") }}';
                            }, 2000);
                        </script>
                    @endif
                    <fieldset class="box-auth-pass mb-16 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="text" name="old_password" placeholder=" "
                            class="password-field tf-field-input tf-input" required
                            style="-webkit-text-security: disc;"
                            autocomplete="off">
                        <label class="tf-field-label">Old Password</label>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <fieldset class="box-auth-pass mb-16 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" placeholder=" "
                            class="password-field tf-field-input tf-input" required>
                        <label class="tf-field-label">New Password</label>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <fieldset class="box-auth-pass mb-16 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password_confirmation" placeholder=" "
                            class="password-field tf-field-input tf-input" required>
                        <label class="tf-field-label">Confirm Password</label>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <div class="fixed-bottom-btn">
                        <div class="tf-container">
                            <button type="submit" class="tf-btn primary">Change Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
