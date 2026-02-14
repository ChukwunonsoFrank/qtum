@extends('theme.user')

@section('content')
    <div class="wrap position-relative">
        <div class="bg-rectangle"></div>
        <div class="tf-container position-relative mb-24">
            <div class="header-v3 d-flex justify-content-between bg-color-bg pt-8 mb-16">
                <div class="left">
                    <div class="name">
                        <select class="image-select style-default type-currencies bg-color-primary-200">
                            <option selected
                                data-thumbnail="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('assets/images/avartar/placeholder.jpg') }}">
                                Hi,
                                {{ auth()->user()->name }}</option>
                        </select>
                    </div>
                </div>
                <div class="right">
                    <div class="d-flex align-items-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_45_2)">
                                <path
                                    d="M6.6665 8.66673C6.95281 9.04948 7.31808 9.36618 7.73754 9.59535C8.157 9.82452 8.62084 9.9608 9.0976 9.99495C9.57437 10.0291 10.0529 9.9603 10.5007 9.79325C10.9486 9.62619 11.3552 9.36477 11.6932 9.02673L13.6932 7.02673C14.3004 6.39805 14.6363 5.55604 14.6288 4.68205C14.6212 3.80807 14.2706 2.97202 13.6526 2.354C13.0345 1.73597 12.1985 1.38541 11.3245 1.37781C10.4505 1.37022 9.60851 1.7062 8.97984 2.31339L7.83317 3.45339"
                                    stroke="#22c55e" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.33347 7.33332C9.04716 6.95057 8.68189 6.63387 8.26243 6.40469C7.84297 6.17552 7.37913 6.03924 6.90237 6.0051C6.4256 5.97095 5.94708 6.03974 5.49924 6.2068C5.0514 6.37386 4.64472 6.63527 4.3068 6.97332L2.3068 8.97332C1.69961 9.60199 1.36363 10.444 1.37122 11.318C1.37881 12.192 1.72938 13.028 2.3474 13.646C2.96543 14.2641 3.80147 14.6146 4.67546 14.6222C5.54945 14.6298 6.39146 14.2938 7.02013 13.6867L8.16013 12.5467"
                                    stroke="#22c55e" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_45_2">
                                    <rect width="16" height="16" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text fw-5 text-medium"
                            style="color: #22c55e !important; font-weight: bold;">Connected</span>
                    </div>
                </div>
            </div>

            <div class="card-payment mb-24">
                <div class="image-item">
                    <img loading="lazy" alt="img" src="{{ asset('assets/images/icons/img-item-1.png') }}">
                </div>
                <div class="image-item item-2">
                    <img loading="lazy" alt="img" src="{{ asset('assets/images/icons/img-item-2.png') }}">
                </div>
                <div class="top-card d-flex align-items-center justify-content-between">
                    <div class="left">
                        <div class="text fw-5 text-medium">
                            Portfolio
                        </div>
                        <div class="price fw-6">
                            ${{ number_format($portfolio_balance, 2) }}
                        </div>
                    </div>
                    <div class="right">

                    </div>
                </div>
                <div class="bottom-card">
                    <div class="left">
                        {{-- <span class="text-medium fw-5">{{ now()->format('M d, Y') }}</span> --}}
                    </div>
                    <div class="right">
                        <a href="{{ url('app/deposit') }}" class="btn-my-report">
                            <span>Receive</span>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="#334359" stroke-width="1.75" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chevron-left-icon lucide-chevron-left">
                                    <path d="m15 18-6-6 6-6" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 72px; overflow: hidden;">
            <tv-ticker-tape
                symbols='CRYPTOCAP:XRP,CRYPTOCAP:XLM,,CRYPTOCAP:PAXG,CRYPTOCAP:XDC,CRYPTOCAP:ALGO,CRYPTOCAP:QNT,CRYPTOCAP:ADA,CRYPTOCAP:QTUM,CRYPTOCAP:USDC'
                theme="light"></tv-ticker-tape>
        </div>

        <div class="wg-transaction-history">
            <div class="tf-container">
                <div class="d-flex justify-content-between align-items-center mb-16 heading-wg">
                    <h6 class="title fw-6">Tokens</h6>
                    <a href="{{ url('app/tokens') }}" style="font-weight: bold; font-size: 14px;">View All</a>
                </div>
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

        <div class="menubar-footer footer-fixed">
            <div class="d-flex justify-content-between">
                <div class="left inner-bar position-relative">
                    <a href="{{ url('app/index') }}" class="inner-bar-item active">
                        <i class="icon-home"></i>
                        <span class="text-small fw-5">Home</span>
                    </a>
                    <a href="{{ url('app/transfer') }}" class="inner-bar-item active text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#426671" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-arrow-up-from-line-icon lucide-arrow-up-from-line"
                            style="display:inline-block; margin-top: 1px;">
                            <path d="m18 9-6-6-6 6" />
                            <path d="M12 3v14" />
                            <path d="M5 21h14" />
                        </svg>
                        <span class="text-small fw-5">Send</span>
                    </a>
                    <a href="{{ url('app/stake') }}" class="inner-bar-item active">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_58_2)">
                                <path
                                    d="M6 3C7.71039 2.99971 9.36169 3.62564 10.6421 4.75962C11.9226 5.89359 12.7435 7.45712 12.95 9.155C13.602 8.4726 14.3858 7.92973 15.2539 7.55929C16.1219 7.18886 17.0562 6.99858 18 7H21C21.2652 7 21.5196 7.10536 21.7071 7.29289C21.8946 7.48043 22 7.73478 22 8V9C22 10.8565 21.2625 12.637 19.9497 13.9497C18.637 15.2625 16.8565 16 15 16H13V20C13 20.2652 12.8946 20.5196 12.7071 20.7071C12.5196 20.8946 12.2652 21 12 21C11.7348 21 11.4804 20.8946 11.2929 20.7071C11.1054 20.5196 11 20.2652 11 20V13H9C7.14348 13 5.36301 12.2625 4.05025 10.9497C2.7375 9.63699 2 7.85652 2 6V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3H6Z"
                                    fill="#426671" />
                            </g>
                            <defs>
                                <clipPath id="clip0_58_2">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-small fw-5">Earn</span>
                    </a>
                    <a href="{{ url('app/card') }}" class="inner-bar-item active">
                        <i class="icon-card"></i>
                        <span class="text-small fw-5">Cards</span>
                    </a>
                    <a href="#more-services" class="inner-bar-item active" data-bs-toggle="modal">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_76_6)">
                                <path
                                    d="M10 3H4C3.73478 3 3.48043 3.10536 3.29289 3.29289C3.10536 3.48043 3 3.73478 3 4V10C3 10.2652 3.10536 10.5196 3.29289 10.7071C3.48043 10.8946 3.73478 11 4 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V4C11 3.73478 10.8946 3.48043 10.7071 3.29289C10.5196 3.10536 10.2652 3 10 3Z"
                                    fill="#426671" />
                                <path
                                    d="M20 3H14C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11H20C20.2652 11 20.5196 10.8946 20.7071 10.7071C20.8946 10.5196 21 10.2652 21 10V4C21 3.73478 20.8946 3.48043 20.7071 3.29289C20.5196 3.10536 20.2652 3 20 3Z"
                                    fill="#426671" />
                                <path
                                    d="M10 13H4C3.73478 13 3.48043 13.1054 3.29289 13.2929C3.10536 13.4804 3 13.7348 3 14V20C3 20.2652 3.10536 20.5196 3.29289 20.7071C3.48043 20.8946 3.73478 21 4 21H10C10.2652 21 10.5196 20.8946 10.7071 20.7071C10.8946 20.5196 11 20.2652 11 20V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13Z"
                                    fill="#426671" />
                                <path
                                    d="M20 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V20C13 20.2652 13.1054 20.5196 13.2929 20.7071C13.4804 20.8946 13.7348 21 14 21H20C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V14C21 13.7348 20.8946 13.4804 20.7071 13.2929C20.5196 13.1054 20.2652 13 20 13Z"
                                    fill="#426671" />
                            </g>
                            <defs>
                                <clipPath id="clip0_76_6">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-small fw-5">More</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="modal fade modalDown pop-up-more-services" id="more-services">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="wg-more-services">
                        <div class="tf-container">
                            <div class="divider mb-24"></div>
                            <div class="list-box-icon mb-8">
                                <a href="{{ url('app/profile') }}" class="box-icon v3">
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <span class="text text-medium fw-5">Profile</span>
                                </a>
                                <a href="{{ url('app/transactions') }}" class="box-icon v3">
                                    <div class="icon">
                                        <i class="icon-scan"></i>
                                    </div>
                                    <span class="text text-medium fw-5">History</span>
                                </a>
                                <a href="{{ url('app/referral') }}" class="box-icon v3">
                                    <div class="icon">
                                        <i class="icon-users-1"></i>
                                    </div>
                                    <span class="text text-medium fw-5">Referrals</span>
                                </a>
                            </div>
                            <div class="list-box-icon mb-8">
                                <a href="{{ url('app/change-password') }}" class="box-icon v3">
                                    <div class="icon">
                                        <i class="icon-lock"></i>
                                    </div>
                                    <span class="text text-medium fw-5">Change<br>Password</span>
                                </a>
                                <a href="{{ url('app/viewphrase') }}" class="box-icon v3">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="#426671" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text-icon lucide-file-text">
                                            <path
                                                d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
                                            <path d="M14 2v5a1 1 0 0 0 1 1h5" />
                                            <path d="M10 9H8" />
                                            <path d="M16 13H8" />
                                            <path d="M16 17H8" />
                                        </svg>
                                    </div>
                                    <span class="text text-medium fw-5">View Wallet<br>Phrase</span>
                                </a>
                                <a href="{{ url('logout') }}" class="box-icon v3">
                                    <div class="icon">
                                        <i class="icon-logout"></i>
                                    </div>
                                    <span class="text text-medium fw-5">Log<br>Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @if (session('success'))
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="successToast" class="toast align-items-center border-0" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-delay="4000">
                <div class="toast-body d-flex align-items-center mb-0"
                    style="background-color: #d1e7dd; color: #0a3622; border-radius: 0.375rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-circle-fill me-2 flex-shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                    <div class="fs-6">{{ session('success') }}</div>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="errorToast" class="toast align-items-center border-0" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-delay="4000">
                <div class="toast-body d-flex align-items-start mb-0"
                    style="background-color: #f8d7da; color: #58151c; border-radius: 0.375rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-exclamation-circle-fill me-2 flex-shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    <div class="fs-6">{{ $errors->first() }}</div>
                </div>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                var successToast = new bootstrap.Toast(document.getElementById('successToast'));
                successToast.show();
            @endif
            @if ($errors->any())
                var errorToast = new bootstrap.Toast(document.getElementById('errorToast'));
                errorToast.show();
            @endif
        });
    </script>

    <div class="modal fade modalDown pop-up-more-services" id="qsl-setup" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="wg-more-services">
                    <div class="tf-container">
                        <div class="divider mb-24"></div>
                        <h5 class="title mb-24">Activate Qtumwallet Setup</h5>
                        <p class="mb-12"> Back up your wallet phrase to proceed</p>
                        <a href="/app/setup" class="tf-btn primary">Continue</a>
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
