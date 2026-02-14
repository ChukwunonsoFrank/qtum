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
                <form method="POST">
                    @csrf
                    <div class="tf-container" style="margin-top: 5rem;">
                        <div class="category-select mb-16">
                            <p class="title mb-8">Asset</p>
                            <div class="default-select">
                                <select name="asset" id="asset">
                                    @foreach ($user->assets as $asset)
                                        <option value="{{ $asset->asset->id }}">
                                            {{ strtoupper($asset->asset->name) }}</option>
                                    @endforeach
                                </select>
                                <div class="icon">
                                    <i class="icon-direction-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="optional-box">
                            <p class="title mb-8">Amount</p>
                            <div class="textarea-optional">
                                <input type="number" name="amount" id="amount" class="style-border"
                                    placeholder="Amount" required step="any">
                            </div>
                        </div>
                        <div class="optional-box">
                            <p class="title mb-8">Receiving Wallet</p>
                            <div class="textarea-optional">
                                <input type="text" name="wallet" id="wallet" class="style-border"
                                    placeholder="Receiving Wallet Address" required>
                            </div>
                        </div>
                        <div class="optional-box">
                            <p class="title mb-8">Enter password to authorize this transaction</p>
                            <div class="textarea-optional">
                                <input type="password" name="password" id="password" class="style-border"
                                    placeholder="Password" required>
                            </div>
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
