<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script>
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        const urlParams = new URLSearchParams(window.location.search);
        const refParam = urlParams.get('ref');

        if (refParam) {
            localStorage.setItem('ref', refParam);
            setCookie("ref", refParam, 30);
        }
    </script>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5T7XBJZ7');
    </script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- seo-booster-json-ld-store -->
    <script type="application/ld+json">
    {
       "@context": "http://schema.org",
       "@type": "WebSite",
       "url": "{{route('home')}}",
       "potentialAction": {
         "@type": "SearchAction",
         "target": "{{route('search')}}?search={search_term_string}",
         "query-input": "required name=search_term_string"
       }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "{{route('home')}}"}
    </script>
    <!-- End - seo-booster-json-ld-store -->

    <!-- seo-booster-json-ld-Breadcrumb -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@type": "Website",
                    "@id": "{{route('home')}}",
                    "name": "{{$settings->name}}"
                }
            }]

     }
    </script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta property="og:type" content="website">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:image:width" content="1402">
    <meta property="og:image:height" content="1309">

    <meta name="description"
        content="Delivering exceptional quality teacup puppies to your family. A very high and strict standards are implemented on selecting each puppy from the litter. We personally visit the breeders and hand select">
    <meta name="twitter:description"
        content="Delivering exceptional quality teacup puppy to your family. Looking for a teacup puppy for sale? Check out what teacup dogs really means.">
    <meta property="og:description"
        content="Delivering exceptional quality teacup puppy to your family. Looking for a teacup puppy for sale? Check out what teacup dogs really means.">

    <meta property="og:site_name" content="{{$settings->name}}">

    @if (isset($title))
        <title>{{ $title }}</title>
        <meta property="og:title" content="{{ $title }}">
        <meta name="twitter:title" content="{{ $title }}">
    @endif


    <link rel="canonical" href="{{ route('home') }}">
    <meta property="og:url" content="{{ route('home') }}">

    <link rel="shortcut icon" href="/temple/logo.jpg" type="image/png">
    <meta property="og:image" content="/temple/logo.jpg">
    <meta property="og:image:secure_url" content="/temple/logo.jpg">


    <link rel="stylesheet" href="/temple/css/head.css" media="all">
    <link rel="stylesheet" href="/temple/css/theme.css" media="all">
    <link title="theme" rel="preload" href="/temple/css/theme.css" as="style">
    <link rel="stylesheet" href="/temple/css/style.css" media="all">
    <script>
        var theme = {
            stylesheet: "/temple/css/theme.css",
            template: "index",
            strings: {
                addToCart: "Add to bag",
                soldOut: "Found Home",
                unavailable: "Unavailable",
                regularPrice: "Regular price",
                salePrice: "Sale price",
                stockLabel: "[count] in stock",
                willNotShipUntil: "Will not ship until [date]",
                willBeInStockAfter: "Will be in stock after [date]",
                waitingForStock: "Inventory on the way",
                cartItems: "[count] items",
                cartConfirmDelete: "Are you sure?",
                cartTermsConfirmation: "You must agree with the terms and conditions of sales to check out"
            },
            settings: {
                dynamicVariantsEnable: true,
                cartType: "page",
                moneyFormat: " EUR",
                quickView: true,
                hoverProductGrid: true,
                themeName: 'Streamline',
                themeVersion: "3.4.6"
            }
        };

        //   document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <script src="/temple/js/jquery-3.6.3.js"></script>

    <link href="/temple/js/toast/css/jquery.toast.css" rel="stylesheet">
    <script src="/temple/js/toast/jquery.toast.js"></script>
    <script src="/temple/js/toast/toast_error.js"></script>

    @yield('head')
</head>
