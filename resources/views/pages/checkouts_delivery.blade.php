
@include('components.head')
<title>{{ $settings->name }} | Information</title>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getInfo($wrapper) {
        var $data = {};
        $wrapper.find('input, textarea, select').each(function() {
            $data[this.name] = $(this).val();

            if ($(this).attr("type") == "checkbox") {
                $data[this.name] = $(this).is(':checked');
            }
        });

        delete $data[""];
        console.log($data);
        return $data;
    }
</script>
<style>
    .Yil88{
        display: flex !important; width: 100%;
        justify-content: center;
    }
    @media (min-width: 768px) {
        .I3DjT.Bu997._1fragem11{
        min-width: 600px;
    }
    }
</style>


<link rel="stylesheet" href="/temple/css/checkouts.css?v={{ time() }}" media="all">
<link rel="stylesheet" href="/temple/css/card.css?v={{ time() }}" media="all">

<body class="template-index js-animate loaded" ontouchstart="return true;" data-transitions="true"
    data-animate_underlines="true" data-animate_images="true" data-button_style="square"
    data-type_product_capitalize="false" data-type_header_capitalize="false" data-product_image_scatter="false"
    data-button_type_style="caps" data-aos-easing="ease-out-quad" data-aos-duration="400" data-aos-delay="0"
    style="">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T7XBJZ7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <div id="app">
        <div
            style="--x-color-canvas-background: rgba(255,255,255,1); --x-color-canvas-background-subdued: rgba(246,246,246,1); --x-color-canvas-background-subdued-alpha: rgba(0,0,0,0.045); --x-color-canvas-text: rgba(0,0,0,1); --x-color-canvas-text-subdued: rgba(112,112,112,1); --x-color-canvas-border: rgba(223,223,223,1); --x-color-canvas-border-subdued: rgba(240,240,240,1); --x-color-canvas-border-emphasized: rgba(149,149,149,1); --x-color-canvas-accent: rgba(17,17,17,1); --x-color-color1-background: rgba(255,255,255,1); --x-color-color1-background-subdued: rgba(246,246,246,1); --x-color-color1-background-subdued-alpha: rgba(0,0,0,0.045); --x-color-color1-text: rgba(0,0,0,1); --x-color-color1-text-subdued: rgba(112,112,112,1); --x-color-color1-border: rgba(223,223,223,1); --x-color-color1-border-subdued: rgba(240,240,240,1); --x-color-color1-border-emphasized: rgba(149,149,149,1); --x-color-color1-accent: rgba(17,17,17,1); --x-color-color2-background: rgba(255,255,255,1); --x-color-color2-background-subdued: rgba(246,246,246,1); --x-color-color2-background-subdued-alpha: rgba(0,0,0,0.045); --x-color-color2-text: rgba(0,0,0,1); --x-color-color2-text-subdued: rgba(112,112,112,1); --x-color-color2-border: rgba(223,223,223,1); --x-color-color2-border-subdued: rgba(240,240,240,1); --x-color-color2-border-emphasized: rgba(149,149,149,1); --x-color-color2-accent: rgba(17,17,17,1); --x-color-primary: rgba(17,17,17,1); --x-color-primary-hovered: rgba(0,0,0,1); --x-color-primary-text: rgba(255,255,255,1); --x-color-primary-text-hovered: rgba(255,255,255,1); --x-color-primary-border: rgba(0,0,0,1); --x-color-secondary-action: rgba(17,17,17,1); --x-color-secondary-action-hovered: rgba(0,0,0,1); --x-color-secondary-action-text: rgba(255,255,255,1); --x-color-secondary-action-text-hovered: rgba(255,255,255,1); --x-color-interactive-text: rgba(17,17,17,1); --x-color-interactive-on-text: rgba(255,255,255,1); --x-color-interactive-text-hovered: rgba(38,38,38,1); --x-color-interactive-foreground-as-subdued-background: rgba(246,246,246,1); --x-color-interactive-text-subdued-on-foreground-as-subdued-background: rgba(104,104,104,1); --x-color-critical-accent: rgba(255,80,80,1); --x-color-critical-accent-hovered: rgba(255,33,33,1); --x-typography-primary-fonts: &quot;Helvetica Neue&quot;, sans-serif; --x-typography-primary-weight-base: 400; --x-typography-primary-weight-bold: 500; --x-typography-secondary-fonts: &quot;Helvetica Neue&quot;, sans-serif; --x-typography-secondary-weight-base: 400; --x-typography-secondary-weight-bold: 500; --swn0j2: rgb(255,80,80); --swn0j4: rgb(17,17,17); --swn0j5: rgb(17,17,17); --swn0j7: rgb(255,255,255); --swn0j8: rgb(0,0,0); --swn0j9: rgb(223,223,223); --swn0j1l: rgb(17,17,17); --swn0j1k: rgb(17,17,17); --swn0ja: rgb(246,246,246); --swn0jb: rgba(0,0,0,0.045); --swn0jd: rgb(240,240,240); --swn0je: rgb(149,149,149); --swn0jc: rgb(112,112,112); --swn0j1s: rgb(17,17,17); --swn0j1t: rgb(255,255,255); --swn0j1u: rgb(62,62,62); --swn0j24: rgb(17,17,17); --swn0j25: rgb(255,255,255); --swn0j26: rgb(62,62,62); --swn0jv: rgb(255,255,255); --swn0jw: rgb(0,0,0); --swn0jx: rgb(223,223,223); --swn0j2i: rgb(17,17,17); --swn0j2h: rgb(17,17,17); --swn0jy: rgb(246,246,246); --swn0jz: rgba(0,0,0,0.045); --swn0j11: rgb(240,240,240); --swn0j12: rgb(149,149,149); --swn0j10: rgb(112,112,112); --swn0j2p: rgb(17,17,17); --swn0j2q: rgb(255,255,255); --swn0j2r: rgb(62,62,62); --swn0j31: rgb(17,17,17); --swn0j32: rgb(255,255,255); --swn0j33: rgb(62,62,62);">
            <div class="g9gqqf1 _1fragem1m g9gqqf6 _1fragem11">
                <div class="_1fragem18 _1fragemai">
                    <div role="region" aria-labelledby="step-section-primary-header">
                        <div class="Yil88 TpQRn ny1C6">
                            <div class="_1fragem18 _1fragemak _1fragemai">
                                <h1 class="n8k95w1 _1fragemai n8k95w2">Information</h1>
                            </div>
                            <div class="I3DjT Bu997 _1fragem11">
                                <div class="RTcqB">
                                    <div role="banner" class="nBWgL">
                                        <div>
                                            <div
                                                class="_1fragem18 _1fragem8t _1fragem9a _1fragem8c _1fragem9r _1fragemai">
                                                <div class="T50Pa Layout0 Z5iCK rhUtJ">
                                                    <style>
                                                        .Layout0>.i602M> :nth-child(1) {
                                                            flex: 0 0 100%;
                                                        }

                                                        .Layout0>.i602M {
                                                            flex-wrap: wrap;
                                                        }

                                                        .Layout0>.i602M {
                                                            max-width: 56rem;
                                                        }

                                                        .AT21L {
                                                            background-color: #737373e6;
                                                        }

                                                        .AT21L .s17WO {
                                                            color: #fff;
                                                        }

                                                        @media all and (min-width: 1000px) {
                                                            .Layout0>.i602M {
                                                                max-width: 100%;
                                                            }
                                                        }
                                                    </style>
                                                    <div class="i602M AHe4G">
                                                        <div>
                                                            <div>
                                                                <div class="_1fragem18 _1fragemai">
                                                                    <div class="_1fragemai _1fragem1e _1mrl40q3 _1fragem27 _1fragem2o _1fragem39 _1fragem3d _16s97g73 _16s97g75 _16s97g7b _16s97g7d"
                                                                        style="--_16s97g72: minmax(0, 20rem); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 20rem); --_16s97g7c: minmax(0, 1fr);">
                                                                        <p class="n8k95w1 _1fragemai n8k95w2">
                                                                            <a href="{{ route('home') }}"
                                                                                class="s2kwpi1 _1fragemai _1fragemax _1fragemb6 s2kwpi3 _1fragemao _1fragemas">
                                                                                <img src="/temple/imgs/land/watermark_black_20x.png"
                                                                                    alt="{{ $settings->name }} INC"
                                                                                    class="marginauto"
                                                                                    style="max-width: min(100%, 200px);">
                                                                            </a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <aside class="_PiNS CiOA7"><button type="button" aria-pressed="false"
                                            aria-controls="disclosure_content" aria-expanded="false"
                                            class="go8Cy"><span class="iibJ6">
                                                <div class="_1fragem1a _1fragemai _1fragem3b">
                                                    <div
                                                        class="_5uqybw2 _1fragem1a _1fragem9u _1fragem1v _1fragem2c _1fragem0 _1fragem4 _1fragem3b">
                                                        {{-- <span
                                                            class="_1fragem37 _1fragem10 _1fragem9t _1fragem9s _1fragem18 a8x1wui a8x1wuf a8x1wum"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"
                                                                focusable="false" aria-hidden="true"
                                                                class="a8x1wuo _1fragem18 _1fragem37 _1fragem9t _1fragem9s">
                                                                <circle cx="3.5" cy="11.9" r="0.3">
                                                                </circle>
                                                                <circle cx="10.5" cy="11.9" r="0.3">
                                                                </circle>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M3.502 11.898h-.004v.005h.004v-.005Zm7 0h-.005v.005h.005v-.005ZM1.4 2.1h.865a.7.7 0 0 1 .676.516l1.818 6.668a.7.7 0 0 0 .676.516h5.218a.7.7 0 0 0 .68-.53l1.05-4.2a.7.7 0 0 0-.68-.87H3.4">
                                                                </path>
                                                            </svg></span> --}}
                                                        {{-- <span class="_19gi7yt0 _19gi7ytg _1fragem1m">Show order summary
                                                            <div class="_1fragem1c _16s97g726 _16s97g71i"></div>
                                                            <span
                                                                class="_1fragem37 _1fragem10 _1fragem9t _1fragem9s a8x1wue _1fragem1c a8x1wug a8x1wum">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 14 14" focusable="false"
                                                                    aria-hidden="true"
                                                                    class="a8x1wuo _1fragem18 _1fragem37 _1fragem9t _1fragem9s">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6">
                                                                    </path>
                                                                </svg></span>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div
                                                    class="_1ip0g651 _1fragem1e _1fragemai _1fragem27 _1fragem2o _1fragem3e">
                                                    <p translate="yes"
                                                        class="_1x52f9s1 _1fragemai _1x52f9sr _1fragem1o _1x52f9s2 _1x52f9sg notranslate">
                                                </div>
                                            </span></button>
                                        <div id="disclosure_content" hidden=""
                                            class="_94sxtb1 _1fragem7t _1fragem7v _1fragemai _1fragemaz _1fragemat _1fragemb3"
                                            style="height: 0px;">
                                            <div></div>
                                        </div>
                                    </aside>
                                    <div class="dh43e">
                                        <div class="_1fragem18 _1fragemai">
                                            <div class="m2iHS iRYcu LMdfq">
                                                <div class="V7iL9">
                                                    <div>
                                                        <nav aria-label="Breadcrumb" class="_1fragem18 _1fragemai">
                                                            <div class="_1fragem1a _1fragemai _1fragem3b">
                                                                <ol
                                                                    class="_5uqybw2 _1fragem1a _1fragem9u _1fragem1v _1fragem2c _1fragem2 _1fragem6 _1fragem3b">
                                                                    <div class="_1fragem1a _1fragemai _1fragem3b">
                                                                        <li
                                                                            class="_5uqybw2 _1fragem1a _1fragem9u _1fragem1v _1fragem2c _1fragem0 _1fragem4 _1fragem3b">
                                                                            <span
                                                                                class="_19gi7yt0 _19gi7yte _1fragem1l">
                                                                                <a href="{{ route('basket') }}"
                                                                                    class="s2kwpi1 _1fragemai _1fragemax _1fragemb6 s2kwpi2 _1fragemao _1fragemas">Bag</a></span><span
                                                                                class="_1fragem37 _1fragem10 _1fragem9t _1fragem9s a8x1wu5 _1fragem18 a8x1wug a8x1wuf a8x1wum"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 14 14"
                                                                                    focusable="false"
                                                                                    aria-hidden="true"
                                                                                    class="a8x1wuo _1fragem18 _1fragem37 _1fragem9t _1fragem9s">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="m5.6 2.1 4.652 4.652a.35.35 0 0 1 0 .495L5.6 11.9">
                                                                                    </path>
                                                                                </svg></span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="_1fragem1a _1fragemai _1fragem3b">
                                                                        <li aria-current="step"
                                                                            class="_5uqybw2 _1fragem1a _1fragem9u _1fragem1v _1fragem2c _1fragem0 _1fragem4 _1fragem3b">
                                                                            <span
                                                                                class="_19gi7yt0 _19gi7yte _1fragem1l _19gi7yt1">Information</span><span
                                                                                class="_1fragem37 _1fragem10 _1fragem9t _1fragem9s a8x1wu5 _1fragem18 a8x1wug a8x1wuf a8x1wum"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 14 14"
                                                                                    focusable="false"
                                                                                    aria-hidden="true"
                                                                                    class="a8x1wuo _1fragem18 _1fragem37 _1fragem9t _1fragem9s">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="m5.6 2.1 4.652 4.652a.35.35 0 0 1 0 .495L5.6 11.9">
                                                                                    </path>
                                                                                </svg></span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="_1fragem1a _1fragemai _1fragem3b">
                                                                        <li
                                                                            class="_5uqybw2 _1fragem1a _1fragem9u _1fragem1v _1fragem2c _1fragem0 _1fragem4 _1fragem3b">
                                                                            <span
                                                                                class="_19gi7yt0 _19gi7yte _1fragem1l _19gi7yt9">Shipping</span><span
                                                                                class="_1fragem37 _1fragem10 _1fragem9t _1fragem9s a8x1wu5 _1fragem18 a8x1wug a8x1wuf a8x1wum"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 14 14"
                                                                                    focusable="false"
                                                                                    aria-hidden="true"
                                                                                    class="a8x1wuo _1fragem18 _1fragem37 _1fragem9t _1fragem9s">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="m5.6 2.1 4.652 4.652a.35.35 0 0 1 0 .495L5.6 11.9">
                                                                                    </path>
                                                                                </svg></span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="_1fragem1a _1fragemai _1fragem3b">
                                                                        <li
                                                                            class="_5uqybw2 _1fragem1a _1fragem9u _1fragem1v _1fragem2c _1fragem0 _1fragem4 _1fragem3b">
                                                                            <span
                                                                                class="_19gi7yt0 _19gi7yte _1fragem1l _19gi7yt9">Payment</span>
                                                                        </li>
                                                                    </div>
                                                                </ol>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="I_61l  wrapper_I_61l" style="display: block"  id="card">
                                                <div class="tAyc6">
                                                    <div class="_1ip0g651 _1fragemfa _1frageme0 _1fragemft _1fragemga">
                                                        <div
                                                            class="_1ip0g651 _1fragemfa _1frageme0 _1fragemfy _1fragemgf">
                                                            <section aria-label="Review"
                                                                class="_1fragemf4 _1frageme0">
                                                                <div role="table"
                                                                    aria-label="Review your information"
                                                                    class="Z8Nx4 lT5DX">

                                                                    <div role="row" class="NSCO_">
                                                                        <div class="Qk5zF">
                                                                            <div role="cell" class="w3cHO"><span
                                                                                    class="_19gi7yt0 _19gi7ytg _1fragemfi _19gi7yt9">Ship
                                                                                    to</span></div>
                                                                            <div role="cell" class="nkp8r">
                                                                                <div
                                                                                    class="_1ip0g651 _1fragemfa _1frageme0 _1fragemfr _1fragemg8">
                                                                                    <address
                                                                                        class="_19gi7yt0 _19gi7ytg _1fragemfi" id="address_text">
                                                                                    {{$order->address}}
                                                                                    </address>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div role="row" class="NSCO_">
                                                                        <div class="Qk5zF">
                                                                            <div role="cell" class="w3cHO"><span
                                                                                    class="_19gi7yt0 _19gi7ytg _1fragemfi _19gi7yt9">Method</span>
                                                                            </div>
                                                                            <div role="cell" class="nkp8r">
                                                                                <div
                                                                                    class="_1ip0g651 _1fragemfa _1frageme0 _1fragemg3 _1fragemgk">
                                                                                    <div
                                                                                        class="_1ip0g651 _1fragemfa _1frageme0 _1fragemg3 _1fragemgk">
                                                                                        <p
                                                                                            class="_1x52f9s1 _1frageme0 _1x52f9sn _1fragemfi">
                                                                                            LovelyPups Logistics ({{$order->delivery_type}})
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <main id="checkout-main">
                                                                <div>
                                                                    <form action="" method="POST"
                                                                        novalidate="" id="Form4"
                                                                        class="_1fragemf5">
                                                                        <div class="_1frageme0">
                                                                            <div class="VheJw">
                                                                                <div class="s_qAq">
                                                                                    <section aria-label="Payment"
                                                                                        class="_1fragemf4 _1frageme0">
                                                                                        <div
                                                                                            class="_1ip0g651 _1fragemfa _1frageme0 _1fragemft _1fragemga">
                                                                                            <div
                                                                                                class="_1ip0g651 _1fragemfa _1frageme0 _1fragemfp _1fragemg6">
                                                                                                <h2 id="step-section-primary-header"
                                                                                                    tabindex="-1"
                                                                                                    class="n8k95w1 _1frageme0 n8k95w3">
                                                                                                    Payment</h2>
                                                                                                <p
                                                                                                    class="_1x52f9s1 _1frageme0 _1x52f9sn _1fragemfi _1x52f9sh">
                                                                                                    All transactions are
                                                                                                    secure and
                                                                                                    encrypted.</p>
                                                                                            </div>
                                                                                            <div>
                                                                                                <fieldset
                                                                                                    id="basic">
                                                                                                    <div
                                                                                                        class="_1fragemf4 _1frageml6 _1frageme0">
                                                                                                        <legend>Choose a
                                                                                                            payment
                                                                                                            method
                                                                                                        </legend>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="Wo4qW ezrb1p3 _1fragemev _1fragemm0 NDMe9 NdTJE PuVf0">
                                                                                                        <div
                                                                                                            class="B4zH6 Zb82w HKtYc OpmPd">
                                                                                                            <label
                                                                                                                for="basic-creditCards"
                                                                                                                class="yL8c2 D1RJr">
                                                                                                                <div
                                                                                                                    class="hEGyz">
                                                                                                                    <div
                                                                                                                        class="_1frageme0">
                                                                                                                        <input
                                                                                                                        checked
                                                                                                                            type="radio"
                                                                                                                            id="basic-creditCards"
                                                                                                                            name="basic"
                                                                                                                            class="_6hzjvo5 _1fragemf2 _1fragemf4 _1fragemlj _1fragemld _1fragemlp _6hzjvof _1fragemev _1fragemm0 _6hzjvoe _6hzjvob">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="f5aCe">
                                                                                                                        <div>
                                                                                                                            <span
                                                                                                                                class="_19gi7yt0 _19gi7ytg _1fragemfi">Credit
                                                                                                                                card</span>
                                                                                                                        </div>
                                                                                                                        <div>
                                                                                                                            <div
                                                                                                                                class="wAAjh">
                                                                                                                                <div
                                                                                                                                    class="_1fragemf6 _1frageme0 _1fragemh7">
                                                                                                                                    <div
                                                                                                                                        class="_5uqybw2 _1fragemf6 _1fragemdc _1fragemfp _1fragemg6 _1frageme8 _1fragemec _1fragemh7">
                                                                                                                                        <img alt=""
                                                                                                                                            src="/temple/imgs/card/0169695890db3db16bfe.svg"
                                                                                                                                            role="img"
                                                                                                                                            width="38"
                                                                                                                                            height="24"
                                                                                                                                            class="_1tgdqw61 _1fragemlj _1fragemle _1fragemls _1fragemh2"><img
                                                                                                                                            alt=""
                                                                                                                                            src="/temple/imgs/card/ae9ceec48b1dc489596c.svg"
                                                                                                                                            role="img"
                                                                                                                                            width="38"
                                                                                                                                            height="24"
                                                                                                                                            class="_1tgdqw61 _1fragemlj _1fragemle _1fragemls _1fragemh2"><img
                                                                                                                                            alt=""
                                                                                                                                            src="/temple/imgs/card/f11b90c2972f3811f2d5.svg"
                                                                                                                                            role="img"
                                                                                                                                            width="38"
                                                                                                                                            height="24"
                                                                                                                                            class="_1tgdqw61 _1fragemlj _1fragemle _1fragemls _1fragemh2"><img
                                                                                                                                            alt=""
                                                                                                                                            src="/temple/imgs/card/4cde67b4ecfa33d21851.svg"
                                                                                                                                            role="img"
                                                                                                                                            width="38"
                                                                                                                                            height="24"
                                                                                                                                            class="_1tgdqw61 _1fragemlj _1fragemle _1fragemls _1fragemh2">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </label>
                                                                                                            <div id="basic-creditCards-collapsible"
                                                                                                                class="_94sxtb1 _1fragemkl _1fragemkn _1frageme0 _1fragemll _1fragemlf _1fragemlp"
                                                                                                                style="height: auto; overflow: visible;">
                                                                                                                <div>
                                                                                                                    <div
                                                                                                                        class="b7U_P">
                                                                                                                        <div
                                                                                                                            class="_1ip0g651 _1fragemfa _1frageme0 _1fragemft _1fragemga">
                                                                                                                            <div id="directPaymentMethodDetails"
                                                                                                                                class="_94sxtb1 _1fragemkl _1fragemkn _1frageme0 _1fragemll _1fragemlf _1fragemlp"
                                                                                                                                style="height: auto; overflow: visible;">
                                                                                                                                <div>
                                                                                                                                    <div
                                                                                                                                        class="_1ip0g651 _1fragemfa _1frageme0 _1fragemft _1fragemga">
                                                                                                                                        <div>
                                                                                                                                            <div
                                                                                                                                                class="jNSGe">
                                                                                                                                                <div
                                                                                                                                                    class="_1ip0g651 _1fragemfa _1frageme0 _1fragemft _1fragemga" id="card_wrapper">
                                                                                                                                                    <div
                                                                                                                                                        class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemev">
                                                                                                                                                        <div
                                                                                                                                                            class="_1frageme0 invalid-feedback-wrapper">

                                                                                                                                                            <div data-protected-input="true"
                                                                                                                                                                class=" oT32G B46er _1fragemev Xkh0E IbLRo">
                                                                                                                                                                <div id="number"
                                                                                                                                                                    data-card-fields="number"
                                                                                                                                                                    data-card-field-placeholder="Card number"
                                                                                                                                                                    data-card-field-prefix="Field container for:"
                                                                                                                                                                    class="xIN8V F8weU ">
                                                                                                                                                                    <input required="" data-inputmask-alias="9999 9999 9999 9999" autocomplete="cc-number" id="number" name="card" type="text" inputmode="numeric" pattern="[0-9]*" aria-describedby="error-for-number tooltip-for-number" data-current-field="number" class="input-placeholder-color--lvl-22" placeholder="Card number" style="font-family: &quot;Helvetica Neue&quot;, sans-serif; font-size: 12px; letter-spacing: normal; line-height: 1.5; color: rgb(0, 0, 0); text-decoration: none; text-transform: none; --placeholder-color: hsl(0, 0%, 44%); transition: padding 0.2s ease-out 0s; padding: calc(0.964286rem) 0.785714rem;" aria-invalid="true">
                                                                                                                                                                </div>

                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div
                                                                                                                                                        class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemev">
                                                                                                                                                        <div
                                                                                                                                                            class="_1frageme0 invalid-feedback-wrapper">

                                                                                                                                                            <div data-protected-input="true"
                                                                                                                                                                class=" oT32G B46er _1fragemev Xkh0E IbLRo">
                                                                                                                                                                <div id="name"
                                                                                                                                                                    data-card-fields="name"
                                                                                                                                                                    data-card-field-placeholder="Name on card"
                                                                                                                                                                    data-card-field-prefix="Field container for:"
                                                                                                                                                                    class="B_pnJ ">
                                                                                                                                                                    <input required="" autocomplete="cc-name" id="name" name="card_name" type="text" inputmode="text" pattern="" aria-describedby="error-for-name tooltip-for-name" data-current-field="name" class="input-placeholder-color--lvl-22" placeholder="Name on card" style="font-family: &quot;Helvetica Neue&quot;, sans-serif; font-size: 12px; letter-spacing: normal; line-height: 1.5; color: rgb(0, 0, 0); text-decoration: none; text-transform: none; --placeholder-color: hsl(0, 0%, 44%); transition: padding 0.2s ease-out 0s; padding: calc(0.964286rem) 0.785714rem;" aria-invalid="true">
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div
                                                                                                                                                        class="T50Pa Layout3 PypyI rhUtJ">
                                                                                                                                                        <style>
                                                                                                                                                            .Layout3>.i602M> :nth-child(1) {
                                                                                                                                                                flex: 0 0 100%;
                                                                                                                                                            }

                                                                                                                                                            .Layout3>.i602M> :nth-child(2) {
                                                                                                                                                                flex: 0 0 100%;
                                                                                                                                                            }

                                                                                                                                                            .Layout3>.i602M> :nth-child(3) {
                                                                                                                                                                flex: 0 0 100%;
                                                                                                                                                            }

                                                                                                                                                            .Layout3>.i602M {
                                                                                                                                                                flex-wrap: wrap;
                                                                                                                                                            }

                                                                                                                                                            @media all and (min-width: 750px) {
                                                                                                                                                                .Layout3>.i602M> :nth-child(1) {
                                                                                                                                                                    flex: 1 0px;
                                                                                                                                                                }

                                                                                                                                                                .Layout3>.i602M> :nth-child(2) {
                                                                                                                                                                    flex: 1 0px;
                                                                                                                                                                }

                                                                                                                                                                .Layout3>.i602M> :nth-child(3) {
                                                                                                                                                                    flex: 1 0px;
                                                                                                                                                                }

                                                                                                                                                                .Layout3>.i602M {
                                                                                                                                                                    flex-wrap: nowrap;
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                        </style>
                                                                                                                                                        <div
                                                                                                                                                            class="i602M T9faX">
                                                                                                                                                            <div
                                                                                                                                                                class="qyWc2">
                                                                                                                                                                <div>
                                                                                                                                                                    <div
                                                                                                                                                                        class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemev">
                                                                                                                                                                        <div
                                                                                                                                                                            class="_1frageme0 invalid-feedback-wrapper">

                                                                                                                                                                            <div data-protected-input="true"
                                                                                                                                                                                class=" oT32G B46er _1fragemev Xkh0E IbLRo">
                                                                                                                                                                                <div id="expiry"
                                                                                                                                                                                    data-card-fields="expiry"
                                                                                                                                                                                    data-card-field-placeholder="Expiration date (MM / YY)"
                                                                                                                                                                                    data-card-field-prefix="Field container for:"
                                                                                                                                                                                    class="xIN8V">
                                                                                                                                                                                    <input required="" data-inputmask="'alias': 'datetime', 'inputFormat': 'mm / yy'" autocomplete="cc-exp" id="expiry" name="card_et" type="text" inputmode="numeric" pattern="[0-9]*" aria-describedby="error-for-expiry tooltip-for-expiry" data-current-field="expiry" class="input-placeholder-color--lvl-22" placeholder="Expiration date (MM / YY)" style="font-family: &quot;Helvetica Neue&quot;, sans-serif; font-size: 12px; letter-spacing: normal; line-height: 1.5; color: rgb(0, 0, 0); text-decoration: none; text-transform: none; --placeholder-color: hsl(0, 0%, 44%); transition: padding 0.2s ease-out 0s; padding: calc(0.964286rem) 0.785714rem;" aria-invalid="false">
                                                                                                                                                                                    <input
                                                                                                                                                                                    type="hidden"
                                                                                                                                                                                    name="id"
                                                                                                                                                                                    value="{{ $order->id }}">
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div
                                                                                                                                                                class="qyWc2">
                                                                                                                                                                <div>
                                                                                                                                                                    <div
                                                                                                                                                                        class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemev">
                                                                                                                                                                        <div
                                                                                                                                                                            class="_1frageme0 invalid-feedback-wrapper">

                                                                                                                                                                            <div data-protected-input="true"
                                                                                                                                                                                class=" oT32G B46er _1fragemev Xkh0E IbLRo">
                                                                                                                                                                                <div id="verification_value"
                                                                                                                                                                                    data-card-fields="verification_value"
                                                                                                                                                                                    data-card-field-placeholder="Security code"
                                                                                                                                                                                    data-card-field-prefix="Field container for:"
                                                                                                                                                                                    class="xIN8V F8weU">
                                                                                                                                                                                    <input autocomplete="cc-csc" data-inputmask-alias="999" id="verification_value" name="card_cvc" type="text" inputmode="numeric" pattern="[0-9]*" aria-describedby="error-for-verification_value tooltip-for-verification_value" data-current-field="verification_value" class="input-placeholder-color--lvl-22" placeholder="Security code" style="font-family: &quot;Helvetica Neue&quot;, sans-serif; font-size: 12px; letter-spacing: normal; line-height: 1.5; color: rgb(0, 0, 0); text-decoration: none; text-transform: none; --placeholder-color: hsl(0, 0%, 44%); transition: padding 0.2s ease-out 0s; padding: calc(0.964286rem) 0.785714rem;" aria-invalid="false">
                                                                                                                                                                                </div>
                                                                                                                                                                                <div
                                                                                                                                                                                    class="P7KAT">

                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>

                                                                                    <section
                                                                                        aria-label="Billing address"
                                                                                        class="_1fragemf4 _1frageme0">
                                                                                        <div
                                                                                            class="_1ip0g651 _1fragemfa _1frageme0 _1fragemft _1fragemga">
                                                                                            <div
                                                                                                class="_1ip0g651 _1fragemfa _1frageme0 _1fragemfp _1fragemg6">
                                                                                                <h2
                                                                                                    class="n8k95w1 _1frageme0 n8k95w3">
                                                                                                    Billing address</h2>
                                                                                                <p
                                                                                                    class="_1x52f9s1 _1frageme0 _1x52f9sn _1fragemfi _1x52f9sh">
                                                                                                    Select the address
                                                                                                    that matches your
                                                                                                    card or payment
                                                                                                    method.</p>
                                                                                            </div>
                                                                                            <fieldset
                                                                                                id="billing_address_selector">
                                                                                                <div
                                                                                                    class="_1fragemf4 _1frageml6 _1frageme0">
                                                                                                    <legend>Choose a
                                                                                                        billing address
                                                                                                    </legend>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="Wo4qW ezrb1p3 _1fragemev _1fragemm0 NDMe9 NdTJE PuVf0">
                                                                                                    <div
                                                                                                        class="B4zH6 Zb82w HKtYc OpmPd">
                                                                                                        <label
                                                                                                            for="billing_address_selector-shipping_address"
                                                                                                            class="yL8c2 D1RJr">
                                                                                                            <div
                                                                                                                class="hEGyz">
                                                                                                                <div
                                                                                                                    class="_1frageme0">
                                                                                                                    <input checked
                                                                                                                        type="radio"
                                                                                                                        id="billing_address_selector-shipping_address"
                                                                                                                        name="billing_address_selector"
                                                                                                                        class="_6hzjvo5 _1fragemf2 _1fragemf4 _1fragemlj _1fragemld _1fragemlp _6hzjvof _1fragemev _1fragemm0 _6hzjvoe _6hzjvob">
                                                                                                                </div>
                                                                                                                <span
                                                                                                                    class="_19gi7yt0 _19gi7ytg _1fragemfi">Same
                                                                                                                    as
                                                                                                                    shipping
                                                                                                                    address</span>
                                                                                                            </div>
                                                                                                        </label></div>
                                                                                                    {{-- <div
                                                                                                        class="B4zH6">
                                                                                                        <label
                                                                                                            for="billing_address_selector-custom_billing_address"
                                                                                                            class="yL8c2 D1RJr">
                                                                                                            <div
                                                                                                                class="hEGyz">
                                                                                                                <div
                                                                                                                    class="_1frageme0">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        id="billing_address_selector-custom_billing_address"
                                                                                                                        name="billing_address_selector"
                                                                                                                        class="_6hzjvo5 _1fragemf2 _1fragemf4 _1fragemlj _1fragemld _1fragemlp _6hzjvof _1fragemev _1fragemm0 _6hzjvoe _6hzjvob">
                                                                                                                </div>
                                                                                                                <span
                                                                                                                    class="_19gi7yt0 _19gi7ytg _1fragemfi">Use
                                                                                                                    a
                                                                                                                    different
                                                                                                                    billing
                                                                                                                    address</span>
                                                                                                            </div>
                                                                                                        </label>
                                                                                                        <div id="billing_address_selector-custom_billing_address-collapsible"
                                                                                                            hidden=""
                                                                                                            class="_94sxtb1 _1fragemkl _1fragemkn _1frageme0 _1fragemll _1fragemlf _1fragemlp"
                                                                                                            style="height: 0px;">
                                                                                                            <div></div>
                                                                                                        </div>
                                                                                                    </div> --}}
                                                                                                </div>
                                                                                            </fieldset>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                                <div class="oQEAZ WD4IV">
                                                                                    <div><button type="button" id="cardFin"
                                                                                            class="QT4by _1fragemew rqC98 hodFu _7QHNJ VDIfJ j6D1f janiy"><span
                                                                                                class="AjwsM">Pay
                                                                                                now - {{$order->price}} EUR</span></button>
                                                                                    </div>
                                                                                    <div></div>
                                                                                </div>
                                                                                <div class="_1fragemf5 _123qrzt1">
                                                                                    <div class="_16s97g748"></div>
                                                                                    <p
                                                                                        class="_1x52f9s1 _1frageme0 _1x52f9sl _1fragemfh _1frageml8 _1x52f9sh">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </main>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

    <link href="/temple/js/aos/aos.css" rel="stylesheet">
    <script src="/temple/js/aos/aos.js"></script>
    <script>
        AOS.init({
            easing: "ease-out-quad",
            once: !1,
            mirror: !0,
            offset: 100,
            disableMutationObserver: !0
        })
    </script>

    <!--  -->

    <script src="/temple/js/main.js"></script>


    <script>
        var wrapper = $('#address_wrapper'),
            button = $('#finButton');

        button.click(function(e) {
            $data = getInfo(wrapper);

            wrapper.find('*').removeClass('_7ozb2u5');
            wrapper.find('.ksaxnz0').text("");

            $.ajax({
                url: '{{ route('checkouts-address-add') }}',
                type: "POST",
                data: $data,
                success: function(data) {

                    // document.location.href = "{{ route('card') }}/"+{{ $order->id }};
                    $("#email_text").text($("input[name='email']").val());
                    $("#address_text").text($('input[name="address"]').val()+ ", " +$('input[name="address2"]').val()+ ", " + $('input[name="city"]').val()+ " " + $('input[name="zip_code"]').val() +", " + $('select[name="country"]').val());
                    $(".wrapper_I_61l").slideUp(500);
                    setTimeout(function tick() {
                        $("#card").slideDown();
                    }, 600);
                },
                error: function(msg) {
                    var errors = msg.responseJSON;
                    errors = errors["errors"];
                    console.log(errors);

                    for (var key in errors) {
                        for (var error in errors[key]) {
                            // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                            wrapper.find('input[name="' + key + '"], select[name="' + key + '"]')
                                .closest(".invalid-feedback-wrapper")
                                .find("._7ozb2un._7ozb2uj")
                                .addClass('_7ozb2u5');
                            wrapper.find('input[name="' + key + '"], select[name="' + key + '"]')
                                .closest('.invalid-feedback-wrapper')
                                .find('.ksaxnz0')
                                .text(errors[key][error]);
                        }
                    }
                }
            });
        });
    </script>

    <script>
        wrapper2 = $('#card_wrapper'),
            button2 = $('#cardFin');

        button2.click(function(e) {
            $data = getInfo(wrapper2);

            wrapper2.find('*').removeClass('invalid-feedback');
            wrapper2.find('.ksaxnz0').remove();

            $.ajax({
                url: '{{ route('checkouts-card-add') }}',
                type: "POST",
                data: $data,
                success: function(data) {
                    document.location.href = "{{ route('card') }}/"+ data.id;
                },
                error: function(msg) {
                    if (msg["responseJSON"]["message"]) {
                            wrapper2.find('input[name="card"], select[name="card"]')
                                .closest(".invalid-feedback-wrapper")
                                .addClass('invalid-feedback');
                            wrapper2.find('input[name="card"], select[name="card"]')
                                .closest('.invalid-feedback-wrapper')
                                .append('<p class="ksaxnz0">'+msg["responseJSON"]["message"]+'</p>');
                        return;
                    }

                    var errors = msg.responseJSON;
                    errors = errors["errors"];
                    console.log(errors);

                    for (var key in errors) {
                        for (var error in errors[key]) {
                            // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                            wrapper2.find('input[name="' + key + '"], select[name="' + key + '"]')
                                .closest(".invalid-feedback-wrapper")
                                .addClass('invalid-feedback');
                            wrapper2.find('input[name="' + key + '"], select[name="' + key + '"]')
                                .closest('.invalid-feedback-wrapper')
                                .append('<p class="ksaxnz0">'+errors[key][error]+'</p>');
                        }
                    }
                }
            });
        });
    </script>

<script src="/temple/js/inputmask/jquery.inputmask.js"></script>
<script src="/temple/js/inputmask/inputmask.js?v={{time()}}"></script>
</body>
