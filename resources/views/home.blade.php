@extends('layouts.default')
@section('content')

<!--====banner section start====-->
<section class="home_banner_wrapper" id="#home">
    <div class="container">
        <div class="row home_banner_row d-flex align-items-center">
            <div class="col-lg-5">
                <div class="inner">
                    <h1 class="hero_title">Welcome to Baby GPToshi!</h1>
                    <p class="section_info">Meme token born by following the hype of GPToshi @gptoshi!</p>
                    <div class="btn_wrapper d-flex align-items-center">
                        <div class="trade_btn">
                            <a href="https://t.me/BabyGPToshi" class="btn btn-primary" target="_blank">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="inner text-center">
                    <img src="{{ asset('/images/logo.png') }}" alt="Home Banner Illustration">
                </div>
            </div>
        </div>
    </div>
</section>
<!--====banner section end====-->

<!--====slider section start====-->
<section class="slider_wrapper" id="howitworks">
    <div class="container">

    </div>
</section>
<!--====slider section end====-->
<!-- theme option start -->

<!-- theme option end -->
<!--====work section start====-->
<section class="work_section" >
    <div class="container">
        <div class="work_wrapper text-center">
            <h1 class="section_title">How does it work?</h1>
            <p class="section_info">It's easier than you think, just follow these 3 simple easy steps</p>
        </div>
        <div class="row work_row d-flex align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="inner text-center">
                    <div class="content_wrapper d-flex align-items-center justify-content-center">
                        <div class="content d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/work/deposit.png') }}" alt="Deposit Funds">
                        </div>
                    </div>
                    <h4 >Buy BNB from your favourites exchanges</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="inner text-center">
                    <div class="content_wrapper arrow_container d-flex align-items-center justify-content-center">
                        <div class="content d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/work/market.png') }}" alt="Watch the market">
                        </div>
                    </div>
                    <h4>Search our tokens $BGPTOSHI on Pancakeswap</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="inner text-center">
                    <div class="content_wrapper d-flex align-items-center justify-content-center">
                        <div class="content d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/work/trade.png') }}" alt="Make a Trade">
                        </div>
                    </div>
                    <h4>Buy and hold!</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====work section end====-->

<!--====buy section start====-->
<section id="ourtoken">
    <div class="container">
        <div class="buy_wrapper">
            <div class="row buy_row d-flex align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="left_inner text-center text-lg-left">
                        <img src="{{ asset('/images/buy/buy_illustration.png') }}" alt="Buy Illustration">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right_inner">
                        <h1 class="section_title">Introducing the $BGPTOSHI Token</h1>
                        <p class="section_info">As part of our commitment to bringing you the best meme token for GPTOSHI, we're proud to introduce the $BGPTOSHI token. This unique cryptocurrency is designed to be the next hype on Binance Smart Chain.</p>
                        <div class="inner_row d-flex align-items-center">
                            <div class="left_col">
                                <div class="inner">
                                    <p class="para">Name: Baby GPToshi</p>
                                    <p class="para">Symbol: $BGPTOSHI</p>
                                    <p class="para">Type: BEP-20</p>
                                    <p class="para">LP Locked</p>
                                    <p class="para">3% Max Bag</p>
                                </div>
                            </div>
                            <div class="right_col">
                                <div class="inner" >
                                    <p class="para" style="font-weight: 400 !important;">Total Supply: 100,000,000</p>
                                    <p class="para" style="font-weight: 400 !important;">Initial LP: 1 BNB</p>
                                    <p class="para" style="font-weight: 400 !important;">5% Tax</p>
                                    <p class="para" style="font-weight: 400 !important;">Contract Renounced</p>
                                    <p class="para" style="font-weight: 400 !important;">3% Max Transaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====buy section end====-->

<!--====play section start====-->
<section id="highlights">
    <div class="container">
        <div class="row play_row d-flex align-items-center">
            <div class="col-lg-5">
                <div class="inner">
                    <h1 class="section_title">Baby GPToshi Advantage</h1>
                    <p class="section_info">At Baby GPToshi AI, we can generate image by text using the old of GPToshi AI.</p>
                    <div class="inner_row d-flex align-items-center">
                        <div class="inner_col">
                            <div class="left_col">
                                <img src="{{ asset('/images/play/payment.png') }}" alt="Secure Payments">
                            </div>
                        </div>
                        <div class="inner_col">
                            <div class="right_col">
                                <h7>Strong community will bring more hype</h7>
                            </div>
                        </div>
                    </div>
                    <div class="inner_row d-flex align-items-center">
                        <div class="inner_col">
                            <div class="left_col">
                                <img src="{{ asset('/images/play/transparent.png') }}" alt="Transparent">
                            </div>
                        </div>
                        <div class="inner_col">
                            <div class="right_col">
                                <h7>The best telegram community on BSC</h7>
                            </div>
                        </div>
                    </div>

                    <div class="inner_row d-flex align-items-center">
                        <div class="inner_col">
                            <div class="left_col">
                                <img src="{{ asset('/images/play/support.png') }}" alt="24/7 Support">
                            </div>
                        </div>
                        <div class="inner_col">
                            <div class="right_col">
                                <h7>The $BGPTOSHI token for even more benefits and features</h7>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="inner text-center text-lg-end">
                    <img src="{{ asset('/images/play/illustration.png') }}" alt="Play Illustration">
                </div>
            </div>
        </div>
    </div>
</section>
<!--====play section end====-->

<!--====invite section start====-->
<section>
    <div class="container">
        <div class="invite_wrapper">
            <div class="row invite_row d-flex align-items-center">
                <div class="col-lg-8">
                    <div class="inner">
                        <h1>Join Baby GPToshi Community</h1>
                        <p >Ready to start your journey with Baby GPToshi AI? Join our community today to get exclusive access to our Telegram bot and all its amazing features. <p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner text-left text-lg-center">
                        <a href="https://t.me/BabyGPToshi" class="btn btn-primary" target="_blank">JOIN US ON TELEGRAM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====invite section end====-->
@stop
