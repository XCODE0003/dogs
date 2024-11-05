<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Vendor styles -->
    <link rel="stylesheet" href="/admin/css/zwicon.min.css">
    <link rel="stylesheet" href="/admin/css/animate.min.css">
    <link rel="stylesheet" href="/admin/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin/css/main.min.css?v={{time()}}">
    <link rel="stylesheet" href="/admin/css/flatpickr.min.css">
    <link rel="stylesheet" href="/admin/css/select2.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="/admin/css/app.min.css?v={{time()}}">

    <script src="/admin/js/jquery-3.6.3.js"></script>
    <link rel="stylesheet" href="/admin/js/dropzone/dropzone.css">
	<script src="/admin/js/dropzone/dropzone.min.js"></script>

    <link rel="stylesheet" href="/admin/css/dropify.min.css">
    <script src="/admin/js/dropify.min.js"></script>

    {{-- <script src="/admin/js/datatables.bundle.min.js" type="text/javascript"></script> --}}

    <link href="/admin/js/datatables/datatables.min.css" rel="stylesheet"/>
    <link href="/admin/js/datatables/datatables_custom.css" rel="stylesheet"/>
    <script src="/admin/js/datatables/datatables.min.js"></script>


    <link rel="stylesheet" href="/admin/summernote-lite/summernote-lite.min.css">
    <script src="/admin/summernote-lite/summernote-lite.min.js"></script>
    <script src="/admin/summernote-lite/summernote-ru-RU.js"></script>

    <link rel="stylesheet" href="/admin/sweetalert2/sweetalert2.min.css">
    <script src="/admin/sweetalert2/sweetalert2.all.min.js"></script>

    <link href="/admin/js/toast/css/jquery.toast.css" rel="stylesheet">
    <script src="/admin/js/toast/jquery.toast.js"></script>
    <script src="/admin/js/toast/toast_error.js"></script>
</head>

<body data-sa-theme="4">
    <script>
 $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function getInfoAll() {
        var $data = new FormData();
        wrapper.find('input, textearea, select').each(function() {
            $data.append(this.name, $(this).val());
            if($(this).attr('type') == "file")
            {
                $data.append(this.name, $(this).prop('files')[0]);
            }

            if($(this).attr('type') == "checkbox")
            {
                $data.append(this.name, ($(this).is(':checked') ? true : false));
            }
        });

        wrapper.find('.summernoteExample').each(function() {
            $data.append($(this).data('name'), $(this).summernote('code'));
        });

        return $data;
    }
    </script>
    <main class="main">
        <div class="page-loader" style="display: none;">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                </svg>
            </div>
        </div>

        <header class="header">
            <div class="navigation-trigger d-xl-none" data-sa-action="aside-open" data-sa-target=".sidebar">
                <i class="zwicon-hamburger-menu"></i>
            </div>

            <div class="logo d-none d-sm-inline-flex">
                <a href="{{route('home')}}">{{$settings->name}}</a>
            </div>

            <!-- <form class="search">
                <div class="search__inner">
                    <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                    <i class="zwicon-search search__helper"></i>
                    <i class="zwicon-arrow-left search__reset" data-sa-action="search-close"></i>
                </div>
            </form> -->

            <ul class="top-nav">
                <!-- <li class="d-xl-none"><a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                        data-sa-action="search-open"><i class="zwicon-search"></i></a></li> -->

                <!-- <li class="dropdown">
                    <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html" data-toggle="dropdown"
                        class="top-nav__notify"><i class="zwicon-mail"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="dropdown-header">
                            Messages

                            <div class="actions">
                                <a href="https://avidtemplates.com/templates/super-admin/app/2.2/messages.html"
                                    class="actions__item zwicon-plus"></a>
                            </div>
                        </div>

                        <div class="listview listview--hover">
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <img src="/admin/js/1.jpg" class="avatar-img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        David Belle <small>12:01 PM</small>
                                    </div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <img src="/admin/js/2.jpg" class="avatar-img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Jonathan Morris
                                        <small>02:45 PM</small>
                                    </div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <img src="/admin/js/3.jpg" class="avatar-img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Fredric Mitchell Jr.
                                        <small>08:21 PM</small>
                                    </div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue
                                        ultricies</p>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <img src="/admin/js/4.jpg" class="avatar-img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Glenn Jecobs
                                        <small>08:43 PM</small>
                                    </div>
                                    <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est
                                        consectetur neque</p>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <img src="/admin/js/5.jpg" class="avatar-img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Bill Phillips
                                        <small>11:32 PM</small>
                                    </div>
                                    <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante
                                        placerat</p>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="view-more">View all messages</a>
                        </div>
                    </div>
                </li> -->

                {{-- <li class="dropdown top-nav__notifications">
                    <a data-toggle="dropdown" class="top-nav__notify">
                        <i class="zwicon-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="dropdown-header">
                            Notifications

                            <div class="actions">
                                <a class="actions__item zwicon-checkmark-square" data-sa-action="notifications-clear"></a>
                            </div>
                        </div>

                        <div class="listview listview--hover">
                            <div class="listview__scroll scrollbar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition">
                                <div class="os-resize-observer-host">
                                    <div class="os-resize-observer observed" style="left: 0px; right: auto;"></div>
                                </div>
                                <div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;">
                                    <div class="os-resize-observer observed"></div>
                                </div>
                                <div class="os-content-glue" style="margin: 0px; width: 0px; height: 0px;"></div>
                                <div class="os-padding">
                                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="">
                                        <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                                            <a class="listview__item">
                                                <img src="" class="avatar-img" alt="">

                                                <div class="listview__content">
                                                    <div class="listview__heading">David Belle</div>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                                    <div class="os-scrollbar-track">
                                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                                    </div>
                                </div>
                                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                                    <div class="os-scrollbar-track">
                                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                                    </div>
                                </div>
                                <div class="os-scrollbar-corner"></div>
                            </div>

                            <div class="p-1"></div>
                        </div>
                    </div>
                </li> --}}

                <!-- <li class="dropdown d-none d-sm-inline-block">
                    <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                        data-toggle="dropdown"><i class="zwicon-checkmark-circle"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="dropdown-header">Tasks</div>

                        <div class="listview listview--hover">
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">HTML5 Validation Report</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Google Chrome Extension</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Social Intranet Projects</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Bootstrap Admin Template</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Youtube Client App</div>

                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="view-more">View all Tasks</a>
                        </div>
                    </div>
                </li> -->

                {{-- <li class="dropdown d-none d-sm-inline-block">
                    <a data-toggle="dropdown"><i class="zwicon-grid"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="row app-shortcuts">
                            <a class="col-4 app-shortcuts__item">
                                <i class="zwicon-calendar-never"></i>
                                <small class="">Calendar</small>
                            </a>
                            <a class="col-4 app-shortcuts__item">
                                <i class="zwicon-document"></i>
                                <small class="">Files</small>
                            </a>
                            <a class="col-4 app-shortcuts__item">
                                <i class="zwicon-mail"></i>
                                <small class="">Email</small>
                            </a>
                            <a class="col-4 app-shortcuts__item">
                                <i class="zwicon-line-chart"></i>
                                <small class="">Reports</small>
                            </a>
                            <a class="col-4 app-shortcuts__item">
                                <i class="zwicon-broadcast"></i>
                                <small class="">News</small>
                            </a>
                            <a class="col-4 app-shortcuts__item">
                                <i class="zwicon-image"></i>
                                <small class="">Gallery</small>
                            </a>
                        </div>
                    </div>
                </li> --}}

                <!-- <li class="dropdown d-none d-sm-inline-block">
                    <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                        data-toggle="dropdown"><i class="zwicon-more-h"></i></a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                            class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                        <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                            class="dropdown-item">Clear Local Storage</a>
                        <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                            class="dropdown-item">Settings</a>
                    </div>
                </li> -->

                <!-- <li class="d-none d-sm-inline-block">
                    <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html" class="top-nav__themes"
                        data-sa-action="aside-open" data-sa-target=".themes"><i class="zwicon-palette"></i></a>
                </li> -->
            </ul>

            <div class="clock d-none d-md-inline-block">
                <div class="time">
                    <span class="time__hours">20</span>
                    <span class="time__min">52</span>
                    <span class="time__sec">48</span>
                </div>
            </div>
        </header>

        <aside class="sidebar ">
            <div class="scrollbar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition">
                <div class="os-resize-observer-host">
                    <div class="os-resize-observer observed" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer observed"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px; width: 249px; height: 1167px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="">
                        <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                            <!-- <div class="user">
                                <div class="user__info" data-toggle="dropdown">
                                    <img class="user__img" src="/admin/js/8.jpg" alt="">
                                    <div>
                                        <div class="user__name">Malinda Hollaway</div>
                                        <div class="user__email">malinda-h@gmail.com</div>
                                    </div>
                                </div>

                                <div class="dropdown-menu dropdown-menu--invert">
                                    <a class="dropdown-item"
                                        href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html">View
                                        Profile</a>
                                    <a class="dropdown-item"
                                        href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html">Settings</a>
                                    <a class="dropdown-item"
                                        href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html">Logout</a>
                                </div>
                            </div> -->

                            <ul class="navigation">
                                <li class="@if(Request::route()->named('admin')) navigation__active @endif"><a href="{{route('admin')}}"><i class="zwicon-home"></i> Главная</a></li>

                                <li class="@if(Request::route()->named('admin-settings')) navigation__active @endif">
                                    <a href="{{route('admin-settings')}}"><i class="zwicon-cog"></i> Настройки сайта</a>
                                </li>

                                <li class="@if(Request::route()->named('admin-orders') || Request::route()->named('admin-order')) navigation__active @endif">
                                    <a href="{{route('admin-orders')}}"><i class="zwicon-shopping-cart"></i> Заказы</a>
                                </li>

                                <li class="@if(Request::route()->named('admin-users') || Request::route()->named('admin-user')) navigation__active @endif">
                                    <a href="{{route('admin-users')}}"><i class="zwicon-users"></i> Пользователи</a>
                                </li>

                                <li class="@if(Request::route()->named('admin-reviews') || Request::route()->named('admin-review')) navigation__active @endif">
                                    <a href="{{route('admin-reviews')}}"><i class="zwicon-broadcast"></i> Отзывы</a>
                                </li>

                                <li class="navigation__sub @if(Request::route()->named('admin-products') || Request::route()->named('admin-product') || Request::route()->named('admin-catalogs') || Request::route()->named('admin-catalog') || Request::route()->named('admin-characteristics')) navigation__sub--active navigation__active @endif">
                                    <a><i class="zwicon-folder-minus"></i> Продукция</a>

                                    <ul>
                                        <li @if(Request::route()->named('admin-catalogs') || Request::route()->named('admin-catalog')) class="navigation__active" @endif><a href="{{route('admin-catalogs')}}">Каталоги</a></li>
                                        {{-- <li @if(Request::route()->named('admin-characteristics')) class="navigation__active" @endif><a href="{{route('admin-characteristics')}}">Характеристики</a></li> --}}
                                        <li @if(Request::route()->named('admin-products') || Request::route()->named('admin-product')) class="navigation__active" @endif><a href="{{route('admin-products')}}">Товары</a></li>
                                    </ul>
                                </li>


                                @auth
                                <li>
                                    <a href="{{route('logout')}}"><i class="zwicon-sign-out"></i> Выход</a>
                                </li>
                                @endauth

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </aside>
        <div class="themes">
            <div class="scrollbar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
                <div class="os-resize-observer-host">
                    <div class="os-resize-observer observed" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer observed"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px; width: 249px; height: 1239px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll; right: 0px;">
                        <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                            <!-- <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item active" data-sa-value="1"><img
                                    src="/admin/js/1(1).jpg" alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="2"><img src="/admin/js/2(1).jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="3"><img src="/admin/js/3(1).jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="4"><img src="/admin/js/4(1).jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="5"><img src="/admin/js/5(1).jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="6"><img src="/admin/js/6.jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="7"><img src="/admin/js/7.jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="8"><img src="/admin/js/8(1).jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="9"><img src="/admin/js/9.jpg"
                                    alt=""></a>
                            <a href="https://avidtemplates.com/templates/super-admin/app/2.2/index.html"
                                class="themes__item" data-sa-value="10"><img src="/admin/js/10.jpg"
                                    alt=""></a> -->
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 88.8252%; transform: translate(0px, 0px);">
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </div>
        @yield('content')

    </main>

    <!-- Older IE warning message -->
    <!--[if IE]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                <div class="ie-warning__downloads">
                    <a href="http://www.google.com/chrome">
                        <img src="img/browsers/chrome.png" alt="">
                    </a>

                    <a href="https://www.mozilla.org/en-US/firefox/new">
                        <img src="img/browsers/firefox.png" alt="">
                    </a>

                    <a href="http://www.opera.com">
                        <img src="img/browsers/opera.png" alt="">
                    </a>

                    <a href="https://support.apple.com/downloads/safari">
                        <img src="img/browsers/safari.png" alt="">
                    </a>

                    <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                        <img src="img/browsers/edge.png" alt="">
                    </a>

                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="img/browsers/ie.png" alt="">
                    </a>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="/admin/js/popper.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.overlayScrollbars.min.js"></script>

    <script src="/admin/js/jquery.flot.js"></script>
    <script src="/admin/js/jquery.flot.resize.js"></script>
    <script src="/admin/js/curvedLines.js"></script>
    <script src="/admin/js/jquery.peity.min.js"></script>

    <script src="/admin/js/jquery.easypiechart.min.js"></script>
    <script src="/admin/js/main.min.js"></script>
    <script src="/admin/js/flatpickr.min.js"></script>
    <script src="/admin/js/select2.full.min.js"></script>
    <script src="/admin/js/autosize.min.js"></script>


    <!-- App functions and actions -->
    <script src="/admin/js/app.min.js"></script>

    <div class="jqvmap-label" style="display: none;"></div>
    <div class="flot-tooltip" style="top: 840px; left: 575px; display: none;">Data of 34.00 = 58.88</div>
    <script>
        $('.dropify').dropify();
    </script>
    @if (session('success'))
    <script>
        swal.fire({
            type: "success",
            title: "Успешно!",
            text: "{{session('success')}}",
            background: "#000",
            backdrop: "rgba(0,0,0,0.2)",
            buttonsStyling: !1,
            padding: "3rem 3rem 2rem",
            customClass: {
                confirmButton: "btn btn-link",
                title: "ca-title",
                container: "ca"
            }
        });
    </script>
    @endif
    <script>
        function uploadImage(file, editor) {
            data = new FormData();
            data.append("file", file);

            $.ajax({
                data: data,
                type: "POST",
                url: "{{route('admin-summernote-file_download-img')}}",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    console.log(url);
                    var html = editor.summernote('code');
                    editor.summernote('code', html + '<img src="' + url + '"/>');
                }
            });
        }

        if ($(".summernoteExample").length) {
            $('.summernoteExample').summernote({
                placeholder: 'Наберите текст...',
                height: 300,
                lang: 'ru-RU',
                tabsize: 2,
                callbacks: {
                    onImageUpload: function(files) {
                        uploadImage(files[0], $(this))
                    }
                }
            });
        }
    </script>
</body>

</html>
