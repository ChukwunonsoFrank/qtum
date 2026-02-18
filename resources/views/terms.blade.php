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
            <section class="text-center pt-5 mt-5 mb-5">
                <h1 class="title" style="font-size: 2.8rem;">Terms & Conditions</h1>
            </section>
            <!-- hero section end  -->

            <!-- terms content start -->
            <section class="z-1 pos-rel" style="padding-bottom: 80px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div style="background: #111111; border-radius: 12px; padding: 40px;">

                                <h2 class="xb-item--title" style="color: #fff; margin-bottom: 20px;">TERMS OF SERVICE</h2>

                                <p class="xb-item--content" style="color: #fff;">
                                    TERMS OF SERVICE
                                    Your use of the QtumWeb3 and its interface ("Qtum network, ledger"), wallet, mobile
                                    applications, and any other application, software, platforms, and other related services
                                    provided by ledger, LLC, its subsidiaries, and affiliates or any third party designated
                                    by us (collectively, with the website, platforms, network, the "Service(s)") is subject
                                    to the terms set out below, including but not limited to the Privacy Policy of
                                    QtumWeb3, which is hereby incorporated by reference (collectively, the "Terms").
                                </p>

                                <p class="xb-item--content" style="color: #fff;">
                                    These Terms and any of the documents referred to in the Terms create a legally binding
                                    agreement between the person, persons, or entity ("you" or "your") and QtumWeb3. By
                                    accessing this User Agreement or using the Services, or otherwise indicating your
                                    acceptance of these Terms, you affirm that: (i) You are an individual, at least 18 years
                                    of age or older, have the capacity to enter into this User Agreement and agree to be
                                    legally bound by the terms and conditions of this User Agreement and all of the Terms;
                                    (ii) You are a corporation, governmental organization or other legal entity, you have
                                    the right, power and authority to enter into this User Agreement on behalf of the
                                    corporation, governmental organization or other legal entity and bind them to these
                                    Terms. If you do not accept the Terms, you must not access or use the Services.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Changes of
                                    the terms</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    We reserve the right to revise, change or modify the Terms, at any time, for any reason,
                                    and at our sole discretion by updating this posting. Any other changes will take effect
                                    when posted on the QtumWeb3 platform, or when you use the Services.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    If you have provided us with your email, you may be notified of any changes or
                                    modifications through email.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    If you continue to use the Services after such change or modification, you will be
                                    deemed to have read, understood, and unconditionally agreed to such changes. If you have
                                    not read, understood, or unconditionally agreed to the changes or modifications, you
                                    must immediately cease usage of our Services and terminate your wallet.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    Please read the Terms carefully and visit this page periodically to review this User
                                    Agreement.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Privacy
                                    Policy</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    Please refer to our Privacy Policy for information about how we collect, use and share
                                    your information. The information and/or data collected will be used and stored in
                                    accordance with our Privacy Policy. QtumWeb3 may update the Privacy Policy from time
                                    to time. It is your responsibility to review the Privacy Policy.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">
                                    QtumWeb3 wallet terms</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    In order to access certain Services, you may be required to provide information about
                                    yourself as part of the registration process for the Services or as part of your
                                    continued use of the Services. You must provide a valid email address and password to
                                    create your wallet with us ("Portfolio"). You understand that you are responsible for
                                    maintaining the confidentiality of your password and other Wallet information,
                                    including, but not limited to, the security and privacy of any crypto asset keys. You
                                    agree that you will not permit access to your login credentials to any other party and
                                    will not hold QtumWeb3 responsible for any actions taken by individuals unauthorized
                                    to access your Wallet. Accordingly, You agree that you will be solely responsible to
                                    QtumWeb3 for all activity that occurs under your Wallet, and QtumWeb3 is not
                                    responsible for problems with your Wallet due to misuse or loss of your email address,
                                    cryptocurrency keys, and/or password.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    There are several requirements related to the creation, maintenance and termination of a
                                    Wallet:
                                </p>
                                <ul class="list-item" style="padding-left: 2rem; color: #fff;">
                                    <li>Wallet registered by "bots" or other automated methods are not permitted.</li>
                                    <li>QtumWeb3 may send important updates related to your Wallet to the email address
                                        provided during registration. You agree and acknowledge that QtumWeb3 shall not be
                                        responsible for any harm you may suffer as a result of your failure to receive any
                                        notice provided to you in connection with this User Agreement and your use of
                                        Services so long as such notice is provided to the email address associated with
                                        your Wallet.</li>
                                    <li>In order to open an Wallet, you must be age 18 or older. We do not knowingly permit
                                        any individual under 18 years of age to use our Services.</li>
                                    <li>You may delete your Wallet at any time, at your sole discretion. It is your
                                        responsibility to properly delete your Wallet. Deleting your wallet may not result
                                        in the erasing of complete information we hold about you. Some information may
                                        remain in encrypted backups. This information cannot be recovered once your wallet
                                        is deleted. </li>
                                    <li>After termination of your Wallet, you still remain liable for all transactions made
                                        while the Wallet was active.</li>
                                    <li>You agree and understand that QtumWeb3 reserves the right, in our sole discretion,
                                        to immediately suspend, freeze, or terminate your Wallet in the event that you are
                                        suspected of having violated any provision of this User Agreement, believed to be in
                                        violation of Applicable Law, or are believed to be involved in activities or conduct
                                        detrimental to QtumWeb3.
                                    </li>
                                </ul>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">User
                                    representations and warranties</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    By using our Services and QtumWeb3 software, in particular, you represent and warrant
                                    that you acknowledge, understand, and accept the risk of the following:
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    QtumWeb3 is provided to you by QtumWeb3, an independent commercial entity
                                    unaffiliated with the Stellar and Ripple Development Foundation. QtumWeb3 is only a
                                    user interface to Qtum/Quant/Stellar/Ripple and does not operate the Qtum/Stellar/Ripple
                                    Network. QtumWeb3 is not an exchange. QtumWeb3 is unable to control the actions of
                                    others on the Stellar/Ripple network. When using QtumWeb3, you are directly
                                    communicating with the Qtum network, Horizon Stellar/Ripple API and the Stellar/Ripple
                                    network operated by a decentralized network of several trusted organizations running
                                    validators.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    Upon the creation of your Wallet or upon further usage, QtumWeb3 may change the
                                    "home_domain" and "inflation_destination" of your wallet, unless your wallet
                                    participates in the paying inflation pool.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You are solely responsible for storing, outside of the Services, a backup of your
                                    Wallet, secret key or transaction information that you maintain in your QtumWeb3 or
                                    otherwise with the Services. If you do not maintain a backup of your wallet secret key
                                    outside of the Services, you may not be able to access any supported crypto asset
                                    previously accessed using your QtumWeb3 in the event that we discontinue or no longer
                                    offer some or all of the Services or may otherwise lose access to supported crypto
                                    asset. We are not responsible for maintaining this data on your behalf. Transaction and
                                    Qtum/Stellar/Ripple wallet data can be viewed as a piece of public information on the
                                    Qtum/Stellar/Ripple Network and can be found using blockchain explorers.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    QtumWeb3 is not a custodian of your Stellar Lumen or any other crypto assets issued on
                                    the Network. We do not have access to your tokens, crypto assets, secret keys or Wallet
                                    passwords. Under no circumstances should you attempt to store an asset no matter whether
                                    it would be considered a currency, commodity, security, utility token, or another type
                                    of asset in your QtumWeb3 that Ledger /Network does not support.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    In order to be completed, any Virtual Currency transaction created with the Wallet must
                                    be confirmed and recorded in the cryptocurrency ledger associated with the Qtum Network.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    QtumWeb3 has no control over Stellar/Ripple Network and therefore cannot and does not
                                    ensure that any transaction details you submit via our Services will be confirmed on the
                                    Stellar/Ripple Network. You agree and understand that the transaction details you submit
                                    via our Services may not be completed, or may be substantially delayed by the Network
                                    used to process the transaction.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    Once transaction details have been submitted to the Network, we cannot assist you to
                                    cancel or otherwise modify your transaction or transaction details. QtumWeb3.net has
                                    no control over the Stellar/Ripple Network and does not have the ability to facilitate
                                    any cancellation or modification requests. All transaction requests on the
                                    Stellar/Ripple Network are irreversible.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    QtumWeb3 does not currently charge a fee for QtumWeb3, receiving, sending or
                                    controlling QTUM or any other supported crypto asset issued in the Network. However, we
                                    reserve the right to do so in the future, and in such case, any applicable fees will be
                                    displayed prior to you incurring the fee. Network fees required to make transactions on
                                    the Network may apply to a transaction. We may attempt to calculate such a fee for you.
                                    Our calculation may not be sufficient, or it may be excessive. You are solely
                                    responsible for paying any such fee and QtumWeb3 will neither advance nor fund such a
                                    fee on your behalf, nor be responsible for any excess or insufficient fee calculation.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You must assume all risk of: (i) guarding and storing your crypto assets, tokens and
                                    secret keys, (ii) auditing the quality, security, value, and merit of the assets that
                                    you transact, (iii) auditing the legality and legal compliance of your transactions of
                                    all assets with any counterparties, (iv) auditing counterparties with whom you create a
                                    trust line, and (v) using the Services to perform any operation or transaction.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">No
                                    endorsements</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    Asset listings on QtumWeb3 are not endorsements. QtumWeb3 is a Web3 Wallet software
                                    client ONLY and does NOT conduct any independent diligence or review of any asset issued
                                    on other Network.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    Qtum/Stellar/Ripple is an open system meaning that scams and market manipulators may
                                    exist. Prices shown on QtumWeb3 or through the Services are for informational purposes
                                    and do not imply that they can actually be redeemed for a certain price.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    QtumWeb3 has no control over the development, operation, management, marketing, or any
                                    other activity of any of the assets that are displayed on QtumWeb3 platform or
                                    otherwise made available through the Service and QtumWeb3. Any information displayed
                                    on QtumWeb3 platform or otherwise made available through the Service, regarding an
                                    asset is community-sourced and may be incomplete or inaccurate.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">
                                    Cryptocurrency risk factors</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    Cryptocurrency assets are subject to high market risks and volatility.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    By accessing this User Agreement or using the Services, you agree and understand that
                                    there are risks associated with utilizing Services involving Virtual Currencies
                                    including, but not limited to, the risk of failure of hardware, software and internet
                                    connections, the risk of failure to achieve a certain market value/price for any
                                    croptoasset issued on the Network, the risk of malicious software introduction, and the
                                    risk that third parties may obtain unauthorized access to information stored within your
                                    QtumWeb3, including, but not limited to your public and secret keys.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You agree and understand that QtumWeb3 will not be responsible for any communication
                                    failures, disruptions, errors, distortions or delays you may experience when using the
                                    Services.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You accept and acknowledge that there are risks associated with utilizing any virtual
                                    currency network, including, but not limited to, the risk of unknown vulnerabilities in
                                    or unanticipated changes to the network protocol. You acknowledge and accept that
                                    QtumWeb3 has no control over the Stellar/Ripple Network and will not be responsible
                                    for any harm occurring as a result of such risks, including, but not limited to, the
                                    inability to reverse a transaction, and any losses in connection therewith due to
                                    erroneous or fraudulent actions.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    Risk of loss in using Services involving QTUM and crypto assets may be substantial and
                                    losses may occur over a short period of time. Price and liquidity of QTUM and other
                                    cryptoassets issued of the Stellar/Ripple Network are subject to significant
                                    fluctuations, past performance is not indicative of future results and you are solely
                                    responsible for your actions on the network. You must do your own research and use
                                    caution before engaging in crypro asset trading.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You accept and acknowledge that QtumWeb3 is not responsible for your investment
                                    losses.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Acceptable
                                    use</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    When accessing or using the Services, you agree that you are solely responsible for your
                                    conduct while accessing and using our Services. Without limiting the generality of the
                                    foregoing, you agree that you will not:
                                </p>
                                <ul class="list-item" style="padding-left: 2rem; color: #fff;">
                                    <li>Use the Services in any manner that could interfere with, disrupt, negatively affect
                                        or inhibit other users from fully enjoying the Services, or that could damage,
                                        disable, overburden or impair the functioning of our Services in any manner;</li>
                                    <li>Use the Services to pay for, support or otherwise engage in any illegal activities,
                                        including, but not limited to illegal gambling, fraud, money laundering, or
                                        terrorist activities;</li>
                                    <li>Use any robot, spider, crawler, scraper or other automated means or interface not
                                        provided by us to access our Services or to extract data;</li>
                                    <li>Use or attempt to use another user’s Wallet or credentials without authorization;
                                    </li>
                                    <li>Attempt to circumvent any content filtering techniques we employ or attempt to
                                        access any service or area of our Services that you are not authorized to access;
                                    </li>
                                    <li>Introduce to the Services any virus, Trojan, worms, logic bombs or other harmful
                                        material;</li>
                                    <li>Develop any third-party applications that interact with our Services without our
                                        prior written consent;</li>
                                    <li>Provide false, inaccurate, or misleading information; or</li>
                                    <li>Encourage or induce any other person to engage in any of the activities prohibited
                                        under this Section.</li>
                                </ul>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">
                                    Intellectual Property and content</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    Unless otherwise indicated by us, all intellectual property rights and any content
                                    provided in
                                    connection with our Services, are the property of QtumWeb3 or our licensors or
                                    suppliers and
                                    are protected by applicable intellectual property laws. We do not give any implied
                                    license for the use
                                    of the contents of the Services.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You accept and acknowledge that the material and content contained through our Services
                                    are made
                                    available for your personal, lawful, non-commercial use only and that you may only use
                                    such material and
                                    content for the purpose of using the Services.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You further acknowledge that any other use of content from the Services is strictly
                                    prohibited and you
                                    agree not to infringe or enable others to infringe our intellectual property rights. You
                                    agree to retain
                                    all copyrighted and other proprietary notices contained in the material provided via our
                                    Services on any
                                    copy you make of the material but failing to do so shall not prejudice
                                    QtumWeb3 intellectual
                                    property rights therein.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You may not sell or modify materials derived or created from our Services or reproduce,
                                    display,
                                    publicly perform, distribute or otherwise use the materials in any way for any public or
                                    commercial
                                    purpose. Your use of the materials on any other website or on a file-sharing or similar
                                    service for any
                                    purpose is strictly prohibited. You may not copy any material or content derived or
                                    created from our
                                    Services without our express, written permission.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    Any rights not expressly granted herein to use the materials contained on or through our
                                    Services are
                                    reserved by QtumWeb3 in full.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">
                                    Third-party products and services</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    In using the Services, you may view content or services provided by third parties,
                                    including links to
                                    web pages and services of such parties ("Third Party Services"). These Third Party
                                    Services are provided
                                    solely as a convenience to you. We do not control, endorse or adopt any Third Party
                                    Services and have no
                                    responsibility for Third Party Services. Your use of such Third Party Services is
                                    governed by that
                                    party's terms and conditions or privacy policies.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    It is your responsibility to read the terms and conditions and privacy policy of any
                                    Third Party
                                    Services that you visit or use. You agree and understand that we are not responsible or
                                    liable for any
                                    loss or damage of any sort incurred as a result of any such dealings and your use of
                                    Third Party
                                    Services is at your own risk.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Accuracy
                                    of information</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    We will use reasonable efforts to verify the accuracy of any information displayed,
                                    supplied, passing
                                    through or originating from the Services, but such information may not always be
                                    accurate or current.
                                    Accordingly, you should independently verify all information before relying on it, and
                                    any decisions or
                                    actions taken based upon such information are your sole responsibility.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You agree and understand that we make no representation or warranty of any kind, express
                                    or implied,
                                    statutory or otherwise, regarding the contents of the Services, information and
                                    functions made
                                    accessible through the Services, any hyperlinks to third-party websites, or the security
                                    associated with
                                    the transmission of information through the Services, or any website linked to the
                                    Services.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Law
                                    compliance responsibility</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    You are solely responsible for ensuring your own compliance with laws and taxes in your
                                    jurisdiction.
                                    Cryptocurrencies may be illegal in your area. By entering into this User Agreement, you
                                    agree to act in
                                    compliance with and be legally bound to any and all Applicable Law. QtumWeb3
                                    will have no
                                    obligation to monitor your compliance with any Law.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Disclaimer
                                    of warranties</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    Your use of the Services is at your sole risk. QtumWeb3 provides the Services "as is"
                                    and "as available", without warranty of any kind. We expressly disclaim, and you waive,
                                    all warranties of any kind, whether express, implied, or statutory, regarding the
                                    Services, QtumWeb3 or any QTUM/XLM/XRP granted to you by us including, without
                                    limitation, any warranties of merchantability, fitness for a particular purpose, title,
                                    security, accuracy, and non-infringement.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    You acknowledge that the information you store or transfer through our Services may
                                    become irretrievably
                                    lost or corrupted or temporarily unavailable due to a variety of causes, including
                                    software failures,
                                    protocol changes by third-party providers, internet outages, force majeure event or
                                    other disasters
                                    including third-party DDoS attacks, scheduled or unscheduled maintenance, or other
                                    causes either within
                                    or outside our control. You assume full responsibility and risk of loss resulting from
                                    your use of the
                                    Services or any software, information, content, or other material obtained from the
                                    Services. You assume
                                    full responsibility and risk of loss resulting from transactions and trades made using
                                    the Services. You
                                    assume full responsibility and risk of storing, retrieving, and using your cryptoasset
                                    secret keys on
                                    the Services in a secure manner.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Limitation
                                    of liability</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    You understand and agree that we will not be liable to you or any third party for any
                                    direct, indirect,
                                    incidental, special, consequential, or exemplary damages resulting from:
                                </p>
                                <ul class="list-item" style="padding-left: 2rem; color: #fff;">
                                    <li>your use or inability to use the Services;</li>
                                    <li>any breaches by hackers of your Account;</li>
                                    <li>any modification, change, suspension, discontinuance, malfunction, delay, or
                                        interruption of the
                                        Services, any reimbursement programs, and any award programs;</li>
                                    <li>the Services generally or the software or systems that make the Services available;
                                    </li>
                                    <li>the use, disclosure, or display of your User-Generated Content;</li>
                                    <li>unauthorized access to or alterations of your transmissions or data;</li>
                                    <li>your storage, handling, security, privacy, and use of your cryptocurrency keys;</li>
                                    <li>statements, conduct, or intervention of any third party on the Services;</li>
                                    <li>any other user interactions that you input or receive through your use of the
                                        Services;</li>
                                    <li>any Gifts, grants or XLM made available to you by us;</li>
                                    <li>any problems that may result from the use of Qtum technology or the Stellar/Ripple
                                        network; or</li>
                                    <li>any other matter relating to the Services.</li>
                                </ul>
                                <p class="xb-item--content" style="color: #fff;">
                                    You agree to accept all risk and liability associated with any of your interactions with
                                    us or our
                                    Services.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">
                                    Indemnification</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    You agree to indemnify and hold harmless QtumWeb3, its affiliates,
                                    subsidiaries, directors,
                                    managers, members, officers, and employees from any and all claims, demands, actions,
                                    damages, losses,
                                    costs or expenses, including without limitation, reasonable legal fees, arising out of
                                    or relating to
                                    your or any other person's use of your credentials or Account in connection with: (a)
                                    use of the
                                    Services; (b) breach of this User Agreement or any other policy; (c) feedback or
                                    submissions you
                                    provide; or (d) violation of any rights of any other person or entity; provided however,
                                    that you shall
                                    not indemnify QtumWeb3 for claims or losses arising out of
                                    QtumWeb3's gross
                                    negligence or willful misconduct. This indemnity shall apply to your successors and
                                    assigns and will
                                    survive any termination or cancellation of this User Agreement.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Government
                                    Law</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    The Terms, and your relationship with QtumWeb3 under the Terms, shall be
                                    governed by the laws
                                    of Belarus, without regard to conflict of law provisions. Any disputes related to this
                                    User Agreement or
                                    QtumWeb3 Services shall be heard in the courts of Belarus.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Non-waiver
                                </h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    Our failure or delay in exercising any right, power or privilege under these Terms shall
                                    not operate as
                                    a waiver thereof. You agree that if QtumWeb3 does not exercise or enforce any
                                    legal right or
                                    remedy which is contained in the Terms, or which QtumWeb3 has the benefit of
                                    under any
                                    applicable law, this will not be taken to be a formal waiver of QtumWeb3's
                                    rights and that
                                    those rights or remedies will still be available to QtumWeb3.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">
                                    Non-assignability</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    You may not transfer, assign, charge, or otherwise dispose of these Terms, or any of
                                    your rights or
                                    obligations arising under them without prior written consent from QtumWeb3,
                                    which may be
                                    withheld in our sole discretion. Any unauthorized assignment and delegation by you are
                                    void.
                                </p>
                                <p class="xb-item--content" style="color: #fff;">
                                    We may transfer, assign, charge, sub-contract or otherwise dispose of these Terms, or
                                    any of our rights
                                    or obligations arising under it, at any time during its term.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">
                                    Severability</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    If any court of law, having the jurisdiction to decide on this matter, rules that any
                                    provision of these
                                    Terms is invalid or unenforceable, then that provision will be removed from the Terms
                                    without affecting
                                    the rest of the Terms. The remaining provisions of the Terms will continue to be valid
                                    and enforceable.
                                </p>

                                <h3 class="xb-item--title"
                                    style="color: #fff; font-size: 20px; margin-top: 30px; margin-bottom: 15px;">Entire
                                    Agreement</h3>
                                <p class="xb-item--content" style="color: #fff;">
                                    This User Agreement, including the Privacy Policy provided on our website represent the
                                    entire agreement
                                    between the parties in relation to its subject matter and supersedes all previous
                                    representations,
                                    communications, negotiations, agreements and understandings between the parties relating
                                    to its subject
                                    matter which shall cease to be of force and effect. Each party acknowledges that it has
                                    not relied on,
                                    and waives all rights or remedies in respect of any warranty, representation, statement,
                                    collateral
                                    contract or assurance (whether made negligently or innocently) except as expressly set
                                    out in this User
                                    Agreement. Nothing in this clause shall limit or exclude any liability for, or remedy in
                                    respect of,
                                    fraud.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- terms content end -->

        </main>
        <!-- main area end  -->

        <!-- footer start -->
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
                                        support@QtumWeb3.com</p>
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
                                        href="mailto:support@QtumWeb3.com?subject=Support%20Request"
                                        style="text-decoration: none; color: inherit;">Support</a></li>
                                <li style="margin-bottom: 15px;"><a
                                        href="mailto:support@QtumWeb3.com?subject=Support%20Request"
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

                    <div class="footer-copyright ul_li_between pt-3 pb-3" style="color: #fff; font-size: 14px;">
                        © 2016-2026 QtumWeb3. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

    </div>
@endsection
