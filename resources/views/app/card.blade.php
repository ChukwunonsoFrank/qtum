@extends('theme.user')

@section('content')
    <div class="wrap">
        {{-- <div class="header-2 mb-12">
            <div class="tf-container">
                <div class="header-content">
                    <a href="{{ url('app/index') }}" class="tf-btn-arrow">
                        <i class="icon-arrow-narrow-left"></i>
                    </a>
                    <h6 class="title fw-5">
                        My Cards
                    </h6>
                    <a href="{{ url('app/index') }}" class="btn-right">
                    </a>
                </div>
            </div>
        </div> --}}
        <div class="header-2 mb-24 header-fix style-bg-1">
            <div class="tf-container">
                <div class="header-content">
                    <a href="{{ url('app/index') }}" class="tf-btn-arrow">
                        <i class="icon-arrow-narrow-left"></i>
                    </a>
                    <h5 class="title fw-5">
                        My Cards
                    </h5>
                    <a href="{{ url('app/index') }}" class="btn-right">
                    </a>
                </div>
            </div>
        </div>

        <div class="tf-container" style="margin-top: 8rem;">
            <div class="box-support mb-20" style="border-radius: 16px; background: #8ca0a6;">
                <h6 class="title fw-bold">
                    COMING SOON
                </h6>
            </div>
            <p class="text-center" style="color: #000000; font-size: 15px; line-height: 1.5; margin-top: 1rem;">
                Cards are currently unavailable at the moment, kindly check back later as we are working on that. In the
                meantime, you can always use our other cool features.
            </p>
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
                                <a href="{{ url('app/change-password') }}" class="box-icon v3">
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
@endsection
