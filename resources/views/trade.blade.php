

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="https://static.lobstr.co/static/lobstr/images/favicon-r.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css" integrity="sha384-GV2NnQkZBX/IPRNXJuWkzGq1NjSMJbHr9++xs8GabDSil3V+XYFklrTIV81AgobF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/css/intlTelInput.css" integrity="sha384-9KPPcayV8JI+A4x2K3zcgr0B/tbGxIOidFfVj83E8F3yMY0uRVEnoGcVVJQ2GT8k" crossorigin="anonymous" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Lobstr.co" />
    <meta property="og:title" content="LOBSTR - Simple and Secure Stellar Wallet." />
    <meta property="og:url" content="https://lobstr.co" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="LOBSTR is a crypto wallet for the Stellar network. Powerful and easy to use, LOBSTR is the best tool for managing Lumens (XLM)." />
    <meta property="og:image" content="https://static.lobstr.co/static/lobstr/images/LOBSTR_og.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="1200" />
    <link rel="stylesheet" href="https://static.lobstr.co/static/cache/css/output.36f5cb69c5fe.css" type="text/css">
    <title>Trade XLM | LOBSTR</title>

    <script src="https://static.lobstr.co/static/lobstr/js/freshdeskWidget.js"></script>

</head>
<body class="hidden">
<span id='authorizationUrl' data-url="/authorization/signin/"></span>
<div class="wrapper">
    <div class="wrapper-content">
        <div class="alert mobile-app alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-remove" aria-hidden="true"></span></button>
            <span class="app-text"></span>
            <a href="#" role="button" class="btn btn-default app-href"><span class="fa fa-phone" aria-hidden="true"></span> Install</a>
        </div>
        <nav class="navbar navbar-light lobstr-nav navbar-expand-md container-lobstr-wrapper">
            <div class="container container-fluid container-lobstr">
                <div class="mr15n">
                    <a class="navbar-brand brand" href="/home/">
                        <img alt="Brand" src="https://static.lobstr.co/static/lobstr/new-design/img/logo.svg" class="brand-image">

                    </a>
                </div>
                <div class="sign-block">
                    <a href="/authorization/signin/" class="menu-link">Sign In</a>
                    <a href="/authorization/signup/" class="btn button-link sign-button">Get Started</a>
                </div>
            </div>
        </nav>
        <div class="container-lobstr-wrapper">
            <div id="navigation-anchor"></div>
            <div class="container container-lobstr justify-content-center">
                <div class="content flex flex-column no-margin-right" id="content">
                    <div class="modal fade popup" id="trade-details-popup" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog popup-body">
                            <div class="modal-content popup-content">
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="alert alert-danger transaction-error-alert hidden" role="alert"></div>
                        <div class="content-panel">
                            <div class="page-title">
                                <div class="main-text">Trade</div>
                                <div class="title-extra">
                                    Exchange assets on Stellar DEX
                                </div>
                            </div>
                            <div class="trading-assets">
                                <div class="asset counter-asset selected-asset in-progress" data-asset-code="XLM" data-asset-issuer="" data-asset-name="Lumens" data-asset-home-domain="" data-asset-icon="https://static.lobstr.co/media/XLM-None.png" data-asset-background-color="#29745A" data-asset-is-curated="false" data-asset-is-scam="false">
                                    <div class="d-inline-flex align-items-center flex-grow-1 asset-info-group">
<span class="asset-image-wrapper">
<img src="https://static.lobstr.co/media/XLM-None.png">
</span>
                                        <span class="asset-details">
<div class="name">
<span class="asset-name">
Lumens
</span>
</div>
<div class="balance hidden">Balance: <span class="current-balance"></span></div>
</span>
                                    </div>
                                    <span class="arrow right-arrow"></span>
                                </div>
                                <button class="swap-assets-button">
                                    <img src="https://static.lobstr.co/static/lobstr/trade/img/switch.svg">
                                </button>
                                <div class="asset base-asset selected-asset in-progress" data-asset-code="USDC" data-asset-issuer="GA5ZSEJYB37JRC5AVCIA5MOP4RHTM335X2KGX3IHOJAPP5RE34K4KZVN" data-asset-name="USD Coin" data-asset-home-domain="centre.io" data-asset-icon="https://static.lobstr.co/media/c9bcb346-9fa2-4959-9281-63159a1c68fe.png" data-asset-background-color="#1D3856" data-asset-is-curated="true" data-asset-is-scam="false">
                                    <div class="d-inline-flex align-items-center flex-grow-1 asset-info-group">
<span class="asset-image-wrapper">
<img src="https://static.lobstr.co/media/c9bcb346-9fa2-4959-9281-63159a1c68fe.png">
</span>
                                        <span class="asset-details">
<div class="name">
<span class="asset-name">
USD Coin
</span>
<span class="domain"> (centre.io)</span>
</div>
<div class="balance hidden">Balance: <span class="current-balance"></span></div>
</span>
                                    </div>
                                    <span class="arrow right-arrow"></span>
                                </div>
                            </div>
                            <div class="chart">
                                <div class="charts-container box d-flex flex-column justify-content-between">
                                    <div class="box-header d-flex justify-content-between align-items-center flex-shrink-0">
                                        <div class="chart-last-rate-info d-flex flex-column">
                                            <div>
                                                <div id="currency_rate_current" class="current"></div>
                                                <div class="percent" id="currency_rate_total"></div>
                                            </div>
                                            <div class="lower-higher-rates">
                                                <span class="high-rate" id="currency_rate_max"></span>
                                                <span class="low-rate" id="currency_rate_min"></span>
                                            </div>
                                        </div>
                                        <div class="chart-periods">
                                            <span class="period selected" data-value="24">1D</span>
                                            <span class="period" data-value="168">1W</span>
                                            <span class="period" data-value="720">1M</span>
                                            <span class="period" data-value="2160">3M</span>
                                            <span class="period" data-value="8760">1Y</span>
                                            <span class="period">All</span>
                                        </div>
                                    </div>
                                    <div class="chart-loader-wrapper">
                                        <img class="chart-loader" src="https://static.lobstr.co/static/lobstr/images/loader.svg" />
                                    </div>
                                    <div class="box-content">
                                        <canvas id="currency_rate" width="700" height="247"></canvas>
                                    </div>
                                    <div class="no-chart-data-message hidden justify-content-center d-flex align-items-center flex-grow-1">
                                        No activity for selected time period.
                                    </div>
                                </div>
                                <div id="chart-width" class="hidden" data-value="700"></div>
                            </div>
                            <div id="chart-name" class="hidden" data-value="currency_rate"></div>
                            <div id="chart-currency-code" class="hidden" data-value=""></div>
                            <div id="exchange-rates-url" class="hidden" data-value="/api/new-exchange-rates/"></div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js" integrity="sha384-kOzY9L5wBXCCeXrHKAMsNCiXCP+c9gu/TfMTC+vTjH542f0KEPZdw69IG2d4khx/" crossorigin="anonymous"></script>
                            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=
            sha384-wqY0Wddj/9rsgpTQ0qEtvkb/VMP+u3Gt7/MhRiCGMt5eacRnOnIqDG6or9xvmleu
            sha512-mMXw67ocU3c3KLW9ppZkGRFL0pC7mQpe1RI90E/vZXKUYGkLee2CItYbEW8BctM5QPSTBjD5b97sunBTHhDMRw==" crossorigin="anonymous"></script>
                        </div>
                        <div class="content-panel">
                            <div class="container pni">
                                <div class="row">
                                    <div class="col-sm trade-col">
                                        <div class="statictic-block">
                                            <div class="page-title">
                                                <div class="main-text">Market stats</div>
                                            </div>
                                            <div class="statistic-row price-info">
                                                <div class="statistic-item">
                                                    <span class="label">XLM price:</span><span class="counter-asset-price"></span> USDC <span class="counter-asset-alternative-price-wrapper">(<span class="counter-asset-alternative-price"></span>)</span>
                                                </div>
                                                <div class="statistic-item">
                                                    <span class="label">24h change:</span><span class="day-change"></span>
                                                </div>
                                            </div>
                                            <div class="statistic-row volume-info">
                                                <div class="statistic-item">
                                                    <span class="label">24h volume:</span><span class="day-volume"></span>
                                                </div>
                                                <div class="statistic-item">
                                                    <span class="label">Bid-ask spread:</span><span class="spread-value"></span> %
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-sm page-title">
                                                    <div class="main-text">New order</div>
                                                </div>
                                                <ul class="col-sm nav buy-sell-tabs form-tablist" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link buy active" href="#buy-tab" role="tab" data-toggle="tab">Buy</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link sell" href="#sell-tab" role="tab" data-toggle="tab">Sell</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade" id="sell-tab">
                                                    <form autocomplete="off" class="new-form-style trading-type-form" id="id-sell-type-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <div id="div_id_sell_type_type" class="form-group  "> <label for="id_sell_type_type" class="col-form-label ">
                                                                Type
                                                            </label> <div class=""> <div class="dropdown-wrapper dropdown-select-field form-control"> <button type="button" name="type" class="dropdown-toggle text-left markettypeselectwidget form-control" id="id_sell_type_type" class="btn dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Limit
                                                                    </button> <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" data-value="limit" href="#" selected>Limit</a> <a class="dropdown-item" data-value="market" href="#">Market</a> </div> <input type="hidden" class="hidden-value choice-field" name="type" value="limit" />
                                                                </div> </div> </div> </form>
                                                    <form action="/api/v3/offers/create-sell/" autocomplete="off" class="new-form-style trading-form sell-form show" id="id-sell-limit-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <div class="form-group"> <div class=""> <div id="div_id_sell_limit_amount" class="form-group"> <label for="id_sell_limit_amount" class="col-form-label  requiredField">
                                                                        Amount<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="amount" placeholder="Enter amount" max-lenth-after-point="7" autocomplete="off" step="any" class="numberinput form-control" required id="id_sell_limit_amount"> <div class="input-group-append"> <span class="input-group-text"><span class='counter-asset-code'></span></span> </div> </div> <span id="hint_id_sell_limit_amount" class="form-text help-text"><span><span class="counter-asset-code"></span> to sell</span></span> </div> </div> <div id="div_id_sell_limit_price" class="form-group"> <label for="id_sell_limit_price" class="col-form-label  requiredField">
                                                                        Price <span class='actions'><a href='#' class='ask'>Ask</a> <a class='bid' href='#'>Bid</a> <a class='last' href='#'>Last</a></span><span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="price" placeholder="Enter price" max-lenth-after-point="7" autocomplete="off" step="any" class="numberinput form-control" required id="id_sell_limit_price"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_sell_limit_price" class="form-text help-text">Price of 1 <span class="counter-asset-code"></span></span> </div> </div> <div id="div_id_sell_limit_total" class="form-group"> <label for="id_sell_limit_total" class="col-form-label  requiredField">
                                                                        Total<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="text" name="total" placeholder="Total amount" autocomplete="off" class="textinput textInput form-control" required id="id_sell_limit_total"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_sell_limit_total" class="form-text help-text"><span class="base-asset-code"></span> to buy</span> </div> </div>
                                                                <div class="alert hidden" role="alert"></div><div class="signin-invitation"> <a href="/authorization/signin/" class="signin-link">Log in</a> to create an order
                                                                </div> </div>
                                                        </div> </form>
                                                    <form action="/api/v3/convert/strict-send/" autocomplete="off" class="new-form-style trading-form sell-form" id="id-sell-market-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <div class="form-group"> <div class=""> <div id="div_id_sell_market_amount" class="form-group"> <label for="id_sell_market_amount" class="col-form-label  requiredField">
                                                                        Amount<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="amount" placeholder="Enter amount" max-lenth-after-point="7" autocomplete="off" step="any" class="numberinput form-control" required id="id_sell_market_amount"> <div class="input-group-append"> <span class="input-group-text"><span class='counter-asset-code'></span></span> </div> </div> <span id="hint_id_sell_market_amount" class="form-text help-text"><span><span class="counter-asset-code"></span> to sell</span></span> </div> </div> <div id="div_id_sell_market_price" class="form-group"> <label for="id_sell_market_price" class="col-form-label  requiredField">
                                                                        Price<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="price" placeholder="Market price" step="any" class="numberinput form-control" required disabled id="id_sell_market_price"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_sell_market_price" class="form-text help-text">Price of 1 <span class="counter-asset-code"></span></span> </div> </div> <div id="div_id_sell_market_total" class="form-group"> <label for="id_sell_market_total" class="col-form-label  requiredField">
                                                                        Total<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="text" name="total" placeholder="Total amount" autocomplete="off" class="textinput textInput form-control" required id="id_sell_market_total"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_sell_market_total" class="form-text help-text"><span class="base-asset-code"></span> to buy</span> </div> </div>
                                                                <div class="slippage-info"><span class="slippage-icon"><img src="https://static.lobstr.co/static/lobstr/trade/img/ico-info.svg"></span><p class="slippage-text">The final amount may change within 1%.<br /> Please make sure you are comfortable with the amounts that you will trade.</p></div><div class="alert hidden" role="alert"></div><div class="signin-invitation"> <a href="/authorization/signin/" class="signin-link">Log in</a> to create an order
                                                                </div> </div>
                                                        </div> </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade active show" id="buy-tab">
                                                    <form autocomplete="off" class="new-form-style trading-type-form" id="id-buy-type-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <div id="div_id_buy_type_type" class="form-group  "> <label for="id_buy_type_type" class="col-form-label ">
                                                                Type
                                                            </label> <div class=""> <div class="dropdown-wrapper dropdown-select-field form-control"> <button type="button" name="type" class="dropdown-toggle text-left markettypeselectwidget form-control" id="id_buy_type_type" class="btn dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Limit
                                                                    </button> <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" data-value="limit" href="#" selected>Limit</a> <a class="dropdown-item" data-value="market" href="#">Market</a> </div> <input type="hidden" class="hidden-value choice-field" name="type" value="limit" />
                                                                </div> </div> </div> </form>
                                                    <form action="/api/v3/offers/create-buy/" autocomplete="off" class="new-form-style trading-form buy-form show" id="id-buy-limit-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <div class="form-group"> <div class=""> <div id="div_id_buy_limit_amount" class="form-group"> <label for="id_buy_limit_amount" class="col-form-label  requiredField">
                                                                        Amount<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="amount" placeholder="Enter amount" max-lenth-after-point="7" autocomplete="off" step="any" class="numberinput form-control" required id="id_buy_limit_amount"> <div class="input-group-append"> <span class="input-group-text"><span class='counter-asset-code'></span></span> </div> </div> <span id="hint_id_buy_limit_amount" class="form-text help-text"><span class="counter-asset-code"></span> to buy</span> </div> </div> <div id="div_id_buy_limit_price" class="form-group"> <label for="id_buy_limit_price" class="col-form-label  requiredField">
                                                                        Price <span class='actions'><a href='#' class='ask'>Ask</a> <a class='bid' href='#'>Bid</a> <a class='last' href='#'>Last</a></span><span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="price" placeholder="Enter price" max-lenth-after-point="7" autocomplete="off" step="any" class="numberinput form-control" required id="id_buy_limit_price"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_buy_limit_price" class="form-text help-text">Price of 1 <span class="counter-asset-code"></span></span> </div> </div> <div id="div_id_buy_limit_total" class="form-group"> <label for="id_buy_limit_total" class="col-form-label  requiredField">
                                                                        Total<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="text" name="total" placeholder="Total amount" autocomplete="off" class="textinput textInput form-control" required id="id_buy_limit_total"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_buy_limit_total" class="form-text help-text"><span><span class="base-asset-code"></span> to sell</span></span> </div> </div>
                                                                <div class="alert hidden" role="alert"></div><div class="signin-invitation"> <a href="/authorization/signin/" class="signin-link">Log in</a> to create an order
                                                                </div> </div>
                                                        </div> </form>
                                                    <form action="/api/v3/convert/strict-receive/" autocomplete="off" class="new-form-style trading-form buy-form" id="id-buy-market-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <div class="form-group"> <div class=""> <div id="div_id_buy_market_amount" class="form-group"> <label for="id_buy_market_amount" class="col-form-label  requiredField">
                                                                        Amount<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="amount" placeholder="Enter amount" max-lenth-after-point="7" autocomplete="off" step="any" class="numberinput form-control" required id="id_buy_market_amount"> <div class="input-group-append"> <span class="input-group-text"><span class='counter-asset-code'></span></span> </div> </div> <span id="hint_id_buy_market_amount" class="form-text help-text"><span class="counter-asset-code"></span> to buy</span> </div> </div> <div id="div_id_buy_market_price" class="form-group"> <label for="id_buy_market_price" class="col-form-label  requiredField">
                                                                        Price<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="number" name="price" placeholder="Market price" step="any" class="numberinput form-control" required disabled id="id_buy_market_price"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_buy_market_price" class="form-text help-text">Price of 1 <span class="counter-asset-code"></span></span> </div> </div> <div id="div_id_buy_market_total" class="form-group"> <label for="id_buy_market_total" class="col-form-label  requiredField">
                                                                        Total<span class="asteriskField">*</span> </label> <div class=""> <div class="input-group"> <input type="text" name="total" placeholder="Total amount" autocomplete="off" class="textinput textInput form-control" required id="id_buy_market_total"> <div class="input-group-append"> <span class="input-group-text"><span class='base-asset-code'></span></span> </div> </div> <span id="hint_id_buy_market_total" class="form-text help-text"><span><span class="base-asset-code"></span> to sell</span></span> </div> </div>
                                                                <div class="slippage-info"><span class="slippage-icon"><img src="https://static.lobstr.co/static/lobstr/trade/img/ico-info.svg"></span><p class="slippage-text">The final amount may change within 1%.<br /> Please make sure you are comfortable with the amounts that you will trade.</p></div><div class="alert hidden" role="alert"></div><div class="signin-invitation"> <a href="/authorization/signin/" class="signin-link">Log in</a> to create an order
                                                                </div> </div>
                                                        </div> </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm orderbook-col">
                                        <div class="page-title">
                                            <div class="main-text">Order book</div>
                                        </div>
                                        <div class="orderbook-table"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade popup" id="select-asset" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog popup-body select-asset-modal-body select-trade-asset">
                            <div class="modal-content popup-content">
                                <button class="close-popup close-popup-button close" type="button" data-dismiss="modal">
                                    <img src="https://static.lobstr.co/static/lobstr/images/close-popup.svg">
                                </button>
                                <div class="header">Asset select</div>
                                <div class="header-info">
                                    Select assets to trade
                                </div>
                                <ul class="nav bottom-line-tabs mt-15 asset-tab-selector" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#all-assets-tab" role="tab" data-toggle="tab">All assets</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="form-group">
                                        <div class="controls ">
                                            <input id="asset-search-query" name="asset_search_term" class="input textinput textInput form-control" type="text" placeholder="Search by asset code or home domain" autocomplete="off">
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade active show" id="all-assets-tab">
                                        <div class="trust-allowed-assets fluid-table assets-table"></div>
                                        <div class="asset-search-result fluid-table assets-table hidden"></div>
                                        <div class="empty-tab-message-wrapper d-flex justify-content-center align-items-center hidden">
                                            <div class="empty-tab-message-content">
                                                <img class="empty-tab-message-icon" src=https://static.lobstr.co/static/lobstr/images/trade/empty-search-icon.svg>
                                                <div class="title">
                                                    Nothing found
                                                </div>
                                                <div class="description">
                                                    No results for ... were found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade popup" id="additional-action-required" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog popup-body">
                            <div class="modal-content popup-content">
                                <button class="close-popup close-popup-button close" type="button" data-dismiss="modal">
                                    <img src="https://static.lobstr.co/static/lobstr/images/close-popup.svg">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="offer-cancel-url" class="hidden" data-value="/api/v3/offers/cancel/"></div>
                    <div id="tradable-assets-list-url" class="hidden" data-value="/api/v1.1/tradable-asset-list"></div>
                    <div id="trade-view-url-template" class="hidden" data-value="/trade"></div>
                    <div id="asset-trust-url" class="hidden" data-value="/api/v3/trustlines/add/"></div>
                    <div id="user-confirmed" class="hidden" data-value="false"></div>
                    <div id="list-alternative-rates-url" class="hidden" data-value="/api/assets/alternative-rates/"></div>
                    <div id="lumen-alternative-rate-url" class="hidden" data-value="/api/assets/alternative-rates/native/"></div>
                    <div id="asset-alternative-rate-url" class="hidden" data-value="/api/assets/alternative-rates/YYYYYYY:XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"></div>
                    <div id="asset-details-light-url" class="hidden" data-value="/api/assets/details-light/"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer base-footer ">
    <div class="footer-content container container-lobstr">
        <div class="column lobstr-links-wrapper">
            <img src="https://static.lobstr.co/static/landing/images/footer-logo.svg">
            <p class="copy">
                <br />
                LOBSTR is operated by an independent<br />
                commercial entity unaffiliated with the<br />
                Stellar Development Foundation.<br />
            </p>
            <div class="footer-menu footer-links">
                <a href="https://lobstr.co/twitter/" class="menu-item" target="_blank" rel="noopener noreferrer">
                    <img src="https://static.lobstr.co/static/lobstr/images/twitter.svg" />
                    Twitter
                </a>
                <a href="https://lobstr.co/medium/" class="menu-item" target="_blank" rel="noopener noreferrer">
                    <img src="https://static.lobstr.co/static/lobstr/images/medium.svg" />
                    Medium
                </a>
                <a href="https://lobstr.co/github/" class="menu-item" target="_blank" rel="noopener noreferrer">
                    <img src="https://static.lobstr.co/static/lobstr/images/github.svg" />
                    Github
                </a>
            </div>
        </div>
        <div class="footer-menu-wrap">
            <div class="column">
                <ul class="footer-menu">
                    <li class="menu-item head">
                        Tools
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/usdcswap/" target="_blank" rel="noopener noreferrer">USDC Chain Swap</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/merge-tool/" target="_blank" rel="noopener noreferrer">Merge Tool</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/converter/">Converter</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="footer-menu">
                    <li class="menu-item head">
                        Products
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/stellarterm/" target="_blank" rel="noopener noreferrer">StellarTerm</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/stellarx/" target="_blank" rel="noopener noreferrer">StellarX</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/vault/" target="_blank" rel="noopener noreferrer">LOBSTR Vault</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="footer-menu">
                    <li class="menu-item head">
                        Buy & Sell Crypto
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/buy-xlm/" target="_blank" rel="noopener noreferrer">Buy Stellar Lumens</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/buy-usd-coin-stellar/" target="_blank" rel="noopener noreferrer">Buy USD Coin (Stellar)</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/buy-btc/" target="_blank" rel="noopener noreferrer">Buy Bitcoin</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/buy-eth/" target="_blank" rel="noopener noreferrer">Buy Ethereum</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/sell-crypto/" target="_blank" rel="noopener noreferrer">Sell Crypto</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="footer-menu">
                    <li class="menu-item head">
                        Connect
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/support/" target="_blank">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/help-center/" target="_blank" rel="noopener noreferrer">Help Center</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/partners/" class="body-line">Business Partners</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://lobstr.co/asset-listing/" class="body-line">Asset Listing</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="footer-menu market-links">
                    <li class="menu-item head">
                        Downloads
                    </li>
                    <li class="menu-item">
                        <a href="https://itunes.apple.com/us/app/lobstr-stellar-wallet/id1404357892?mt=8" class="market-badge" target="_blank" rel="noopener noreferrer">
                            <img src="https://static.lobstr.co/static/lobstr/images/apps/i-os-badge.svg">
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://play.google.com/store/apps/details?id=com.lobstr.client" class="market-badge" target="_blank" rel="noopener noreferrer">
                            <img src="https://static.lobstr.co/static/lobstr/images/apps/google-play-badge.svg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="lobstr-info-footer">
        <div class="container container-lobstr">
            <div class="copyright">
                &copy; 2023 Lobstr.co <a href="https://lobstr.co/ultrastellar/">Ultra Stellar</a>, LLC.
            </div>
            <div class="links">
                <a href="https://lobstr.co/terms/" class="menu-item">Terms of Service</a> |
                <a href="https://lobstr.co/privacy/" class="menu-item">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade popup" id="done-modal" tabindex="-1" role="dialog" aria-labelledby="myDoneModalLabel" aria-hidden="true">
    <div class="modal-dialog popup-body done-modal-body">
        <div class="modal-content popup-content">
            <button class="close-popup close-popup-button close" type="button" data-dismiss="modal">
                <img src="https://static.lobstr.co/static/lobstr/images/close-popup.svg">
            </button>
            <div id="done-body" class="d-flex align-items-center flex-column">
            </div>
            <div class="links text-center">
                <input type="button" value="Close" class="new-button f-right" data-dismiss="modal" autofocus>
            </div>
        </div>
    </div>
</div>
<div class="modal fade popup" id="send-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog popup-body send-modal-body">
        <div class="modal-content popup-content">
            <button class="close-popup close-popup-button close" type="button" data-dismiss="modal">
                <img src="https://static.lobstr.co/static/lobstr/images/close-popup.svg">
            </button>
            <div class="header first-step" id="myModalLabel">
                New payment
            </div>
            <div class="header-info first-step">
                <span class="wallet-header">Send assets directly to any Stellar wallet.</span>
                <span class="phone-header hidden">Send assets directly to any phone number. Min payment is 1.5 XLM.</span>
                <span class="email-header hidden">Send assets directly to any email address. Min payment is 1.5 XLM.</span>
            </div>
            <div class="header confirm-step hidden" id="myModalLabel">
                Review payment
            </div>
            <div class="header-info confirm-step hidden">Please review and confirm this transaction</div>
            <div class="alert alert-dismissible transaction-error send-form-error hidden" role="alert">
                Transaction was declined.
            </div>
            <div class="alert alert-dismissible zero-native-balance-warning send-form-error hidden" role="alert">
                This amount exceeds the maximum that you can send. Active Stellar accounts should have a minimum of XLM. <a class='warning-learn-more' href="/buy/">Buy Lumens</a> with LOBSTR or send at least 5 lumens (XLM) to your address.
            </div>
            <div class="alert alert-dismissible not-enough-lumen-warning send-form-error hidden" role="alert">
                This amount exceeds the maximum that you can send. Active Stellar accounts should have a minimum of <span class="min-stellar-balance"></span> XLM. Assets or trade offers increase your minimum balance.
                <a class='warning-learn-more' href='https://lobstr.freshdesk.com/support/solutions/articles/151000001053' target='_blank'>Learn more</a>
            </div>
            <div class="alert alert-dismissible reached-lobstr-limit send-form-error hidden" role="alert">
                This amount exceeds the maximum that you can send. LOBSTR reserves an extra 0.0011 XLM on your account balance to prevent your account from being locked.
                <a class='warning-learn-more' href='https://lobstr.freshdesk.com/support/solutions/articles/151000001053' target='_blank' rel='noopener noreferrer'>Learn more</a>
            </div>
            <div class="alert alert-dismissible not-enough-comission-warning send-form-error hidden" role="alert">
                You don't have enough fund to perform this transaction. Active Stellar accounts should have a minimum of <span class="min-stellar-balance"></span> XLM. Assets or trade offers increase your minimum balance.
                <a class='warning-learn-more' href='https://lobstr.freshdesk.com/support/solutions/articles/151000001053' target='_blank'>Learn more</a>
            </div>
            <div class="alert alert-dismissible not-enough-funds-warning send-form-error hidden" role="alert">
                You don't have enough <span class="current-currency-code"></span> to perform this transaction.
            </div>
            <div class="alert alert-dismissible destination-no-trustline send-form-error hidden" role="alert">
                Destination does not have a trust line.
            </div>
            <div class="alert alert-dismissible no-trustline send-form-error hidden" role="alert">
                Destination doesn't have <span class="current-currency-code"></span> trustline.
            </div>
            <div class="alert alert-dismissible inactive send-form-error hidden" role="alert">
                Destination account is inactive and can’t receive assets yet
            </div>
            <span class="empty-space"></span>
            <form autocomplete="off" class="new-form-style send-form" id="id-send-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <script type="text/javascript" src="https://static.lobstr.co/static/lobstr/js/check-memo-length.js"></script> <div class="form-group"> <div class="label-send"></div> <div> <div class="first-step"> <div class="form-group"> <div class="btn-group btn-group-toggle input-like" data-toggle="buttons"> <label class="btn new-button active"> <input type="radio" name="send_type" value="wallet" autocomplete="off" checked="checked"> <div class="icon-container"> <i class="icon-img icon-wallet"></i>
                                            Stellar wallet
                                        </div> </label> <label class="btn new-button"> <input type="radio" name="send_type" value="phone" autocomplete="off"> <div class="icon-container"> <i class="icon-img icon-phone"></i>
                                            Phone number
                                        </div> </label> <label class="btn new-button"> <input type="radio" name="send_type" value="email" autocomplete="off"> <div class="icon-container"> <i class="icon-img icon-mail"></i>
                                            Email address
                                        </div> </label> </div> <div class="alert alert-warning help-text phone-alert" role="alert">
                                    Receiver will get a text message explaining how to claim the payment.
                                    <a href="https://lobstr.freshdesk.com/support/solutions/articles/151000001268" target="_blank" rel="noopener noreferrer">Read more</a> </div> <div class="alert alert-warning help-text email-alert" role="alert">
                                    Receiver will get an email explaining how to claim the payment.
                                    <a href="https://lobstr.freshdesk.com/support/solutions/articles/151000001268" target="_blank" rel="noopener noreferrer">Read more</a> </div> </div> <div id="div_id_destination" class="form-group  "> <label for="id_destination" class="col-form-label label-send">
                                    Recipient
                                </label> <div class=""> <input type="text" name="destination" placeholder="Stellar or federation address" maxlength="512" class="id_send_to input-send destination-input textinput textInput form-control" autocomplete="off" autofocus="" id="id_destination"> <span id="hint_id_destination" class="form-text help-text"><span class="help-text form-text destination-resolve"></span></span> </div> </div> <div id="div_id_phone_number" class="form-group  "> <label for="id_transaction_phone" class="col-form-label label-send">
                                    Phone number
                                </label> <div class=""> <input type="tel" name="phone_number" placeholder="Phone number" class="input-send destination-input textinput textInput form-control" id="id_transaction_phone" autocomplete="off"> <span id="hint_id_phone_number" class="form-text help-text"><span class="help-text form-text phone-resolve"></span></span> </div> </div> <div id="div_id_email_address" class="form-group  "> <label for="id_transaction_email" class="col-form-label label-send">
                                    Email address
                                </label> <div class=""> <input type="text" name="email_address" placeholder="Email address" class="input-send destination-input textinput textInput form-control" id="id_transaction_email" autocomplete="off"> <span id="hint_id_email_address" class="form-text help-text"><span class="help-text form-text email-resolve"></span></span> </div> </div> <div class="form-group d-flex justify-content-between mb-none"> <div class="amount-container"> <div id="div_id_amount" class="form-group  "> <label for="id_transaction_amount" class="col-form-label label-send requiredField">
                                            Amount
                                        </label> <div class=""> <input type="number" name="amount" placeholder="Enter amount" class="input-send numberinput form-control" id="id_transaction_amount" max-lenth-after-point="7" autocomplete="off" min="1e-07" max="922337203685.4775" step="1e-7" required> <span id="hint_id_amount" class="form-text help-text"><div class="asset-warning">*<span class="min-balance"></span> <span class="current-currency-code"></span> are reserved in your wallet by Stellar network</div></span> </div> </div> </div> <div class="currency-container"> <div id="div_id_currency" class="form-group  "> <label for="id_currency" class="col-form-label label-send requiredField">
                                            Currency
                                        </label> <div class=""> <div class="dropdown-wrapper dropdown-select-field form-control"> <button type="button" name="currency" class="input-send dropdown-toggle text-left assetdropdownselectwidget form-control" id="id_currency" class="btn dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    XLM
                                                </button> <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" data-asset-code="XLM" data-asset-issuer="" data-asset-value="{&#39;code&#39;: &#39;XLM&#39;, &#39;issuer&#39;: None}" href="#">XLM</a> </div> <input id="id_currency_code" type="hidden" class="hidden-value" name="asset_code" value="XLM" /> <input id="id_currency_issuer" type="hidden" class="hidden-value" name="asset_issuer" />
                                            </div> <span id="hint_id_currency" class="form-text help-text"><div class="text-right">Balance: <a href="#" class="selected-asset-amount"></a></div></span> </div> </div> </div> </div> <div class="form-group checkbox-container"> <div class="form-group"> <div class="checkbox-field-wrapper"> <label class="customized-checkbox" id="id_add_memo_label" for="id_add_memo"> <span class="checkbox-input-wrapper customized-tick"> <input type="checkbox" name="add_memo" class="add-memo-checkbox" id="id_add_memo"> <span class="tick"><span class="fa fa-check"></span></span> </span> <span class="checkbox-label">
Add memo
</span> </label> </div> <div class="col-lg-6"> </div>
                                </div> <a href="#" class="what-is-memo">What is memo?</a> </div> <div class="alert alert-dismissible message-alert hidden" role="alert">
                                Some recipients (Bittrex, Kraken and others) may require transaction memo to be provided for correct forwarding of your lumens.
                                <br> <br>
                                In cases when memo is required by receiving end, failure to include the memo with your transaction may result in your funds being lost forever and LOBSTR won't be able to help.
                            </div> <div class="form-group memo-wrapper hidden"> <div id="div_id_memo" class="form-group  "> <label for="id_memo" class="col-form-label label-send requiredField">
                                        Memo message
                                    </label> <div class=""> <input type="text" name="memo" autocomplete="off" maxlength="28" class="charsleftinput form-control" required id="id_memo"> <span class="form-text help-text"> <span class="letters-counter">28</span> characters left.
</span> </div> </div> </div> </div> <div class="confirm-step confirm-step-body hidden"> <div class="confirm-data"></div> <div class="source-block"> </div> </div> <div class="additional-action-required-body hidden"></div> <div class="path-payment-strict-send hidden"></div> <div class="links"> <a href="#" data-dismiss="modal" class="f-right new-button close-popup-button">Close</a> <a href="#" class="f-right new-button back-button hidden">Back</a> <input type="submit" name="save" value="Send" class="f-right new-button green submit-payment-button" id="submit-id-send"> </div> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade popup" id="fail-modal" tabindex="-1" role="dialog" aria-labelledby="myFailModalLabel" aria-hidden="true">
    <div class="modal-dialog popup-body fail-modal-body">
        <div class="modal-content popup-content">
            <button class="close-popup close-popup-button close" type="button" data-dismiss="modal">
                <img src="https://static.lobstr.co/static/lobstr/images/close-popup.svg">
            </button>
            <div class="header">Transaction failed</div>
            <div class="text mb-none default">Something went wrong and your transaction was not sent. Please try again later.</div>
            <div class="text mb-none custom"></div>
            <div class="links">
                <input type="button" value="Back" class="new-button f-right" data-dismiss="modal">
            </div>
        </div>
    </div>
</div>
<div class="modal fade popup" id="more-signatures-needed-modal" tabindex="-1" role="dialog" aria-labelledby="myMoreSignaturesNeededModalLabel" aria-hidden="true">
    <div class="modal-dialog popup-body more-signatures-needed">
        <div class="modal-content popup-content">
            <button class="close-popup close-popup-button close" type="button" data-dismiss="modal">
                <img src="https://static.lobstr.co/static/lobstr/images/close-popup.svg">
            </button>
            <div class="header">More signatures needed</div>
            <div class="text mb-none custom"></div>
            <textarea id="envelope-xdr" class="stellar xdr copy-btn" rows="6" readonly data-copy-source="envelope-xdr"></textarea>
            <div class="links">
                <input id="copy-xdr" type="button" value="Copy XDR" class="new-button f-right">
                <input type="button" value="Close" class="new-button f-right" data-dismiss="modal">
            </div>
        </div>
    </div>
</div>
<div id="modal_container"></div>
<div id="hide-memo-flag" class="hidden" data-value="false"></div>
<div id="min-balance" class="hidden" data-value="1.0"></div>
<div id="entry-reserve" class="hidden" data-value="0.5"></div>
<div id="horizon-url" class="hidden" data-value="https://horizon.stellar.lobstr.co"></div>
<div id="stellar-network" class="hidden" data-value="TESTNET"></div>
<div id="fee-xlm" class="hidden" data-value="1e-05"></div>
<div id="lobstr-reserved-balance-xlm" class="hidden" data-value="0.0011"></div>
<div id="contacts-url" class="hidden" data-value="/contacts/accounts/"></div>
<div id="send-transaction-url" class="hidden" data-value="/api/v3/send-funds/"></div>
<div id="operations-endpoint-url" class="hidden" data-value="/transactions/"></div>
<div id="sent-operations-url" class="hidden" data-value="/transactions/sent/"></div>
<div id="received-operations-url" class="hidden" data-value="/transactions/received/"></div>
<div id="confirm-animation-url" class="hidden" data-value="https://static.lobstr.co/static/lobstr/animations/confirm.json"></div>
<div id="resolve-federation-url" class="hidden" data-value="/api/resolve-federation/"></div>
<div id="federation-domain" class="hidden" data-value="lobstr.co"></div>
<div id="current-user-address" class="hidden" data-value=""></div>
<div id="asset-backgroud-color-choices" class="hidden" data-value="[&quot;#1D3856&quot;, &quot;#7C4783&quot;, &quot;#29745A&quot;, &quot;#F8B705&quot;, &quot;#FFC72C&quot;, &quot;#FFDC00&quot;, &quot;#37EFA0&quot;, &quot;#4DD399&quot;, &quot;#6CB998&quot;, &quot;#4EB7C1&quot;, &quot;#46CFDC&quot;, &quot;#37DEEF&quot;, &quot;#CE7272&quot;, &quot;#EF9191&quot;, &quot;#F5AFAF&quot;]"></div>
<div id="asset-details-url" class="hidden" data-value="/api/assets/detailed-info/"></div>
<div id="indacoin-endpoint-url" class="hidden" data-value="/api/indacoin-transaction/"></div>
<div id="moonpay-server-url" class="hidden" data-value="https://buy.moonpay.io"></div>
<div id="close-icon-url" class="hidden" data-value="https://static.lobstr.co/static/lobstr/images/close-popup.svg"></div>
<div id="settings-page-url" class="hidden" data-value="/settings/"></div>
<div id="loader-image" class="hidden" data-value="https://static.lobstr.co/static/lobstr/animations/preloader.gif"></div>
<div id="android-app-download-url" class="hidden" data-value='https://play.google.com/store/apps/details?id=com.lobstr.client'></div>
<div id="iso-app-download-url" class="hidden" data-value="https://itunes.apple.com/us/app/lobstr-stellar-wallet/id1404357892?mt=8"></div>
<div id="home-url" class="hidden" data-value="/home/"></div>
<div id="copy-animation-url" class="hidden" data-value="https://static.lobstr.co/static/lobstr/animations/header-copy-btn.json"></div>
<div id="path-payment-strict-send-api-url" class="hidden" data-value="/api/v3/path-payment/path-payment-strict-send/"></div>
<div id="path-payment-icon-url" class="hidden" data-value="https://static.lobstr.co/static/lobstr/images/path_payment/path_payment.svg"></div>
<div id="path-arrows-icon-url" class="hidden" data-value="https://static.lobstr.co/static/lobstr/images/path_payment/path-arrows.svg"></div>
<div id="scam-asset-warning-img" class="hidden" data-value="https://static.lobstr.co/static/lobstr/images/common/white-border-scam-icon.svg"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.10.1/polyfill.min.js" integrity="sha384-LWXI0vFVs5802e/oQ2xmb3HGXVl2GGSHOmaTQnmifHguIujwVU5j5iiqmS+UZMSy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha384-Dziy8F2VlJQLMShA6FHWNul/veM9bCkRUaLqr199K94ntO5QUrLJBEbYegdSkkqX" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stellar-sdk/10.1.0/stellar-sdk.min.js" integrity="sha384-68T+xGcMM290PVN2BaLEbZs6GiDGWss4Qb2XsT+tCGSf0AREqxOd8AeBxOE53X3q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/js/intlTelInput-jquery.min.js" integrity="sha384-E0cnlLUeQ2zmiDBPLMwnG2Sc4wxbsWtiIoppW6QuK5tPyTfvcTHBRamRLmMxnWV4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/js/utils.js" integrity="sha384-uR3Voi4NqDk1mpr8e/9ntExjdae3fHOIpQCQpwUVYKDBlORfJ5iJQSTvbV77+StC" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" integrity="sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o+ok+t/SAKlL5mvXLr0OXNi1Hp" crossorigin="anonymous"></script>
<script src="https://unpkg.com/react@16.13.1/umd/react.production.min.js" integrity="sha384-Q5wFTPC/kyhbXJt5GLrIeka2uDOSTG7m1zpW91iMO1DJb7+vOwu2lgZC30d4uQmU" crossorigin="anonymous"></script>
<script src="https://unpkg.com/react-dom@16.13.1/umd/react-dom.production.min.js" integrity="sha384-T6Etav7ShYqIZe+prlqxX/h04T1Iu9ynDpcgx0iBgcl5u+AVlStV2kv3mMxfnV1C" crossorigin="anonymous"></script>
<script src="https://unpkg.com/react-is@16.13.1/umd/react-is.production.min.js" integrity="sha384-9AkeRpmllmvy7ocLdr3pIQtnD0snNQh437s3kmOOOFM1DRNObHkJZGfLjY+i+hiF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/styled-components@5.2.0/dist/styled-components.min.js" integrity="sha384-cQHfRijJG9QSLspFVN246GEt1CQYGAWNHiLnDmy+So6RS1mJZVIcMy8hFl/q7Drl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://static.lobstr.co/static/jsi18n/en/djangojs.js"></script>
<script type="text/javascript" src="https://static.lobstr.co/static/jsi18n/en/handlebars.js"></script>

<script src="https://static.lobstr.co/static/cache/js/output.777b725dbca2.js"></script>
<script src="https://static.lobstr.co/static/cache/js/output.309f38dcb9f2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" integrity="sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o+ok+t/SAKlL5mvXLr0OXNi1Hp" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha256-+nuEu243+6BveXk5N+Vbr268G+4FHjUOEcfKaBqfPbc=" crossorigin="anonymous"></script>
<script src="https://static.lobstr.co/static/cache/js/output.d97c5a08e168.js"></script>
<div class="modal fade popup" id="receive-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog popup-body receive-popup-body">
        <div class="modal-content popup-content">
            <button class="close-popup close-popup-button close" type="button" data-dismiss="modal">
                <img src="https://static.lobstr.co/static/lobstr/images/close-popup.svg">
            </button>
            <div class="receive-money-step popup-step">
                <div class="header">Receive tokens</div>
                <div class="header-info">Sending funds to your wallet is fast and easy.</div>
                <ul class="nav bottom-line-tabs nav-receive-tabs nav-fill" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#receive-federation-tab" role="tab" data-toggle="tab">Federation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#receive-stellar-address-tab" role="tab" data-toggle="tab">Stellar address</a>
                    </li>
                </ul>
                <div class="tab-content receive-tabs">
                    <div role="tabpanel" class="tab-pane fade active show" id="receive-federation-tab">
                        <div class="empty-tab-message-wrapper qr-wrapper d-flex flex-column justify-content-center align-items-center">
                            <h5>Federation address not set</h5>
                            <span class="help-text">You could set federation address here</span>
                            <a href="/settings/" class="f-right new-button green ml-0 mt-3">Set Federation Address</a>
                        </div>
                        <p>
                            Federation address is a short and easy to remember alias that is linked to your Stellar address. Set it up, share with others and receive XLM or Stellar-based tokens.
                        </p>
                        <input name="receive_federation_address" class="custom-control-input" id="id_receive_federation_address" type="text" value="" readonly="readonly">
                        <div class="d-flex justify-content-end buttons-wrapper">
                            <button class="new-button request-money-button" aria-hidden="true">Request Money</button>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade show" id="receive-stellar-address-tab">
                        <div class="empty-tab-message-wrapper qr-wrapper d-flex flex-column justify-content-center align-items-center">
                            <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAYAAABS3GwHAAAC+0lEQVR4nO3dUW7bMBQAQafI/a/c/gTIT60UKk09eWcOYClsFwQeKOnxAAAAAAAAAAAAAAAAAAAAAAAAAOBaHxuv9XvjtVZ7tk5n/6bpvzfBlv+bv3ZcBKYSAGkCIE0ApAmANAGQ9nn1DXzZOY595szI8Oi+V48gV6/RXdd8KTsAaQIgTQCkCYA0AZAmANKmjEGPTB4n7hzjHV1r8t80Ydz6lB2ANAGQJgDSBECaAEi7wxRostWH4XYeruNhByBOAKQJgDQBkCYA0gRAmjHoNYw0h7ADkCYA0gRAmgBIEwBpAiDtDmPQyc+Unn1Od/IYdPJ6L2cHIE0ApAmANAGQJgDSpkyBJk9Fdto5ObLmDzsAcQIgTQCkCYA0AZAmANJSB59ubtcHMlLsAKQJgDQBkCYA0gRA2s7pwerHB1ff+84PWkyY2qxe1zO/d/ka2QFIEwBpAiBNAKQJgDQBkDblmeAju8ad05/HnfCmuTPXuXzUecQOQJoASBMAaQIgTQCkCYC0y8dQX6aPBc+s04RXD05Yo7PXcRoUXk0ApAmANAGQJgDS7jwFOjLheeHVdk10JkyOtrEDkCYA0gRAmgBIEwBpAiBtyqsRj+y6x9UH8nbdw7tyGA5eTQCkCYA0AZAmANIEQNrlp/FubvpXb/iBHYA0AZAmANIEQJoASLvDYbgJbvnWs8fej1PccrJlByBNAKQJgDQBkCYA0gRA2pQx6IRR2fSR4a77m7AOr7jWX9kBSBMAaQIgTQCkCYC0z6tv4B/c9aMMqyccqz/V+uz3zq7PmcnW5dM/OwBpAiBNAKQJgDQBkCYA0u4wBn1Hqz/Gceb3Vh/IuyU7AGkCIE0ApAmANAGQJgDSjEH/z+oPZJy91sp7WP26x9Gvj7QDkCYA0gRAmgBIEwBp3gz3bfX9nfm9nVOlXdeZ8G/7lB2ANAGQJgDSBECaAEgTAGlTxqDTTR5bviuH4eDVBECaAEgTAGkCIE0AAAAAAAAAAAAAAAAAAAAAAAAAAMCF/gA0z1EdkSIPQAAAAABJRU5ErkJggg==" alt="QR">
                            <div>
                            </div>
                            <span class="help-text">No memo required</span>
                        </div>
                        <p>
                            Stellar address (or public key) is used to identify your account on the network. It can be safely shared to receive funds.
                        </p>
                        <input name="receive_stellar_address" class="custom-control-input" id="id_receive_stellar_address" type="text" value="" readonly="readonly">
                        <div class="d-flex justify-content-end buttons-wrapper">
                            <button class="new-button request-money-button" aria-hidden="true">Request Money</button>
                            <button class="new-button green copy-btn" data-copy-source="id_receive_stellar_address" aria-hidden="true" data-copy-message="Copied!">Copy Address</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="request-money-step popup-step hidden">
                <div class="header">Request payment</div>
                <div class="header-info">Recipient will be notified about your payment request via email.</div>
                <div class="alert alert-dismissible send-form-error general-error hidden" role="alert">
                    <span class="alert-error-text"></span>
                </div>
                <span class="empty-space d-block"></span>
                <form action="/api/request-payment/" autocomplete="off" class="new-form-style request-money-form" id="id-request-payment-form" method="post"> <input type="hidden" name="csrfmiddlewaretoken" value="wCcZ6xZchjC2rqtiO2jRi9c5u5A7FjgW7nPTzY5tb6GofnhQj7Fh07GBq4k3UTPc"> <script type="text/javascript" src="https://static.lobstr.co/static/lobstr/js/check-memo-length.js"></script> <div class="form-group"> <div class="aab label-send"></div> <div class=""> <div id="div_id_account" class="form-group  "> <label for="id_account" class="col-form-label label-send requiredField">
                                    Account to request from
                                </label> <div class=""> <input type="text" name="account" placeholder="Recipient email or Stellar address" autocomplete="off" class="input-send textinput textInput form-control" autofocus="" required id="id_account"> </div> </div> <div class="row"> <div id="div_id_amount" class="form-group  "> <label for="id_amount" class="col-form-label label-send requiredField">
                                        Amount
                                    </label> <div class=""> <input type="number" name="amount" placeholder="Enter amount" max-lenth-after-point="7" autocomplete="off" min="1e-07" max="922337203685.4775" step="1e-7" class="input-send numberinput form-control" required id="id_amount"> </div> </div> <div id="div_id_currency" class="form-group  "> <label for="id_request_payment_currency" class="col-form-label label-send requiredField">
                                        Currency
                                    </label> <div class=""> <div class="dropdown-wrapper dropdown-select-field form-control"> <button type="button" name="currency" id="id_request_payment_currency" form_class="request_payment" class="input-send dropdown-toggle text-left assetdropdownselectwidget form-control" class="btn dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                XLM
                                            </button> <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" data-asset-code="XLM" data-asset-issuer="" data-asset-value="{&#39;code&#39;: &#39;XLM&#39;, &#39;issuer&#39;: None}" href="#">XLM</a> </div> <input id="id_request_payment_currency_code" type="hidden" class="hidden-value" name="asset_code" value="XLM" /> <input id="id_request_payment_currency_issuer" type="hidden" class="hidden-value" name="asset_issuer" />
                                        </div> </div> </div> </div> <div id="div_id_memo" class="form-group  "> <label for="id_memo" class="col-form-label label-send">
                                    Memo
                                </label> <div class=""> <input type="text" name="memo" autocomplete="off" maxlength="28" class="input-send charsleftinput form-control" id="id_memo"> <span class="form-text help-text"> <span class="letters-counter">28</span> characters left.
</span> </div> </div> <div id="div_id_message" class="form-group  "> <label for="id_message" class="col-form-label label-send">
                                    Message
                                </label> <div class=""> <input type="text" name="message" maxlength="50" class="input-send textinput textInput form-control" id="id_message"> </div> </div> <div class="links pb-0"> <a href="#" class="f-right new-button receive-money-button close-request-money">Back</a><a href="#" data-dismiss="modal" class="f-right new-button close-popup-button hidden">Close</a><input type="submit" name="request-button" value="Request" class="btn btn-primary f-right new-button green" id="submit-id-request-button" />
                            </div> </div>
                    </div> </form>
            </div>
            <div class="request-sent-step popup-step hidden">
                <div class="header">Payment request sent!</div>
                <div class="text short-bottom-margin">Your payment request was succesfully sent.</div>
                <div class="links pb-0">
                    <input type="button" value="Close" class="new-button f-right" data-dismiss="modal">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ga-code" class="hidden" data-value="UA-58078005-1"></div>
<script src="https://static.lobstr.co/static/lobstr/js/googleAnalytics.js"></script>
</body>
</html>
