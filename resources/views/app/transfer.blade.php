@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="wg-send-request">
            <div class="top-page-send-request send mb-20">
                <div class="header-2 header-fix style-bg-1">
                    <div class="tf-container">
                        <div class="header-content">
                            <a href="{{ url('app/index') }}" class="tf-btn-arrow">
                                <i class="icon-arrow-narrow-left"></i>
                            </a>
                            <h5 class="title fw-5">
                                Send
                            </h5>
                            <a href="{{ url('app/index') }}" class="btn-right">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-page-send-request">
                <form method="POST" action="{{ route('app.transfer.post') }}">
                    @csrf
                    <div class="tf-container" style="margin-top: 5rem;">
                        @if ($errors->any())
                            <div class="alert alert-danger mb-16">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success mb-16">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="category-select mb-16">
                            <p class="title mb-8">Asset</p>
                            <div class="default-select">
                                <select name="asset" id="asset">
                                    @foreach ($user->assets as $asset)
                                        <option value="{{ $asset->asset->id }}">
                                            {{ strtoupper($asset->asset->name) }}@if ($asset->asset->network)
                                                ({{ strtoupper($asset->asset->network) }})
                                            @endif
                                            - ({{ $asset->amount }}
                                            {{ strtoupper($asset->asset->name) }})
                                        </option>
                                    @endforeach
                                </select>
                                <div class="icon">
                                    <i class="icon-direction-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="optional-box mb-16">
                            <p class="title mb-8">Amount</p>
                            <div class="textarea-optional">
                                <input type="number" name="amount" id="amount" class="style-border"
                                    placeholder="Amount" required step="any" autocomplete="off">
                            </div>
                        </div>
                        <div class="optional-box mb-16">
                            <p class="title mb-8">Receiving Wallet</p>
                            <div class="textarea-optional">
                                <input type="text" name="wallet" id="wallet" class="style-border"
                                    placeholder="Receiving Wallet Address" required autocomplete="off">
                            </div>
                        </div>
                        <div class="optional-box">
                            <p class="title mb-8">Enter password to authorize this transaction</p>
                            <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                                <input type="password" name="password" placeholder="" id="id_email-rawPassword"
                                    class="password-field" style="padding-left: 16px !important;" required>
                                <span class="show-pass">
                                    <span class="icon-eye"></span>
                                    <span class="icon-eye-off"></span>
                                </span>
                            </fieldset>
                        </div>
                    </div>
                    <div class="fixed-bottom-btn">
                        <div class="tf-container">
                            <button type="submit" class="tf-btn primary">Process</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
