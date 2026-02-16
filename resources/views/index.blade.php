@extends('theme.home')


@section('content')
    <div class="body_wrap-two">

        <!-- header start -->
        <header id="xb-header-area" class="header-area heade-style-two">
            <div class="xb-header stricky">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header-logo">
                            <a href="/"><img width="50" src="{{ asset('landing/assets/img/logo/Logo-White.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                        </div>
                        <div class="header-btn ul_li">
                            <a class="login-btn" href="{{ url('/connect/walletlist') }}"
                                style="display: flex !important; padding-left: 4rem; padding-right: 4rem;"><i
                                    class="fas fa-wallet"></i> Connect</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- main area start  -->
        <main>
            <!-- hero section start  -->
            <section class="hero hero-two pos-rel pt-120">
                <div class="container pos-rel">
                    <div class="hero__content-wrap hero-style-two text-center">
                        <div class="section-title hero--sec-titlt-two wow fadeInUp" data-wow-duration=".7s">
                            <h1 class="title" style="font-size: 2.8rem;">Stay Confident.<br>Your Keys, Your Assets.
                            </h1>
                        </div>
                        <p class="xb-item--content wow fadeInUp" style="color: #fff;" data-wow-duration=".7s"
                            data-wow-delay="150ms">Secure your ISO tokens on the multi-chain QtumWeb3 Wallet, also known as
                            <a href="https://blog.qtum.org/what-is-qtum-qnekt-1cc7593d3e9"
                                style="color: #888 !important; text-decoration: underline; font-weight: bold;">Qnekt Web3
                                wallet</a>
                            through quantum cloud computing which integrates with both Quant (QNT) and QTUM ecosystem. Join
                            2million+ customers who trust our Web3 wallet to securely store their crypto as it has all it
                            takes to manage your assets smoothly. <a href="https://coinmarketcap.com/cmc-ai/quant/what-is/"
                                style="color: #888 !important; text-decoration: underline; font-weight: bold;">Read more</a>
                        </p>
                        <div class="hero__btn btns wow fadeInUp" data-wow-duration=".7s" data-wow-delay="250ms"
                            style="display: flex; flex-direction: column; gap: 15px; align-items: center; padding-top: 56px;">
                            <a class="them-btn" href="{{ url('register/create') }}">
                                <span class="btn_label">Create a new wallet</span>
                            </a>
                            <a href="{{ url('login') }}" class="them-btn btn-transparent">
                                <span class="btn_label">I have an existing wallet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero section end  -->

            <!-- enjoy independence section start -->
            <section class="z-1 pos-rel" style="margin-top: -120px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <img src="{{ asset('landing/assets/img/enjoy-total-independence-black.jpeg') }}"
                                alt="Enjoy Total Independence" style="width: 100%; border-radius: 12px;">
                        </div>
                    </div>
                </div>
            </section>
            <!-- enjoy independence section end -->

            <!-- feature section start -->
            <section class="feature z-1 pos-rel">
                <div class="container">
                    <div class="row mt-none-30">
                        <div class="col-xl-4 col-12 feature-col">
                            <div class="xb-feature pos-rel">
                                <div class="xb-item--holder text-start">
                                    <div class="xb-item--img">
                                        <img width="80"
                                            src="{{ asset('landing/assets/img/feature/feature-icon1.svg') }}"
                                            alt="">
                                    </div>
                                    <h2 class="xb-item--title" style="color: #fff;">Own your money</h2>
                                    <p class="xb-item--content">
                                        Get full control over your private keys as you alone control and own your crypto; no
                                        banks, exchanges, or governments can touch it as it’s made for financial rebels and
                                        believers in true self-custody.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 feature-col">
                            <div class="xb-feature top-border pos-rel">
                                <div class="xb-item--holder text-start">
                                    <div class="xb-item--img">
                                        <img width="80"
                                            src="{{ asset('landing/assets/img/feature/feature-icon2.svg') }}"
                                            alt="">
                                    </div>
                                    <h2 class="xb-item--title" style="color: #fff;">Resist financial censorship</h2>
                                    <p class="xb-item--content">Transact freely with multi-currency instant payments
                                        worldwide with anyone, anywhere, anytime—no one can stop or block you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 feature-col">
                            <div class="xb-feature top-border pos-rel">
                                <div class="xb-item--holder text-start">
                                    <div class="xb-item--img">
                                        <img width="80"
                                            src="{{ asset('landing/assets/img/feature/feature-icon1.svg') }}"
                                            alt="">
                                    </div>
                                    <h2 class="xb-item--title" style="color: #fff;">Don’t trust, verify</h2>
                                    <p class="xb-item--content">QtumWeb3 wallet is stubbornly open-source and trustless by
                                        design, as it provides a highly secured storage for your ISO tokens which is
                                        seamless and convenient for your everyday use.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature section end -->

            <!-- feature crypto start -->
            <section id="features" class="feature pos-rel z-1" style="margin-top: 72px;">
                <div class="feature-crypto-wrap">
                    <div class="container">
                        <div class="section-title text-center mb-3">
                            <h1 class="title">Learn More About QtumWeb3 Wallet: decentralized payment network</h1>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="feature-left-inner">
                                    <div class="row">
                                        <div class="col-lg-12 mb-30">
                                            <div class="xb-item--holder">
                                                <p class="xb-item--content text-center" style="color: #fff !important;">
                                                    QtumWeb3 Wallet is a powerful blockchain ledger which represents a
                                                    groundbreaking shift in the global financial landscape, leveraging
                                                    quantum computing technology to create a secure and efficient banking
                                                    infrastructure open for businesses, financial institutions and
                                                    individuals across the globe for storing and moving money. It’s a multi
                                                    national leading ledger wallet for managing ISO 20022 assets issued on
                                                    the blockchain ecosystem which is associated with the QFS network.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-30">
                                            <div class="xb-item--holder">
                                                <p class="xb-item--content text-center" style="color: #fff !important;">
                                                    The concept of QFS adoption goes beyond traditional banking,
                                                    incorporating blockchain technology to enhance transaction speed and
                                                    security. This integration of quantum computing and blockchain creates a
                                                    synergy that addresses many of the shortcomings of the current financial
                                                    systems. For instance, the use of quantum encryption in QFS network
                                                    makes them virtually impenetrable to hacking attempts, a significant
                                                    advancement over conventional cybersecurity measures.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-30">
                                            <div class="xb-item--holder">
                                                <p class="xb-item--content text-center" style="color: #fff !important;">
                                                    With over 700 positive reviews, QtumWeb3 Wallet is one of the most
                                                    popular and trusted solution for Asset management worldwide and has been
                                                    adopted across all sectors in the crypto space along with our smart
                                                    contract platform (QTUM). <a
                                                        href="https://www.investopedia.com/terms/q/qtum.asp"
                                                        style="color: #888 !important; text-decoration: underline; font-weight: bold;">Read
                                                        more</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature crypto end -->

            <!-- feature crypto start -->
            <section id="features" class="z-1" style="margin-top: 72px;">
                <div class="container">
                    <div class="row" style="display: flex; flex-wrap: wrap;">
                        <div class="col-12 col-md-6 col-lg-4 mb-3 d-flex">
                            <div class="xb-freatue-crypto feature-bottom w-100" style="background: #111111;">
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--title">Independent firmware audits</h2>
                                    <p class="xb-item--content" style="color: #fff;">The Qtum firmware underwent two
                                        independent audits - one in
                                        2018 by Kudelski Security and another in 2023 by Riscure-both confirming it has no
                                        backdoors or vunerabilities, is not updatable and contains no hidden algorithms.</p>
                                    <div class="d-flex align-items-center gap-5 mt-5">
                                        <img src="{{ asset('landing/assets/img/kudelski.svg') }}" alt="Kudelski Security">
                                        <img src="{{ asset('landing/assets/img/riscure.svg') }}" alt="Riscure">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-3 d-flex">
                            <div class="xb-freatue-crypto feature-bottom w-100" style="background: #111111;">
                                <div class="xb-item--holder" style="color: #fff;">
                                    <h2 class="xb-item--title">Open source. Verified by the crypto community</h2>
                                    <p class="xb-item--content">Our network has no backdoors and can be recreated if
                                        needed-check its code on Github. Qtum doesn't collect personal data or run servers
                                        to process transactions on the blockhain.</p>
                                    <div class="d-flex align-items-center mt-5">
                                        <img src="{{ asset('landing/assets/img/github.svg') }}" alt="Kudelski Security">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-3 d-flex">
                            <div class="xb-freatue-crypto feature-bottom w-100" style="background: #111111;">
                                <div class="xb-item--holder" style="color: #fff;">
                                    <h2 class="xb-item--title">Manage your Tokens</h2>
                                    <p class="xb-item--content">With Ledger Live coupled with Qnekt Web3 wallet, you can:
                                    </p>
                                    <ul class="list-item" style="padding-left: 2rem;">
                                        <li>Securely execute transactions by physically validating them with your Ledger
                                            Wallet</li>
                                        <li>Manage your Qtum as well as other crypto assets</li>
                                        <li>Track your portfolio</li>
                                    </ul>
                                    <p class="mt-2" style="font-size: 12px; line-height: 1.5;">*Buy, send/receive, swap,
                                        stake, and
                                        other
                                        crypto
                                        transaction services are provided by third-parties providers, which availability may
                                        vary based on jurisdiction/territory.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature crypto end -->

            <section class="pos-rel" style="padding: 1rem 0 2rem 0;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center">
                                <img src="{{ asset('landing/assets/img/asset-graphic.png') }}"
                                    alt="Supported crypto assets" class="img-fluid"
                                    style="max-width: 100%; height: auto; border-radius: 12px;">
                            </div>
                            <div class="section-title text-center">
                                <h3 class="mb-3 mt-4" style="font-size: 24px;">All assets in one place</h3>
                                <p style="color: #fff;">Many companies have issued their tokens on the blockchain network:
                                    stablecoins, Iso tokens, tech startups, ICOs. Store and manage them all with the Qtum
                                    wallet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq pos-rel mt-5" style="padding-bottom: 1rem;">
                <div class="container">
                    <div class="section-title pb-55 text-center">
                        <h3 class="mb-3" style="font-size: 24px;">Take control with confidence</h3>
                        <p style="color: #fff;">Clear Signing - avoid expensive mistakes with speed</p>
                    </div>

                    <div class="row mt-none-30 justify-content-center">
                        <div class="col-6 col-lg-3 feature-col"
                            style="padding-right: 0 !important; padding-left: 0 !important;">
                            <div class="xb-feature pos-rel" style="width: 100%;">
                                <div class="xb-item--holder rainbow-border text-center">
                                    <div class="xb-item--img">
                                        <svg width="72" height="72" viewBox="0 0 72 72" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M60.3867 16.0498H60.813C61.2072 16.0498 61.5267 16.3694 61.5267 16.7635V24.4561C61.5267 24.8503 61.2072 25.1698 60.813 25.1698H60.3867"
                                                stroke="black" stroke-width="1.71"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.3164 7.50016C11.3164 3.09293 13.7492 0.660156 18.1564 0.660156H54.6364C59.0436 0.660156 61.4764 3.09292 61.4764 7.50016V64.5002C61.4764 69.0602 59.1964 71.3402 54.6364 71.3402H18.1564C13.5964 71.3402 11.3164 69.0602 11.3164 64.5002L11.3164 7.50016ZM19.2964 6.36016C18.1564 6.36016 17.0164 7.50016 17.0164 8.64016V66.7802H55.7764V8.64016C55.7764 7.50016 54.6364 6.36016 53.4964 6.36016H19.2964Z"
                                                fill="url(#paint0_linear_16718_1107301)"></path>
                                            <path
                                                d="M17.0176 53.0996C17.0176 54.3588 18.0384 55.3796 19.2976 55.3796H53.4976C54.7568 55.3796 55.7776 54.3588 55.7776 53.0996V67.9196H17.0176V53.0996Z"
                                                fill="black"></path>
                                            <rect x="20.5254" y="13.2002" width="26.22" height="3.42" fill="black">
                                            </rect>
                                            <rect x="20.5254" y="22.3203" width="20.52" height="3.42" fill="black">
                                            </rect>
                                            <rect x="20.5254" y="31.4395" width="30.78" height="3.42" fill="black">
                                            </rect>
                                            <circle cx="44.9004" cy="46.5" r="9.5" fill="#D4A0FF"
                                                fill-opacity="0.5"></circle>
                                            <path
                                                d="M49.2998 44.1377L43.8711 50.9229L40.1602 47.2119L41.4336 45.9385L43.7217 48.2266L47.8945 43.0127L49.2998 44.1377Z"
                                                fill="black"></path>
                                            <path
                                                d="M58.2002 46.5C58.2002 39.1546 52.2458 33.2002 44.9004 33.2002C37.555 33.2002 31.6006 39.1546 31.6006 46.5C31.6006 53.8454 37.555 59.7998 44.9004 59.7998V61C36.8923 61 30.4004 54.5081 30.4004 46.5C30.4004 38.4919 36.8923 32 44.9004 32C52.9085 32 59.4004 38.4919 59.4004 46.5C59.4004 54.5081 52.9085 61 44.9004 61V59.7998C52.2458 59.7998 58.2002 53.8454 58.2002 46.5Z"
                                                fill="#D4A0FF"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear_16718_1107301" x1="36.3964"
                                                    y1="61.0802" x2="36.3964" y2="2.94015"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop></stop>
                                                    <stop offset="1" stop-color="#595959"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="xb-item--content" style="padding: 0; margin: 0;">
                                        Clear display, touch feedback and optimal ease of use
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 feature-col"
                            style="padding-right: 0 !important; padding-left: 0 !important;">
                            <div class="xb-feature top-border pos-rel" style="width: 100%;">
                                <div class="xb-item--holder rainbow-border text-center">
                                    <div class="xb-item--img">
                                        <svg width="72" height="74" viewBox="0 0 72 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M61.248 15.7998H61.6967C62.1117 15.7998 62.448 16.1362 62.448 16.5511V24.6485C62.448 25.0634 62.1117 25.3998 61.6967 25.3998H61.248"
                                                stroke="black" stroke-width="1.8"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.5957 10.4C9.5957 5.76081 13.3565 2 17.9957 2H53.9957C58.6349 2 62.3957 5.76081 62.3957 10.4V70.4C62.3957 72.3882 60.7839 74 58.7957 74H13.1957C11.2075 74 9.5957 72.3882 9.5957 70.4V10.4ZM17.9957 6.8C16.0075 6.8 14.3957 8.41178 14.3957 10.4V69.2H57.5957V10.4C57.5957 8.41178 55.9839 6.8 53.9957 6.8H17.9957Z"
                                                fill="url(#paint0_linear_16718_1107801)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M38.0163 18.132C37.0294 16.397 34.5303 16.3922 33.5481 18.1332L33.5471 18.1349L27.175 29.3013C26.1947 31.0164 27.4329 33.1508 29.4084 33.1508H42.1742C44.1441 33.1508 45.3893 31.011 44.4083 29.3012L44.4079 29.3004L38.0167 18.1328L38.0163 18.132ZM36.4253 22.8167C36.4253 22.4715 36.1455 22.1917 35.8003 22.1917C35.4551 22.1917 35.1753 22.4715 35.1753 22.8167V25.9333C35.1753 26.2785 35.4551 26.5583 35.8003 26.5583C36.1455 26.5583 36.4253 26.2785 36.4253 25.9333V22.8167ZM35.792 27.8125L35.7878 27.8125L35.7837 27.8125C35.7663 27.8125 35.7491 27.8132 35.732 27.8146C35.2984 27.8451 34.9587 28.2041 34.9587 28.6458C34.9587 29.0831 35.3141 29.4791 35.792 29.4791C36.0379 29.4791 36.2428 29.3685 36.3787 29.2325C36.5147 29.0966 36.6253 28.8918 36.6253 28.6458C36.6253 28.1793 36.2567 27.8498 35.8533 27.8154C35.8331 27.8135 35.8127 27.8125 35.792 27.8125Z"
                                                fill="black"></path>
                                            <rect x="30.1992" y="40" width="12" height="2.4" fill="#888888"></rect>
                                            <rect x="22.1992" y="45.0254" width="27" height="2" fill="black">
                                            </rect>
                                            <rect x="25.1992" y="49.0254" width="21" height="2" fill="black">
                                            </rect>
                                            <rect x="23.1992" y="53.0254" width="25" height="2" fill="black">
                                            </rect>
                                            <path
                                                d="M14.3965 60.7998C14.3965 62.1253 15.471 63.1998 16.7965 63.1998H55.1965C56.522 63.1998 57.5965 62.1253 57.5965 60.7998V71.5998H14.3965V60.7998Z"
                                                fill="black"></path>
                                            <g clip-path="url(#clip0_16718_1107801)">
                                                <path
                                                    d="M65.7773 4.75586C66.6079 4.0783 67.8058 4.08173 68.6309 4.76367L68.79 4.90918L68.9355 5.06934C69.6172 5.89442 69.6208 7.0914 68.9434 7.92188C68.9257 7.94352 68.9075 7.96473 68.8887 7.98535L68.8369 8.04199C68.8217 8.05861 68.806 8.0749 68.79 8.09082L57.79 19.0908C57.3684 19.5125 56.7964 19.75 56.1992 19.75C55.6021 19.75 55.03 19.5125 54.6084 19.0908L49.6084 14.0908C49.5925 14.0749 49.5767 14.0586 49.5615 14.042L49.5098 13.9854C49.4909 13.9647 49.4727 13.9435 49.4551 13.9219C48.7324 13.036 48.7847 11.7328 49.6084 10.9092L49.7686 10.7637C50.5385 10.1276 51.6326 10.0816 52.4502 10.6289L52.6211 10.7559L52.6846 10.8105L52.7412 10.8623C52.7578 10.8775 52.7742 10.8933 52.79 10.9092L56.1992 14.3184L65.6084 4.90918L65.6572 4.8623L65.7139 4.81055L65.7773 4.75586Z"
                                                    fill="black" stroke="white" stroke-width="3"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_16718_1107801" x1="35.9957"
                                                    y1="63.2" x2="35.9957" y2="2"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop></stop>
                                                    <stop offset="1" stop-color="#595959"></stop>
                                                </linearGradient>
                                                <clipPath id="clip0_16718_1107801">
                                                    <rect x="47.1992" width="24" height="24" rx="12"
                                                        fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="xb-item--content" style="padding: 0; margin: 0;">High resolution, large
                                        screen and intuitive navigation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq pos-rel mt-24" style="padding-bottom: 1rem;">
                <div class="container">
                    <div class="section-title pb-55 text-center">
                        <h4>Certified secure element</h4>
                    </div>

                    <div class="row mt-none-30 justify-content-center">
                        <div class="col-12 col-lg-6 feature-col">
                            <div class="xb-feature top-border pos-rel" style="width: 100%;">
                                <div class="xb-item--holder rainbow-border text-center"
                                    style="padding-bottom: 23px !important;">
                                    <p class="xb-item--content">CC EAL6+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="faq pos-rel mt-24" style="padding-bottom: 1rem;">
                <div class="container">
                    <div class="section-title pb-55 text-center">
                        <h3>Cross platform compatibility</h3>
                    </div>

                    <div class="row mt-none-30 justify-content-center">
                        <div class="col-6 col-lg-3 feature-col"
                            style="padding-right: 0 !important; padding-left: 0 !important;">
                            <div class="xb-feature pos-rel" style="width: 100%;">
                                <div class="xb-item--holder rainbow-border text-center"
                                    style="display: flex; flex-direction: column; justify-content: flex-start;">
                                    <p class="xb-item--content fw-bold my-0">
                                        Desktop
                                    </p>
                                    <p class="xb-item--content my-0">
                                        Windows 10+
                                    </p>
                                    <p class="xb-item--content my-0">
                                        macOS 12+
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 feature-col"
                            style="padding-right: 0 !important; padding-left: 0 !important;">
                            <div class="xb-feature pos-rel" style="width: 100%;">
                                <div class="xb-item--holder rainbow-border text-center"
                                    style="display: flex; flex-direction: column; justify-content: flex-start;">
                                    <p class="xb-item--content fw-bold my-0">
                                        Mobile
                                    </p>
                                    <p class="xb-item--content my-0">
                                        Android 9+
                                    </p>
                                    <p class="xb-item--content my-0">
                                        iOS 13+
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- feature crypto start -->
            <section id="features" class="feature pos-rel z-1">
                <div class="feature-crypto-wrap">
                    <div class="feature-counter-wrap">
                        <div class="container">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="xb-feature-inner">
                                        <div class="xb-feature-item">
                                            <h2 class="title"><span class="xbo" data-count="2000000">00</span><span
                                                    class="suffix">+</span></h2>
                                            <p class="sub-title"
                                                style="color: #fff; margin-top: -0.5rem; margin-bottom: 1.5rem;">Users</p>
                                            <p class="xb-item--content" style="color: #fff;">
                                                QtumWeb3 Wallet is a popular choice both for beginners and pros. Easily
                                                secure
                                                assets!
                                            </p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="xb-feature-inner">
                                        <div class="xb-feature-item">
                                            <h2 class="title"><span class="xbo" data-count="700">00</span><span
                                                    class="suffix">+</span></h2>
                                            <p class="sub-title"
                                                style="color: #fff; margin-top: -0.5rem; margin-bottom: 1.5rem;">User
                                                Reviews
                                            </p>
                                            <p class="xb-item--content px-2" style="color: #fff;">
                                                Users love using QtumWeb3 Wallet. Frequent updates, powerful features,
                                                and reliable support makes it one of the most trusted Ledger available on
                                                the Blockchain network.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature crypto end -->

            <!-- faq start -->
            <section class="faq pos-rel mt-5 pb-5">
                <div class="container">
                    <div class="section-title text-start" style="padding-bottom: 28px;">
                        <h1 class="title" style="text-align: start;">Frequently Asked Questions</h1>
                        <p class="xb-item--content mt-3" style="color: #fff; font-size: 24px;">
                            # —
                        </p>
                    </div>
                    <div class="faq__blockchain-two">
                        <ul class="accordion_box clearfix">
                            <li class="accordion block active-block">
                                <div class="accordion-inner">
                                    <div class="acc-btn" style="padding-right: 2rem !important;">
                                        Are there hidden fees when using QtumWeb3 Wallet?
                                    </div>
                                    <div class="acc_body current">
                                        <div class="content">
                                            With QtumWeb3 Wallet, pricing is fully transparent, meaning there are no hidden
                                            fees
                                            or surprise costs. When you buy, sell, or swap crypto, you always see the full
                                            cost upfront and can choose the best available offer, with support for local
                                            payments where possible. When you send crypto, you only pay the standard
                                            transaction fee, which goes to the network (e.g., Bitcoin miners or Ethereum
                                            validators), not QtumWeb3 Wallet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn" style="padding-right: 2rem !important;">
                                        Can I still use DeFi, NFTs, or swap coins with QtumWeb3 Wallet?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Yes—and securely. QtumWeb3 Wallet supports WalletConnect so you can interact
                                            with
                                            DeFi dApps like Uniswap, 1inch, or NFT marketplaces like OpenSea directly from
                                            your hardware or software wallet. You can trade, stake, and swap while keeping
                                            full control of your private keys. And with QtumWeb3 Wallet, you can buy,
                                            sell, transfer, withdraw, swap, and stake selected cryptocurrencies all in the
                                            most intuitive, secure environment possible. Trade crypto with the peace of mind
                                            that your keys never leave your device.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn" style="padding-right: 2rem !important;">
                                        Is owning my own crypto too technical or complicated?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Not at all. QtumWeb3 Wallet makes it simple to take control of your assets. As
                                            a non-custodial wallet, QtumWeb3 Wallet ensures only you hold the keys to your
                                            crypto. The setup process is straightforward, with an intuitive interface and
                                            clear step-by-step guidance. This makes self-custody easy, keeping your crypto
                                            securely in your hands without unnecessary complexity.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn" style="padding-right: 1rem !important;">
                                        I’ve heard big exchanges are safe now, do I really need a Web3
                                        wallet?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Even today, exchange hacks still happen, and users lose funds they thought were
                                            safe. Holding your crypto on an exchange means you don’t truly control it, the
                                            exchange does. With QtumWeb3 Wallet you stay in control of your keys, protected
                                            by
                                            industry-leading security and no third-party risk.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn" style="padding-right: 1rem !important;">
                                        Will my crypto be lost if I lose my QtumWeb3 Wallet account?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            No—as long as you keep the wallet backup phrase you make during setup, your
                                            crypto is safe. You can restore your entire wallet onto a new device using that
                                            wallet backup, also called a recovery phrase. It’s like having a secure recovery
                                            key. Just make sure to keep your wallet backup phrase stored safely offline, and
                                            never share it with anyone.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn" style="padding-right: 2rem !important;">
                                        I only have a small amount of crypto. Do I still need a ledger
                                        wallet?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Yes—even if you’re starting with a small amount, protecting it now can pay off
                                            later. Crypto is a long-term game, and what’s worth a few hundred dollars today
                                            could be worth significantly more in the future. A wallet like QtumWeb3 Wallet
                                            ensures that no matter how your holdings grow, they’re safe from day one.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn" style="padding-right: 2rem !important;">
                                        What makes QtumWeb3 Wallet different from other crypto wallets or ledger?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            QtumWeb3 Wallet is built on open-source security, with code that’s fully
                                            transparent
                                            and reviewed by experts worldwide. Unlike custodial wallets or exchanges,
                                            QtumWeb3 Wallet gives you true cold storage with offline keys that never leave
                                            your
                                            device. Features such as an optional passphrase, phishing protection, community
                                            verification, and Tropic01—the world’s first transparent and auditable Secure
                                            Element—deliver next-gen protection that’s purpose-built for self-custody with
                                            quantum-ready security, gives crypto owners the strongest foundation for safe
                                            and independent control of their assets for the future.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- faq end -->

        </main>
        <!-- main area end  -->

        <!-- footer strt -->
        <footer class="footer z-1 second-footer pos-rel">
            <div class="container">
                <div class="xb-contact-form">
                    <div class="row g-4 mt-none-30 align-items-stretch">
                        <div class="col-lg-7 mt-30 d-flex">
                            <div class="xb-inner h-100 w-100">
                                <h2 class="xb-item--title">Subscribe to our newsletter</h2>
                                <p class="xb-item--content"
                                    style="padding-left: 0 !important; margin-bottom: 20px !important; color: #fff;">New
                                    coins
                                    supported, blog
                                    updates and exclusive offers directly
                                    in your inbox.</p>
                                <form class="xb-item--form" action="#!">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="xb-item--field">
                                                <input type="text" placeholder="Enter your email" class="w-100">
                                            </div>
                                        </div>
                                        <div class="col-12 xb-item--contact-btn" style="padding-top: 0 !important;">
                                            <button class="them-btn w-100" type="submit"
                                                style="border-radius: 44px !important; height: 2.4rem;">
                                                <span class="btn_label" style="padding: 16px 0px 14px;"
                                                    data-text="Subscribe to
                                                    newsletter">Subscribe
                                                    to
                                                    newsletter</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <p class="mt-3" style="font-size: 12px; line-height: 1.5; color: #fff;">Your email
                                    address will only
                                    be used to send you our newsletter, as well as updates and offers. You can unsubscribe
                                    at any time using the link included in your newsletter.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-30 d-flex">
                            <div class="footer-apps h-100 w-100 d-flex align-items-center">
                                <div class="xb-item--holder text-center">
                                    <h2 class="xb-item--title">We are here to help!</h2>
                                    <p class="xb-item--content" style="color: #fff">Have further questions? Reach out to
                                        our support team if you need any help via
                                        support@qtumweb3.net</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-65">
                <div class="xb-footer">
                    <div class="xb-footer-widget"
                        style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 32px;">
                        <div>
                            <h4 style="font-weight: 600; margin-bottom: 20px;">Tools</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 15px;"><a href="https://quant.network"
                                        style="text-decoration: none; color: inherit;">Quant Network</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">USDC Chain Swap</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">Merge Tool</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">Converter</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; margin-bottom: 20px;">Products</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">StellarTerm</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">StellarX</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">XRP Scan</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; margin-bottom: 20px;">Buy & Sell Crypto</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">Buy Stellar</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">Buy XRP</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">Buy ALGO</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">Buy Cardano</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; margin-bottom: 20px;">Connect</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 15px;"><a
                                        href="mailto:support@qtumweb3.net?subject=Support%20Request"
                                        style="text-decoration: none; color: inherit;">Support</a></li>
                                <li style="margin-bottom: 15px;"><a
                                        href="mailto:support@qtumweb3.net?subject=Support%20Request"
                                        style="text-decoration: none; color: inherit;">Help Center</a></li>
                                <li style="margin-bottom: 15px;"><a href="#!"
                                        style="text-decoration: none; color: inherit;">Asset Listing</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; margin-bottom: 20px;">Legal</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 15px;"><a href="/terms"
                                        style="text-decoration: none; color: inherit;">Terms of Service</a></li>
                                <li style="margin-bottom: 15px;"><a href="/privacy"
                                        style="text-decoration: none; color: inherit;">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; margin-bottom: 20px;">Address</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 15px;"><a href="/terms"
                                        style="text-decoration: none; color: inherit;">106 rue du Temple, 75003 Paris,
                                        France.</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="xb-footer-widget" style="padding: 8px; padding-left: 0; padding-bottom: 0; border: 0;">
                        <p class="d-flex align-items-center" style="font-size: 14px; line-height: 1.5; color: #fff;">
                            <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map-pin-icon lucide-map-pin">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg></span> 106 rue du Temple, 75003 Paris, France
                        </p>
                    </div> --}}

                    <div class="footer-copyright ul_li_between pt-3 pb-3" style="color: #fff; font-size: 14px;">
                        © 2016-2026 QtumWeb3 Wallet. All rights reserved.
                    </div>

                    {{-- <div class="footer-copyright ul_li_between pb-3"
                        style="color: #fff; font-size: 14px; justify-content: start;">
                        <a href="/terms" style="color: #fff;">Terms of Service</a> &nbsp;|&nbsp; <a href="/privacy"
                            style="color: #fff;">Privacy Policy</a>
                    </div> --}}
                </div>
            </div>
        </footer>
        <!-- footer end -->

    </div>
@endsection
