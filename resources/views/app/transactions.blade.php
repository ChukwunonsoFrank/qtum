@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="header-2 header-fix">
            <div class="tf-container">
                <div class="header-content">
                    <a href="{{ url('app/index') }}" class="tf-btn-arrow">
                        <i class="icon-arrow-narrow-left"></i>
                    </a>
                    <h6 class="title fw-5">
                        History
                    </h6>
                    <a href="{{ url('app/index') }}" class="btn-right">

                    </a>
                </div>
            </div>
        </div>
        <div class="pt-80">
            <div class="tf-container">
                @if ($transactions->count())
                    <ul class="list">
                        @foreach ($transactions as $t)
                            <li>
                                <a href="#" class="box-transaction-item style-icon">
                                    <div class="icon">
                                        <i class="icon-mobile-pay"></i>
                                    </div>
                                    <div class="content">
                                        <div class="top d-flex justify-content-between align-items-center">
                                            <p class="name fw-6">{{ ucfirst($t->asset->name) }}</p>
                                            <p class="price fw-5">{{ $t->amount }} {{ $t->asset->symbol }}</p>
                                        </div>
                                        <div class="bottom d-flex justify-content-between align-items-center">
                                            <p class="text-medium">{{ $t->type_explained($t->type) }}</p>
                                            <p class="text-medium">{{ $t->status_explained($t->status) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="text-center py-5">
                        <i class="icon-wallet" style="font-size: 48px; opacity: 0.3;"></i>
                        <p class="text-medium mt-3">No transactions yet</p>
                        <p class="text-small text-muted">Your transaction history will appear here</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade modalDown pop-up-more-services" id="qsl-setup" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="wg-more-services">
                    <div class="tf-container">
                        <div class="divider mb-24"></div>
                        <h5 class="title mb-24">No QSL Wallet Setup Yet</h5>
                        <p class="mb-12"> Set up a wallet address to proceed!</p>
                        <a href="/app/setup" class="tf-btn primary mb-12">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (empty($user->assets->first()?->qsl_key))
        @push('scripts')
            <script>
                $(window).on('load', function() {
                    @if (empty($user->assets->first()?->qsl_key))
                        setTimeout(function() {
                            $('#qsl-setup').modal('show');
                        }, 500);
                    @endif
                });
            </script>
        @endpush
    @endif
@endsection
