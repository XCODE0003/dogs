@extends('layouts.layout', ['title' => $settings->name.'', 'description' => ''])
@section('head')

@endsection

@section('content')

<div class="sections-wrapper">
    <!-- BEGIN content_for_index -->
    <div id="shopify-section-1558626497917" class="shopify-section index-section--hero">
        <div data-section-id="1558626497917" data-section-type="video-section"
            class="video-parent-section hero hero--1558626497917 hero--450px hero--mobile--auto aos-init  loaded"
            data-aos="hero__animation">
<style>
.hero__media video{
        position: absolute;
    top: 0;
    left: 0;
    width: 300%;
    left: -100%;
    max-width: none;
    width: 100%;
    height: 100%;
    left: auto;    object-position: initial;
    top: 0;
}
</style>
            <div class="hero__media hero__media--1558626497917">
                {{-- <iframe id="YouTubeVideo-1558626497917" data-video-id="xZMsoj4uy2o?start=33" frameborder="0"
                    allowfullscreen="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    title="Spring Picnic with {{$settings->name}}!" width="1080" height="1080"
                    src="https://www.youtube.com/embed/xZMsoj4uy2o?start=33&end=200?autohide=0&amp;branding=0&amp;cc_load_policy=0&amp;controls=0&amp;fs=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;quality=hd1080&amp;rel=0&amp;showinfo=0&amp;wmode=opaque&amp;enablejsapi=1&amp;"
                    tabindex="-1"></iframe> --}}
                    <video no-controls autoplay loop playsinline muted class="video" id="video">
    <source type="video/mp4" src="/1.mp4">
  </video>
            </div>

            <div class="hero__text-wrap">
                <div class="page-width">
                    <div class="hero__text-content vertical-bottom horizontal-center"></div>
                </div>
            </div>

        </div>

            <div id="CollectionSection-1626072814e8acc805" data-section-id="1626072814e8acc805"
                data-section-type="featured-collection" data-scrollable="false"
                data-product-sliders-mobile="false" data-paginate="false" data-paginate-by="12"

                data-aos="" class="aos-init ">
                <div class="page-width">
                    <div class="section-header">
                        <h2></h2>
                        <h2 class="section-header__title appear-delay">
                            AVAILABLE
                        </h2>
                        <div
                            class="rte section-header__description section-header__description--large appear-delay-1">
                            PUPPIES
                        </div>
                    </div>
                </div>
                <div class="page-width page-width--flush">
                    <div data-pagination-wrapper="">
                        <div class="grid grid--uniform grid--scattered-large-4 grid--scattered-small-2 appear-delay-3 small--grid--flush"
                            data-product-container="">
                            @foreach ($products as $product)

                            <div class="grid__item grid-product small--one-half medium-up--one-third aos-init "
                                data-aos="" data-product-grid="">
                                <div class="grid-product__content"><a
                                        href="{{route('product', ['slug' => $product->slug])}}"
                                        class="grid-product__link quick-product__btn js-screen-open-product-6894180728919 js-no-transition">
                                        <div class="product-slider product-slider--init">
                                            <div class="product-slide" style="" tabindex="-1"
                                                role="option">
                                                <div class="image-wrap loaded">
                                                    <div class="grid__image-ratio grid__image-ratio--square lazyloaded"
                                                        style="background-image: url(&quot;{{$product->preview}}&quot;);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="grid-product__meta"><a
                                            href="{{route('product', ['slug' => $product->slug])}}"
                                            class="grid-product__link quick-product__btn js-screen-open-product-6894180728919 js-no-transition">
                                            <div class="grid-product__title">{{$product->title}}</div>
                                        </a>
                                        <div class="product-single__vendor"><a
                                                href="{{route('product', ['slug' => $product->slug])}}"
                                                class="grid-product__link quick-product__btn js-screen-open-product-6894180728919 js-no-transition"></a><a
                                                href="{{route('collection', ['slug' => $product->category->slug])}}"
                                                title="POMERANIAN">{{$product->category->title}}</a>
                                        </div>
                                        <div class="grid-product__price"><span>
                                            €{{$product->price}} EUR
                                            </span></div>
                                    </div>
                                </div>
                            </div>

                            @endforeach


                        </div>
                        <div class="text-center">
                            <a href="{{route('collections-all')}}?status=available"
                                class="btn">
                                View all
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div id="shopify-section-16261507187158cc35" class="shopify-section">
        <div class="index-section">
            <div data-aos="" class="aos-init ">
                <div class="page-width">
                    <div class="section-header">
                        <h2 class="section-header__title appear-delay">
                            BREEDS
                        </h2>
                    </div>
                </div>
                <div class="page-width">
                    <div class="skrim-grid appear-delay-2">

                        <div class="skrim__item">
                            <a href="{{route('collections-all')}}?status=available"
                                class="skrim__link loaded">
                                <div class="skrim__overlay grid__image lazyloaded"
                                    style="background-position: center top; background-image: url(&quot;/temple/imgs/BIRCH_MORKIE_M05_360x.jpg&quot;);">
                                    <picture style="display: none;" class="loaded">
                                        <source sizes="275px">
                                        <img alt="" class="lazyautosizes lazyloaded"
                                            data-sizes="auto" data-parent-fit="cover"
                                            sizes="275px">
                                    </picture>
                                </div>
                                <noscript>
                                    <div class="skrim__overlay grid__image"
                                        style="background-image: url(/temple/imgs/BIRCH_MORKIE_M05_360x.jpg); background-position: top center;">
                                    </div>
                                </noscript>
                                <div class="skrim__title">
                                    <div class="skrim__underline-me">
                                        AVAILABLE NOW
                                    </div>
                                </div>
                            </a>
                        </div>

                        @foreach ($categorys as $category)
                        <div class="skrim__item">
                            <a href="{{route('collection', ['slug' => $category->slug])}}?status=available"
                                class="skrim__link loaded">
                                <div class="skrim__overlay grid__image lazyloaded"
                                    style="background-position: center top; background-image: url(&quot;{{$category->preview}}&quot;);">
                                    <picture style="display: none;" class="loaded">
                                        <source sizes="275px">
                                        <img alt="" class="lazyautosizes lazyloaded"
                                            data-sizes="auto" data-parent-fit="cover"
                                            sizes="275px">
                                    </picture>
                                </div>
                                <noscript>
                                    <div class="skrim__overlay grid__image"
                                        style="background-image: url({{$category->preview}}); background-position: top center;">
                                    </div>
                                </noscript>
                                <div class="skrim__title">
                                    <div class="skrim__underline-me">
                                        {{$category->title}}
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        <div class="skrim__item">
                            <a href="{{route('collections-all')}}"
                                class="skrim__link loaded">
                                <div class="skrim__overlay grid__image lazyloaded"
                                    style="background-position: center top; background-image: url(&quot;/temple/imgs/BLUE_POMSKY_M06_3aa21180-4579-40c1-9753-e39c9e52a7d7_360x.jpg&quot;);">
                                    <picture style="display: none;" class="loaded">
                                        <source sizes="275px">
                                        <img alt="" class="lazyautosizes lazyloaded"
                                            data-sizes="auto" data-parent-fit="cover"
                                            sizes="275px">
                                    </picture>
                                </div>
                                <noscript>
                                    <div class="skrim__overlay grid__image"
                                        style="background-image: url(/temple/imgs/BLUE_POMSKY_M06_3aa21180-4579-40c1-9753-e39c9e52a7d7_360x.jpg); background-position: top center;">
                                    </div>
                                </noscript>
                                <div class="skrim__title">
                                    <div class="skrim__underline-me">
                                        PREVIOUS PUPPIES
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div id="shopify-section-1626419369008643ad" class="shopify-section index-section--hero">
        <div data-section-id="1626419369008643ad" data-section-type="slideshow-section"
            data-align-top="true">
            <div class="slideshow-wrapper hero-wrapper">

                <div class="hero-natural--1626419369008643ad">
                    <div id="Slideshow-1626419369008643ad"
                        class="hero hero--1626419369008643ad slick-initialized slick-slider is-init aos-init loaded "
                        data-natural="true" data-autoplay="false" data-speed="7000"
                        data-aos="hero__animation" data-slide-count="1">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 3543.33px; transform: translate3d(0px, 0px, 0px);">
                                <div class="slideshow__slide slideshow__slide--1626419369008643ad-0 slick-slide slick-current slick-active"
                                    data-id="1626419369008643ad-0" data-slick-index="0"
                                    aria-hidden="false" style="width: 3543.33px;" tabindex="-1"
                                    role="option">
                                    <div
                                        class="hero__image-wrapper hero__image-wrapper--overlay loaded">
                                        <img class="hero__image hero__image--1626419369008643ad-0 lazyautosizes lazyloaded"
                                            src="/temple/imgs/land/jio_1400x.jpg"
                                            data-aspectratio="0.1" data-sizes="auto"
                                            data-parent-fit="cover" alt=""
                                            sizes="1400px">
                                        <noscript>
                                            <img class="hero__image hero__image--1626419369008643ad-0"
                                                src="/temple/imgs/land/jio_1400x.jpg"
                                                alt="">
                                        </noscript>
                                    </div>
                                    <div class="hero__text-wrap">
                                        <div class="page-width">
                                            <div
                                                class="hero__text-content vertical-bottom horizontal-center">
                                                <div class="hero__text-shadow "
                                                    >
                                                    <h2 class="h1 hero__title">
                                                        SPECIAL ORDER
                                                    </h2>
                                                    <div class="hero__subtitle">
                                                        TO LOCATE A PUPPY THAT IS CURRENTLY
                                                        UNAVAILABLE
                                                    </div>
                                                    <div class="hero__link">
                                                        <a href="{{route('collections-all')}}"
                                                            class="btn" tabindex="0">
                                                            SEE MORE
                                                        </a>
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
    <div id="shopify-section-1559155590855" class="shopify-section">
        <div class="index-section index-section--alt">

            <div class="page-width aos-init " data-aos="">
                <div class="section-header aos-init" data-aos="">
                    <h2 class="section-header__title appear-delay">
                        Why {{$settings->name}}?
                    </h2>
                </div>
                <div class="grid grid--uniform text-center">
                    <div data-aos=""
                        class="grid__item grid-column medium-up--one-half appear-delay-1 aos-init ">
                        <div class="h2">Reason one</div>
                        <div class="rte-setting text-spacing">
                            <p>We have deep historic roots in the dog industry for years in Europe.
                                With the experience
                                gained from participating in dog shows, we have made special bond
                                and connections with the
                                breeders that are ethical and prohibit inbreeding who can entrust us
                                with excellent quality
                                puppies.</p>
                        </div>
                    </div>
                    <div data-aos=""
                        class="grid__item grid-column medium-up--one-half appear-delay-2 aos-init ">
                        <div class="h2">Reason two</div>
                        <div class="rte-setting text-spacing">
                            <p>We have partnership with prestigious veterinarians who cooperate with
                                our respected and
                                reputable breeders who keep all the puppies in excellent health
                                condition. Our care team
                                members have outstanding experiences to provide the best care for
                                our puppies at the shop.
                                Along with our care team, our veterinarians consistently keep our
                                puppies in top notch shape
                                and condition until a guardian receives their puppy.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div id="shopify-section-16266595851338d85d" class="shopify-section index-section--flush">
        <div class="map-section aos-init " data-section-id="16266595851338d85d"
            data-section-type="map" data-aos="map-section__animation">
            <div class="map-section__overlay-wrapper">
                <div class="map-section__overlay">
                    <div class="h2 appear-delay">CONTACT US</div>
                    <div class="rte rte-setting appear-delay-1">
                        <p>If you have any questions or inquiries a member of staff will always be
                            happy to assist. We
                            will be sure to get back to you as soon as possible.</p>
                        <p><strong>Telephone<br></strong>{{$settings->phone}} {{$settings->admin_name}}<br></p>
                        <p><strong>Available Messenger<br></strong>WHATSAPP / TEXT</p>
                        </strong>TELEGRAM / TEXT

                    </div>
                </div>
            </div>
            <div id="Map-16266595851338d85d" data-map=""
                class="map-section__container map-16266595851338d85d" data-address-setting=""
                data-api-key=""></div>
        </div>


    </div>
</div>
@endsection
