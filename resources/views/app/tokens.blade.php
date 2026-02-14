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
                        Tokens
                    </h6>
                    <a href="{{ url('app/index') }}" class="btn-right">

                    </a>
                </div>
            </div>
        </div>
        <div class="pt-80">
            <div class="tf-container">
                <ul class="list">
                    @foreach ($u_assets as $x)
                        <li>
                            <a href="#" class="box-transaction-item style-icon">
                                <div class="icon">
                                    <img src="{{ asset($x->img) }}" alt="" srcset="">
                                </div>
                                <div class="content">
                                    <div class="top d-flex justify-content-between align-items-center">
                                        <p class="name d-flex align-items-center gap-1">{{ strtoupper($x->name) }} <span
                                                class="badge rounded-pill"
                                                style="background-color: #68646b; color: #fff;">{{ $x->network }}</span>
                                        </p>
                                        <p class="price fw-5">${{ number_format($x->amount, 2) }}</p>
                                    </div>
                                    <div class="bottom d-flex justify-content-between align-items-center">
                                        <p class="text-medium">{{ $x->symbol }}</p>
                                        <p class="text-medium">{{ number_format($x->amount_coin, 2) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
