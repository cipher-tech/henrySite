@extends('layouts.dashboardLayout')

<!-- Main Content Layout -->
<!-- Welcome Area -->
@section('content')

    <div class="welcome-area">
        <div class="row m-0 align-items-center">
            <div class="col-lg-5 col-md-12 p-0">
                <div class="welcome-content">
                    <h1 class="mb-2">Hi, Welcome {{$user->full_name}}!</h1>
                    <p class="mb-0">Just Do Somethings Better</p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 p-0">
                <div class="welcome-img">
                    <img src="/dassets/img/welcome-img.png" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- End Welcome Area -->

    <!-- Stats Area -->
    <div class="ecommerce-stats-area">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bxs-user-check'></i>
                    </div>
                    <span class="sub-title">Profit</span>
                    <h3 class="row">
                        <span class="col-8">${{ $user->wallet_balance }}</span>
                        <small class="col-4 text-small" style="font-size: xx-small;">
                            {{-- {{ $user->stock_starts }} --}}
                            <?=str_replace('|', '<br /> ', $user->stock_starts)?>
                            {{-- AMP <br>
                            230.10 <br>
                            +10.5 <br> --}}
                        </small>
                    </h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bxs-badge-dollar'></i>
                    </div>
                    <span class="sub-title">Invested</span>
                    <h3>${{ $user->invested }}</h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-purchase-tag'></i>
                    </div>
                    <span class="sub-title">Country</span>
                    <h3>{{ $user->country }}</h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-shopping-bag'></i>
                    </div>
                    <span class="sub-title">Last login</span>
                    <h3> seconds</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Stats Area -->


    <!-- Stats Area -->
    <div class="ecommerce-stats-area">
        <div class="row">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener"
                        target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [{
                                "title": "S&P 500",
                                "proName": "OANDA:SPX500USD"
                            },
                            {
                                "title": "Nasdaq 100",
                                "proName": "OANDA:NAS100USD"
                            },
                            {
                                "title": "EUR/USD",
                                "proName": "FX_IDC:EURUSD"
                            },
                            {
                                "title": "BTC/USD",
                                "proName": "BITSTAMP:BTCUSD"
                            },
                            {
                                "title": "ETH/USD",
                                "proName": "BITSTAMP:ETHUSD"
                            }
                        ],
                        "colorTheme": "light",
                        "isTransparent": false,
                        "displayMode": "adaptive",
                        "locale": "en"
                    }

                </script>
            </div>
        </div>
    </div>
    <!-- End Stats Area -->

    <!-- Start -->
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/FX-EURUSD/"
                        rel="noopener" target="_blank"><span class="blue-text">EURUSD Rates</span></a> by
                    TradingView</div>
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                    {
                        "symbol": "FX:EURUSD",
                        "width": "100%",
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }

                </script>
            </div>
        </div>


        <div class="col-lg-4 col-md-4">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BITSTAMP-BTCUSD/"
                        rel="noopener" target="_blank"><span class="blue-text">BTCUSD Rates</span></a> by TradingView</div>
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                    {
                        "symbol": "BITSTAMP:BTCUSD",
                        "width": "100%",
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }

                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
        <div class="col-lg-4 col-md-4">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BITSTAMP-ETHBTC/"
                        rel="noopener" target="_blank"><span class="blue-text">ETHBTC Rates</span></a> by TradingView</div>
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                    {
                        "symbol": "BITSTAMP:ETHBTC",
                        "width": "100%",
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }

                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
    <!-- End -->

    <!-- Area Chart - Datetime X-Axis -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Area Chart - Datetime X-Axis</h3>
        </div>

        <div class="card-body">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_3cc53"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BITSTAMP-EURUSD/"
                        rel="noopener" target="_blank"><span class="blue-text">EURUSD Chart</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget({
                        "width": "100%",
                        "height": 610,
                        "symbol": "BITSTAMP:EURUSD",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "Light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "container_id": "tradingview_3cc53"
                    });

                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
@endsection

<!-- Footer -->
<div class="flex-grow-1"></div>
<!-- End Footer -->

<!-- End Main Content Wrapper -->
