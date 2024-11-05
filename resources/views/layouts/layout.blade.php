
<!DOCTYPE html>
<html class="js" lang="en" dir="ltr">

@include("components.head")

<body class="template-index js-animate loaded" ontouchstart="return true;" data-transitions="true"
    data-animate_underlines="true" data-animate_images="true" data-button_style="square"
    data-type_product_capitalize="false" data-type_header_capitalize="false" data-product_image_scatter="false"
    data-button_type_style="caps" data-aos-easing="ease-out-quad" data-aos-duration="400" data-aos-delay="0"
    style="">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T7XBJZ7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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

    <div id="OverscrollLoader" class="overscroll-loader" aria-hidden="true">
        <svg aria-hidden="true" focusable="false" role="presentation"
            class="icon icon--full-color icon-loader--full-color">
            <path class="icon-loader__close" d="M19 17.61l27.12 27.13m0-27.12L19 44.74"></path>
            <path class="icon-loader__path" d="M40 90a40 40 0 1 1 20 0"></path>
        </svg>
    </div>

    <div class="root">
        
        <script>
            window.setTimeout(function() {
                document.body.className += " loaded";
            }, 25);
        </script>
        <div class="splash-screen">
            <div class="splash-screen__loader">
                <img class="loader-logo__img" src="/temple/imgs/land/321_b27cf1c1-16cc-4795-9e39-c7f6e6576d2f_140x.png"
                    aria-hidden="true">
            </div>
        </div>

        <a class="in-page-link visually-hidden skip-link js-no-transition"
            href="{{route('home')}}#MainContent">Skip to content</a>

        <div id="PageContainer" class="page-container">
            <div class="transition-body">
                <x-header-menu></x-header-menu>
                <main class="main-content" id="MainContent">


                    @yield('content')

                </main>
                @include("components.footer")
            </div>
        </div>

        <div id="VideoModal" class="modal modal--solid">
            <div class="modal__inner">
                <div class="modal__centered page-width text-center">
                    <div class="modal__centered-content">
                        <div class="video-wrapper video-wrapper--modal">
                            <div id="VideoHolder"></div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn--circle modal__close js-modal-close text-link">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                    viewBox="0 0 64 64">
                    <path d="M19 17.61l27.12 27.13m0-27.12L19 44.74"></path>
                </svg>
                <span class="icon__fallback-text">Close (esc)</span>
            </button>
        </div>

        <div class="loader-logo">
            <div class="splash-screen__loader">
                <img class="loader-logo__img"
                    src="/temple/imgs/land/321_b27cf1c1-16cc-4795-9e39-c7f6e6576d2f_140x.png" aria-hidden="true">
            </div>
        </div>
    </div>


<style>
        @media only screen and (max-width: 768px) {
          .wht {
            margin-bottom: 80px !important;
            margin-right: 4px !important;
          }
        }
    </style>
    <div id="carthike-chat-wrapper">
        <div id="carthike-chat-button-container" class="right wht">
            <button type="button" class="whatsappbutton buttonWithTextIcon" onclick="window.open('{{$settings->wa}}');" id="chwhatsapp-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.074" viewBox="0 0 16 16.074">
                    <g id="Group_63773" data-name="Group 63773" transform="translate(-426.525 -322.416)">
                        <path id="Path_12957"
                            d="M537.461 442.133a2.6 2.6 0 0 0 .792.121 3.292 3.292 0 0 0 .491-.039 2.106 2.106 0 0 0 1.41-1 1.658 1.658 0 0 0 .1-1.026.694.694 0 0 0-.316-.22l-.105-.052c-.138-.069-1.153-.57-1.349-.642a.417.417 0 0 0-.573.141c-.119.179-.469.594-.611.756-.063.072-.114.11-.289.022-.035-.017-.079-.036-.135-.061a4.916 4.916 0 0 1-1.414-.894 5.756 5.756 0 0 1-1.066-1.328c-.069-.119-.031-.164.068-.263.063-.062.133-.148.2-.231l.1-.118a1.215 1.215 0 0 0 .184-.294l.027-.055a.471.471 0 0 0-.016-.443c-.031-.062-.227-.539-.384-.922l-.216-.524c-.156-.375-.341-.406-.5-.4h-.038c-.125-.006-.269-.007-.381-.007a.826.826 0 0 0-.6.281l-.037.04a2.29 2.29 0 0 0-.677 1.668 3.843 3.843 0 0 0 .821 2.091l.032.045a8.577 8.577 0 0 0 3.356 2.945 11.314 11.314 0 0 0 1.126.409z"
                            class="cls-1" data-name="Path 12957" transform="translate(-101.636 -108.015)"></path>
                        <path id="Path_12958"
                            d="M440.2 324.745a7.945 7.945 0 0 0-12.526 9.544l-1.15 4.2 4.3-1.127a7.946 7.946 0 0 0 9.379-12.617zm-5.622 12.015a6.386 6.386 0 0 1-3.255-.891l-.278-.165-2.32.609.619-2.261-.181-.288a6.4 6.4 0 1 1 5.418 3v.113z"
                            class="cls-1" data-name="Path 12958"></path>
                    </g>
                </svg>
                <span>
                    WhatsApp Us
                </span>
            </button>
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
</body>

</html>
