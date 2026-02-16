@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="wg-send-request">
            <div class="top-page-send-request send mb-20">
                <div class="header-2 header-fix style-bg-1">
                    <div class="tf-container">
                        <div class="header-content">
                            <a href="{{ url('app/stake') }}" class="tf-btn-arrow">
                                <i class="icon-arrow-narrow-left"></i>
                            </a>
                            <h5 class="title fw-5">
                                Stake Details
                            </h5>
                            <a href="{{ url('app/index') }}" class="btn-right">

                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-page-send-request">
                <form method="POST" action="{{ route('app.stake-initiate.post') }}">
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
                        <div class="category-select mb-16">
                            <p class="title mb-8">Asset</p>
                            <div class="default-select">
                                <select name="asset" id="asset">
                                    @foreach ($assets as $asset)
                                        <option value="{{ $asset->asset->id }}">
                                            {{ strtoupper($asset->asset->name) }} - ({{ $asset->amount }}
                                            {{ strtoupper($asset->asset->name) }})</option>
                                    @endforeach
                                </select>
                                <div class="icon">
                                    <i class="icon-direction-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="category-select mb-16">
                            <p class="title mb-8">APY Rate</p>
                            <div class="default-select">
                                <select name="apr_rate" id="apr_rate">
                                    <option value="6">6%</option>
                                    <option value="13">13%</option>
                                    <option value="20">20%</option>
                                </select>
                                <div class="icon">
                                    <i class="icon-direction-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="category-select mb-16">
                            <p class="title mb-8">Duration</p>
                            <div class="default-select">
                                <select name="duration" id="duration">
                                    <option value="3">3 Months</option>
                                    <option value="6">6 Months</option>
                                    <option value="12">12 Months</option>
                                </select>
                                <div class="icon">
                                    <i class="icon-direction-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="optional-box mb-16">
                            <p class="title mb-8">Amount</p>
                            <div class="textarea-optional">
                                <input type="number" name="amount" id="amount" class="style-border" placeholder=""
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="fixed-bottom-btn">
                        <div class="tf-container">
                            <button type="submit" class="tf-btn primary">Continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const apyToDuration = { '6': '3', '13': '6', '20': '12' };
        const durationToApy = { '3': '6', '6': '13', '12': '20' };

        const aprRate = document.getElementById('apr_rate');
        const duration = document.getElementById('duration');

        aprRate.addEventListener('change', function () {
            duration.value = apyToDuration[this.value];
        });

        duration.addEventListener('change', function () {
            aprRate.value = durationToApy[this.value];
        });
    </script>
@endpush
