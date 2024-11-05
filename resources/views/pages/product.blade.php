@extends('layouts.layout', ['title' => $settings->name . ' | ' . $product->title, 'description' => ''])
@section('head')
@endsection

@section('content')
    <div id="shopify-section-product-template" class="shopify-section">
        <div id="ProductSection-6897423056983" class="product-section" data-section-id="6897423056983"
            data-section-type="product-template" data-variant-type="button" data-images-stacked="true" data-video-style="muted"
            data-enable-history-state="true">
            {{-- <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Product",
          "offers": [{
              "@type": "Offer",
              "availability": "http://schema.org/InStock",
              "price": 6400.0,
              "priceCurrency": "EUR",
              "priceValidUntil": "2023-08-18",
              "url": "https:\/\/www.rollypups.com\/products\/dakota-female-1?variant=40222525096023"
            },
            {
              "@type": "Offer",
              "availability": "http://schema.org/InStock",
              "price": 1000.0,
              "priceCurrency": "EUR",
              "priceValidUntil": "2023-08-18",
              "url": "https:\/\/www.rollypups.com\/products\/dakota-female-1?variant=40222525128791"
            }
          ],
          "brand": "POODLE",
          "sku": "",
          "name": "DAKOTA - FEMALE",
          "description": "\n\n\n\nBREED\nPOODLE\n\n\nSEX\nFEMALE\n\n\nNAME\nDAKOTA\n\n\n\nAGE\n3 MONTHS\n\n\nCOLOR\nCREAM\n\n\n\n\n \n* For inquiries, TEXT \/ WhatsApp atBRYAN +1 (678) 631-7877\n* Deposit is Non-Refundable. Please be sure of adding the puppy as a family member before you put a deposit and make the commitment.  \n* Deposit is good for 7 days to reserve the initial puppy. After 7 days, the puppy is no longer reserved, if not paid in full. (Please speak to our representative for further details.)\n* Even with full price purchase, $300 from the purchase price is considered as deposit and is not refundable. \nRollyteacuppuppies.com only uploads the puppy we have on hand. We do NOT use photoshop to visually alter the appearance of the puppy. We are also against using a stock photo to give the wrong impression of the actual puppy you will receive.",
          "category": "",
          "url": "https://www.rollypups.com/products/dakota-female-1",
          "image": {
            "@type": "ImageObject",
            "url": "https://www.rollypups.com/cdn/shop/files/DAKOTA_POODLE_F03_1024x1024.jpg?v=1690943929",
            "image": "https://www.rollypups.com/cdn/shop/files/DAKOTA_POODLE_F03_1024x1024.jpg?v=1690943929",
            "name": "DAKOTA - FEMALE",
            "width": 1024,
            "height": 1024
          }
        }
      </script> --}}
            <div class="page-content">
                <div class="page-width">

                    <div class="grid">
                        <div class="grid__item medium-up--three-fifths">

                            <div data-product-images data-zoom="true">
                                <div class="product__photos product__photos--beside" id="example5">
                                    <div class="sp-slides">
                                        <div class="sp-slide">
                                            <img class="sp-image" src="/temple/js/slider-photo/css/images/blank.gif"
                                                data-src="{{ $product->preview }}" data-retina="{{ $product->preview }}" />
                                        </div>
                                        @foreach ($product->photos as $photo)
                                            <div class="sp-slide">
                                                <img class="sp-image" src="/temple/js/slider-photo/css/images/blank.gif"
                                                    data-src="{{ $photo->path }}" data-retina="{{ $photo->path }}" />
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="sp-thumbnails">
                                        <div class="sp-thumbnail">
                                            <div class="sp-thumbnail-image-container">
                                                <img class="sp-image" src="/temple/js/slider-photo/css/images/blank.gif"
                                                    data-src="{{ $product->preview }}"
                                                    data-retina="{{ $product->preview }}" />
                                            </div>
                                        </div>
                                        @foreach ($product->photos as $photo)
                                            <div class="sp-thumbnail">
                                                <div class="sp-thumbnail-image-container">
                                                    <img class="sp-image" src="/temple/js/slider-photo/css/images/blank.gif"
                                                        data-src="{{ $photo->path }}" data-retina="{{ $photo->path }}" />
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="grid__item medium-up--two-fifths product-single__sticky">
                            <div class="product-single__meta">
                                <div class="product-single__header small--text-center">
                                    <div class="product-single__vendor">
                                        {{ $product->category->title }}
                                    </div>
                                    <h1 class="h1 product-single__title">
                                        {{ $product->title }}
                                    </h1>
                                    <div class="product-single__prices">
                                        <span class="visually-hidden" data-price-a11y="">Regular price</span>
                                        <span class="product__price" id="product__price" data-product-price="">
                                            €{{ $product->price }} EUR
                                        </span>
                                    </div>

                                    <div data-product-unit-wrapper="" class="product__unit-price hide">/
                                    </div>
                                </div>

                                <form method="post" action="/cart/add" id="AddToCartForm-6897423056983"
                                    accept-charset="UTF-8" class="product-single__form small--text-center"
                                    enctype="multipart/form-data"><input type="hidden" name="form_type"
                                        value="product"><input type="hidden" name="utf8" value="✓">
                                    <input type="hidden" name="data-product-id" value="6897423056983">
                                    @if ($product->status == 'not_available')
                                        <div class="variant-wrapper variant-wrapper-- js">
                                            <label class="variant__label" for="ProductSelect-6901793390679-option-0">
                                                Payment
                                            </label>

                                            <fieldset class="variant-input-wrap" name="Payment" data-index="option1"
                                                data-handle="payment">
                                                <legend class="hide">Payment</legend>
                                                <div class="variant-input" data-index="option1" data-value="Full Price">
                                                    <input type="radio" value="Full Price" data-index="option1"
                                                        name="Payment" data-variant-input=""
                                                        class="variant__input-6901793390679 disabled"
                                                        id="ProductSelect-6901793390679-option-payment-Full+Price"><label
                                                        for="ProductSelect-6901793390679-option-payment-Full+Price"
                                                        class="disabled">Full Price</label>
                                                </div>
                                                <div class="variant-input" data-index="option1" data-value="Deposit">
                                                    <input type="radio" value="Deposit" data-index="option1"
                                                        name="Payment" data-variant-input=""
                                                        class="variant__input-6901793390679 disabled"
                                                        id="ProductSelect-6901793390679-option-payment-Deposit"><label
                                                        for="ProductSelect-6901793390679-option-payment-Deposit"
                                                        class="disabled">Deposit</label>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <button type="button" name="add" data-add-to-cart=""
                                            class="btn btn--full add-to-cart" disabled="disabled">
                                            <span data-add-to-cart-text="" data-default-text="Add to bag">
                                                Found Home
                                            </span>
                                        </button>
                                    @elseif($product->status == 'available')
                                        <div class="variant-wrapper variant-wrapper-- js">
                                            <label class="variant__label" for="ProductSelect-6897423056983-option-0">
                                                Payment
                                            </label>

                                            <fieldset class="variant-input-wrap" name="Payment" data-index="option1"
                                                data-handle="payment" id="ProductSelect-6897423056983-option-0">
                                                <legend class="hide">Payment</legend>
                                                <div class="variant-input" data-index="option1" data-value="full">
                                                    <input type="radio" checked="checked" value="Full Price"
                                                        data-index="option1" name="Payment" data-variant-input=""
                                                        class="variant__input-6897423056983"
                                                        id="ProductSelect-6897423056983-option-payment-Full+Price"><label
                                                        for="ProductSelect-6897423056983-option-payment-Full+Price">Full
                                                        Price</label>
                                                </div>
                                                <div class="variant-input" data-index="option1" data-value="deposit">
                                                    <input type="radio" value="Deposit" data-index="option1"
                                                        name="Payment" data-variant-input=""
                                                        class="variant__input-6897423056983"
                                                        id="ProductSelect-6897423056983-option-payment-Deposit"><label
                                                        for="ProductSelect-6897423056983-option-payment-Deposit">Deposit</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <select name="id" id="ProductSelect-6897423056983"
                                            class="product-single__variants no-js" data-product-select="">
                                            <option value="40222525096023" selected="selected">
                                                Full Price - €6,400 EUR
                                            </option>
                                            <option value="40222525128791">
                                                Deposit - €1000 EUR
                                            </option>
                                        </select>
                                        <button type="button" name="add" data-add-to-cart=""
                                            class="btn btn--full add-to-cart" onclick="basket({{$product->id}});">
                                            <span data-add-to-cart-text="" data-default-text="Add to bag">
                                                Add to bag
                                            </span>
                                        </button>
                                    @endif
                                    <div class="shopify-payment-terms product__policies"></div>
                                    <textarea class="hide" aria-hidden="true" aria-label="Product JSON" data-variant-json="">      [{"id":40222525096023,"title":"Full Price","option1":"Full Price","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"DAKOTA - FEMALE - Full Price","public_title":"Full Price","options":["Full Price"],"price":640000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","requires_selling_plan":false,"selling_plan_allocations":[]},{"id":40222525128791,"title":"Deposit","option1":"Deposit","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"DAKOTA - FEMALE - Deposit","public_title":"Deposit","options":["Deposit"],"price":100000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","requires_selling_plan":false,"selling_plan_allocations":[]}]</textarea>
                                </form>

                                <div class="product-single__description rte">
                                    <meta charset="UTF-8">
                                    @if (count($product->characteristics) != 0)
                                        <div class="table-wrapper">
                                            <table height="115" data-mce-fragment="1">
                                                <tbody data-mce-fragment="1">
                                                    @foreach ($product->characteristics as $characteristic)
                                                        <tr data-mce-fragment="1">
                                                            <td data-mce-fragment="1">{{ $characteristic->title }}</td>
                                                            <td data-mce-fragment="1">{{ $characteristic->text }}</td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <p data-mce-fragment="1">&nbsp;</p>
                                    @endif
                                    <p data-mce-fragment="1"><span style="color: #00aaff;" data-mce-fragment="1"
                                            data-mce-style="color: #00aaff;"><strong data-mce-fragment="1">* For
                                                inquiries, TEXT / Telegram at<br
                                                    data-mce-fragment="1">        t.me/straubpups 
                                                  
                                                     ({{ $settings->admin_name }})</strong></span></p>
                                    <p data-mce-fragment="1"><span style="color: #990000;" data-mce-fragment="1"
                                            data-mce-style="color: #990000;">* Deposit is Non-Refundable. Please be sure of
                                            adding the puppy as a family member before you put a deposit and make
                                            the&nbsp;commitment. &nbsp;</span></p>
                                    <p data-mce-fragment="1"><span style="color: #990000;" data-mce-fragment="1"
                                            data-mce-style="color: #990000;">* Deposit is good for 7 days to reserve the
                                            initial puppy. After 7 days, the puppy is no longer reserved, if not paid in
                                            full. (Please speak to our&nbsp;<span color="#ff0000"
                                                data-mce-fragment="1">representative for further details.)</span></span>
                                    </p>
                                    <p data-mce-fragment="1"><span style="color: #990000;" data-mce-fragment="1"
                                            data-mce-style="color: #990000;">* Even with full price purchase, €300 from
                                            the purchase price is considered as deposit and is not refundable.&nbsp;</span>
                                    </p>
                                    <p data-mce-fragment="1"><span data-mce-fragment="1">{{ $settings->name }} only
                                            uploads the puppy we have on hand. We do NOT use photoshop to visually alter the
                                            appearance of the puppy. We are also against using a stock photo to give the
                                            wrong impression of the actual puppy you will receive.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div id="shopify-section-product-sections" class="shopify-section">
        <div id="ProductSections-6897423056983">
            <div class="sections-wrapper page-blocks">
                <div>
                    <div class="index-section index-section--alt">
                        <div class="page-width aos-init" data-aos="">
                            <div class="section-header aos-init" data-aos="">
                                <h2 class="section-header__title appear-delay">
                                    Why {{ $settings->name }}?
                                </h2>
                            </div>
                            <div class="grid grid--uniform text-center">
                                <div class="grid__item grid-column medium-up--one-half appear-delay-1">
                                    <div class="h2">Reason one</div>
                                    <div class="rte-setting text-spacing">
                                        <p>We have deep historic roots in the dog industry for years in Europe. With the
                                            experience gained from participating in dog shows, we have made special bond and
                                            connections with the breeders that are ethical and prohibit inbreeding who can
                                            entrust us with excellent quality puppies.</p>
                                    </div>
                                </div>
                                <div class="grid__item grid-column medium-up--one-half appear-delay-2">
                                    <div class="h2">Reason two</div>
                                    <div class="rte-setting text-spacing">
                                        <p>We have partnership with prestigious veterinarians who cooperate with our
                                            respected and reputable breeders who keep all the puppies in excellent health
                                            condition. Our care team members have outstanding experiences to provide the
                                            best care for our puppies at the shop. Along with our care team, our
                                            veterinarians consistently keep our puppies in top notch shape and condition
                                            until a guardian receives their puppy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="index-section">
                        <div class="page-width feature-row-wrapper">
                            <div class="feature-row">
                                <div class="feature-row__item text-center feature-row__text feature-row__text--right aos-init"
                                    data-aos="">
                                    <div class="h1 appear-delay">Our Standards</div>
                                    <div class="rte appear-delay-1">
                                        <p>A very high and strict standards are implemented on selecting each puppy from the
                                            litter. We personally visit the breeders and hand select the most outstanding
                                            pups. We travel hours to find the most exceptional pup from the breeder that
                                            specializes in a single breed; sometimes returning empty handed considering the
                                            fact that we could not find ones that qualifies our standards despite the
                                            reputable associated breeders we are partners with. Regardless of our
                                            stubbornness, the guidelines to our standards excels our reputation and success
                                            in the industry.</p>
                                    </div>
                                    <div class="appear-delay-2">
                                        <a href="{{ route('about-rolly') }}" class="btn">
                                            Read more
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-row__item feature-row__item--overlap-images aos-init"
                                    style="max-width: 700px" data-aos="">
                                    <div><a href="{{ route('about-rolly') }}">
                                            <div class="image-wrap loaded"
                                                style="height: 0; padding-bottom: 66.66666666666667%;">
                                                <img class="feature-row__image lazyautosizes lazyloaded"
                                                    src="/temple/imgs/12312312_1080x.jpg">
                                            </div>
                                        </a></div>
                                    <div><a href="{{ route('about-rolly') }}">
                                            <div class="image-wrap loaded"
                                                style="height: 0; padding-bottom: 66.66666666666667%;">
                                                <img class="feature-row__image lazyautosizes lazyloaded"
                                                    src="/temple/imgs/jio_900x.jpg">
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div id="shopify-section-product-recommendations" class="shopify-section">
        <div data-subsection="" id="Recommendations-6897423056983" data-section-id="6897423056983"
            data-section-type="product-recommendations" data-enable="true" data-product-id="6897423056983"
            data-url="/recommendations/products" data-limit="13">

            <div data-subsection="" data-section-id="6897423056983" data-section-type="featured-collection"
                data-scrollable="true" data-product-sliders-mobile="false" data-paginate="false" class="index-section">

                <div class="page-width">
                    <div class="section-header aos-init" data-aos="">
                        <h2 class="section-header__title appear-delay">
                            You may also like
                        </h2>
                    </div>
                </div>

                <div class="slider-cards multiple-items" id="multiple-items" style="display: flex;">

                    @foreach ($productsCatrgory as $p)
                        <div class="slider-card">
                            <img class="card-img" src="{{ $p->preview }}" alt="{{ $p->title }}" />
                            <div class="grid-product__meta">
                                <a href="{{ route('product', ['slug' => $p->slug]) }}">
                                    <div class="grid-product__title">{{ $p->title }}</div>
                                </a>
                                <div class="product-single__vendor">
                                    <a href=""></a>
                                    <a href="{{ route('collection', ['slug' => $p->category->slug]) }}"
                                        title="{{ $p->category->title }}">{{ $p->category->title }}</a>
                                </div>
                                <div class="grid-product__price"><span>
                                    €{{ $p->price }} EUR
                                    </span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a onclick="window.history.back();" class="btn btn--tertiary">
            ⟵ To Back
        </a>
    </div>

    <link rel="stylesheet" href="/temple/js/slider-photo/css/slider-pro.css" />
    <link rel="stylesheet" href="/temple/js/slider-photo/css/slider-pro-main.css" />
    <link rel="stylesheet" href="/temple/js/slider-photo/css/slider-pro-my.css" />
    <script src="/temple/js/slider-photo/js/jquery.sliderPro.js"></script>

    <script type="text/javascript">
        $(document).ready(function($) {
            $("#example5").sliderPro({
                width: "100%",
                height: 600,
                orientation: "vertical",
                loop: false,
                arrows: true,
                buttons: false,
                autoplay: true,
                thumbnailsPosition: "left",
                thumbnailPointer: true,
                thumbnailWidth: 52,
                thumbnailHeight: 52,
                breakpoints: {
                    800: {
                        width: "100%",
                        thumbnailsPosition: "bottom",
                        //thumbnailWidth: 270,
                        //thumbnailHeight: 100,
                    },
                    500: {
                        thumbnailsPosition: "bottom",
                        //thumbnailWidth: 120,
                        //thumbnailHeight: 50,
                    },
                },
            });
        });
    </script>

    <link rel="stylesheet" href="/temple/js/slick/slick-theme.css" />
    <link rel="stylesheet" href="/temple/js/slick/slick.css" />
    <script src="/temple/js/slick/slick.js"></script>

    <script>
        $('#multiple-items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: 1,
            autoplaySpeed: 2000,
            arrows: true,
            prevArrow: "<img class='a-left control-c--2 prev-2 slick-prev' src='/temple/js/slick/img/arrowprev.svg'>",
            nextArrow: "<img class='a-right control-c--2 next-2 slick-next' src='/temple/js/slick/img/arrownext.svg'>",
            responsive: [{
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 820,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 630,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 630,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>

    <script>
        var price = {{ $product->price }};
        var deposit = {{$settings->deposit}};
        var status = "full";
        var sum = price;
        var product_id = {{ $product->id }};

        $("#ProductSelect-6897423056983-option-0 .variant-input").click(function(e) {
            if ($(this).data("value") == "full") {
                status = "full";
                sum = price;
            } else {
                status = "deposit";
                sum = deposit;
            }

            $("#product__price").text('€' + sum + ' EUR');
        });
    </script>
@endsection
