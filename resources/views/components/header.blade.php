<div id="shopify-section-header" class="shopify-section">
    <div class="slide-nav__overflow slide-nav__overflow--thumb">
      <nav class="slide-nav__wrapper">
        <ul id="SlideNav" class="slide-nav">

          <li class="slide-nav__item border-bottom">
            <a href="{{route('home')}}" class="slide-nav__link">
              Home
            </a>
          </li>
          <li class="slide-nav__item">
            <button type="button" class="js-toggle-submenu slide-nav__link"
              data-target="about-us1" data-level="1">
              ABOUT US
              <span class="slide-nav__icon">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right"
                  viewBox="0 0 284.49 498.98">
                  <path
                    d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                  </path>
                </svg>
                <span class="icon__fallback-text">Expand submenu</span>
              </span>
            </button>
            <ul class="slide-nav__dropdown" data-parent="about-us1" data-level="2">
              <li class="slide-nav__item border-bottom">
                <div class="slide-nav__table">
                  <div class="slide-nav__table-cell slide-nav__return">
                    <button class="js-toggle-submenu slide-nav__return-btn" type="button">
                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left"
                        viewBox="0 0 284.49 498.98">
                        <path
                          d="M249.49 0a35 35 0 0 1 24.75 59.75L84.49 249.49l189.75 189.74a35.002 35.002 0 1 1-49.5 49.5L10.25 274.24a35 35 0 0 1 0-49.5L224.74 10.25A34.89 34.89 0 0 1 249.49 0z">
                        </path>
                      </svg>
                      <span class="icon__fallback-text">Collapse submenu</span>
                    </button>
                  </div>
                  <a href="{{route('about-rolly')}}"
                    class="slide-nav__sublist-link slide-nav__sublist-header">
                    ABOUT US
                  </a>
                </div>
              </li>
              <li class="slide-nav__item border-bottom"><a
                  href="{{route('hours-of-operation-2023')}}" class="slide-nav__sublist-link">
                  HOURS
                </a></li>
              <li class="slide-nav__item border-bottom"><a
                  href="{{route('verified-contact-lists-2021')}}"
                  class="slide-nav__sublist-link">
                  VERIFIED CONTACTS
                </a></li>
              <li class="slide-nav__item"><a href="{{route('business-license')}}"
                  class="slide-nav__sublist-link">
                  CERTIFICATE OF INCORPORATION
                </a></li>
            </ul>
          </li>
          <li class="slide-nav__item"><button type="button" class="js-toggle-submenu slide-nav__link"
              data-target="puppies2" data-level="1">
              PUPPIES
              <span class="slide-nav__icon">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right"
                  viewBox="0 0 284.49 498.98">
                  <path
                    d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                  </path>
                </svg>
                <span class="icon__fallback-text">Expand submenu</span>
              </span>
            </button>
            <ul class="slide-nav__dropdown" data-parent="puppies2" data-level="2">
              <li class="slide-nav__item border-bottom">
                <div class="slide-nav__table">
                  <div class="slide-nav__table-cell slide-nav__return">
                    <button class="js-toggle-submenu slide-nav__return-btn" type="button">
                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left"
                        viewBox="0 0 284.49 498.98">
                        <path
                          d="M249.49 0a35 35 0 0 1 24.75 59.75L84.49 249.49l189.75 189.74a35.002 35.002 0 1 1-49.5 49.5L10.25 274.24a35 35 0 0 1 0-49.5L224.74 10.25A34.89 34.89 0 0 1 249.49 0z">
                        </path>
                      </svg>
                      <span class="icon__fallback-text">Collapse submenu</span>
                    </button>
                  </div>

                </div>
              </li>

              <li class="slide-nav__item border-bottom"><a
                href="{{route('collections-all')}}" class="slide-nav__sublist-link">
                ALL AVAILABLE
              </a></li>
              @foreach ($allCategory as $c)
              <li class="slide-nav__item border-bottom"><a
                href="{{route('collection', ['slug' => $c->slug])}}" class="slide-nav__sublist-link">
                {{$c->title}}
              </a></li>
              @endforeach
            </ul>
          </li>
          <li class="slide-nav__item"><button type="button" class="js-toggle-submenu slide-nav__link"
              data-target="purchase-process3" data-level="1">
              PURCHASE PROCESS
              <span class="slide-nav__icon">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right"
                  viewBox="0 0 284.49 498.98">
                  <path
                    d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                  </path>
                </svg>
                <span class="icon__fallback-text">Expand submenu</span>
              </span>
            </button>
            <ul class="slide-nav__dropdown" data-parent="purchase-process3" data-level="2">
              <li class="slide-nav__item border-bottom">
                <div class="slide-nav__table">
                  <div class="slide-nav__table-cell slide-nav__return">
                    <button class="js-toggle-submenu slide-nav__return-btn" type="button">
                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left"
                        viewBox="0 0 284.49 498.98">
                        <path
                          d="M249.49 0a35 35 0 0 1 24.75 59.75L84.49 249.49l189.75 189.74a35.002 35.002 0 1 1-49.5 49.5L10.25 274.24a35 35 0 0 1 0-49.5L224.74 10.25A34.89 34.89 0 0 1 249.49 0z">
                        </path>
                      </svg>
                      <span class="icon__fallback-text">Collapse submenu</span>
                    </button>
                  </div>
                  <a href="{{route('purchasing-process-1')}}"
                    class="slide-nav__sublist-link slide-nav__sublist-header">
                    PURCHASE PROCESS
                  </a>
                </div>
              </li>
              <li class="slide-nav__item border-bottom"><a
                  href="{{route('purchasing-process-1')}}" class="slide-nav__sublist-link">
                  PURCHASE PROCESS
                </a></li>
              <li class="slide-nav__item border-bottom"><a href="{{route('special-order')}}"
                  class="slide-nav__sublist-link">
                  SPECIAL ORDER
                </a></li>
              <li class="slide-nav__item border-bottom"><a href="{{route('delivery')}}"
                  class="slide-nav__sublist-link">
                  DELIVERY
                </a></li>
              <li class="slide-nav__item border-bottom"><a href="{{route('shopping-list')}}"
                  class="slide-nav__sublist-link">
                  SHOPPING LIST
                </a></li>
              <li class="slide-nav__item"><a href="{{route('health-guarantee')}}"
                  class="slide-nav__sublist-link">
                  HEALTH GUARANTEE
                </a></li>
            </ul>
          </li>
          {{-- <li class="slide-nav__item"><a href="{{route('finance-2021')}}"
              class="slide-nav__link">
              FINANCE
            </a></li> --}}
            <li class="slide-nav__item"><a href="{{route('pet-delivery-search')}}"
                class="slide-nav__link">
                PET TAXI
              </a></li>
          <li class="slide-nav__item"><a href="{{route('scam-alert-2023')}}"
              class="slide-nav__link">
              AVOID SCAMS
            </a></li>
            <li class="slide-nav__item"><a href="/privacy-policy"
                                           class="slide-nav__link">
                    PRIVACY POLICY
                </a></li>
          <li class="slide-nav__item"><a href="https://t.me/storelovelypups" class="slide-nav__link">
              TELEGRAM
            </a></li>
            @auth
            <li class="slide-nav__item medium-up--hide">
              <a href="{{route('login')}}" class="slide-nav__link">Account</a>
            </li>
            @else
            <li class="slide-nav__item medium-up--hide">
              <a href="{{route('account')}}" class="slide-nav__link">Log in</a>
            </li>
            @endauth

          <li class="slide-nav__item medium-up--hide">
            <a onclick="searchModal();"
              class="slide-nav__link js-modal-open-search-modal js-no-transition">
              Search
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div data-section-id="header" data-section-type="header-section">
      <div data-header-style="bar" class="header-wrapper">
        <div class="announcement">
          <div class="announcement__wrapper"><a href="{{route('scam-alert-2023')}}"
              class="announcement__link">
              <div class="announcement__text" data-text="how-to-avoid-fake-rolly">
                How to Avoid Fake {{$settings->name}}
              </div>
            </a></div>
        </div>

        <div class="site-header-sticky" style="height: 150.438px;">
          <header class="site-header" data-overlay="false">
            <div class="page-width">
              <div class="header-layout header-layout--center header-layout--mobile-logo-only"
                data-logo-align="center">
                <div class="header-item header-item--left header-item--navigation small--hide" role="navigation"
                  aria-label="Primary">
                  <div class="site-nav">
                    <a onclick="searchModal();"
                      class="site-nav__link site-nav__link--icon js-modal-open-search-modal js-no-transition">
                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                        viewBox="0 0 64 64">
                        <path
                          d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                        </path>
                      </svg>
                      <span class="icon__fallback-text">Search</span>
                    </a>
                  </div>
                </div>
                <div class="header-item header-item--logo">
                  <div class="h1 site-header__logo" itemscope="" itemtype="http://schema.org/Organization">
                    <h1 class="visually-hidden">{{$settings->name}}</h1>
                    <a href="/" itemprop="url" class="site-header__logo-link logo--has-inverted">
                      <img class="small--hide" src="/temple/imgs/land/watermark_black_140x.png"
                        alt="{{$settings->name}}" itemprop="logo">
                      <img class="medium-up--hide" src="/temple/imgs/land/watermark_black_120x.png"
                        alt="{{$settings->name}}">
                    </a><a href="/" itemprop="url" class="site-header__logo-link logo--inverted">
                      <img class="small--hide" src="/temple/imgs/land/watermark_black_120x.png"
                        alt="{{$settings->name}}" itemprop="logo">
                      <img class="medium-up--hide" src="/temple/imgs/land/watermark_black_120x.png"
                        alt="{{$settings->name}}">
                    </a>
                  </div>
                </div>
                <div class="header-item header-item--icons small--hide">
                  <div class="site-nav site-nav--icons">
                    <div class="site-nav__icons">
                      @auth
                      <a class="site-nav__link site-nav__link--icon small--hide"
                      href="{{route('account')}}">
                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-user"
                        viewBox="0 0 64 64">
                        <path
                          d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z">
                        </path>
                      </svg>
                      <span class="icon__fallback-text">Account
                      </span>
                    </a>
                      @else
                      <a class="site-nav__link site-nav__link--icon small--hide"
                      href="{{route('login')}}">
                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-user"
                        viewBox="0 0 64 64">
                        <path
                          d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z">
                        </path>
                      </svg>
                      <span class="icon__fallback-text">Log in
                      </span>
                    </a>
                      @endauth

                      <a onclick="searchModal();"
                        class="site-nav__link site-nav__link--icon js-modal-open-search-modal js-no-transition medium-up--hide">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                          viewBox="0 0 64 64">
                          <path
                            d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                          </path>
                        </svg>
                        <span class="icon__fallback-text">Search</span>
                      </a>

                      <a href="{{route('basket')}}"
                        class="site-nav__link site-nav__link--icon site-nav__link--cart js-drawer-open-cart js-no-transition"
                        aria-controls="CartDrawer" data-icon="bag">
                        <span class="cart-link"><svg aria-hidden="true" focusable="false" role="presentation"
                            class="icon icon-bag" viewBox="0 0 64 64">
                            <g fill="none" stroke="#000" stroke-width="2">
                              <path d="M25 26c0-15.79 3.57-20 8-20s8 4.21 8 20"></path>
                              <path d="M14.74 18h36.51l3.59 36.73h-43.7z"></path>
                            </g>
                          </svg><span class="icon__fallback-text">Bag</span>
                          <span class="cart-link__bubble">
                            <span class="cart-link__count" aria-hidden="true">
                              0
                            </span>
                          </span>
                        </span>
                      </a></div>
                  </div>
                </div>
              </div>
              <div role="navigation" aria-label="Primary" class="text-center">
                <ul class="site-nav site-navigation small--hide">
                  <li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown" aria-haspopup="true">

                    <a href="{{route('about-rolly')}}"
                      class="site-nav__link site-nav__link--has-dropdown">
                      ABOUT US
                    </a>
                    <ul class="site-nav__dropdown text-left">
                      <li class="">
                        <a href="{{route('hours-of-operation-2023')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          HOURS
                        </a>
                      </li>
                      <li class="">
                        <a href="{{route('verified-contact-lists-2021')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          VERIFIED CONTACTS
                        </a>
                      </li>
                      <li class="">
                        <a href="{{route('business-license')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          CERTIFICATE OF INCORPORATION
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown" aria-haspopup="true">

                   <a href="{{route('collections-all')}}"
                      class="site-nav__link site-nav__link--has-dropdown">
                      PUPPIES
                    </a>
                    <ul class="site-nav__dropdown text-left">
                      <li class="">
                        <a href="{{route('collections-all')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          ALL AVAILABLE
                        </a>
                      </li>
                      @foreach ($allCategory as $c)
                      <li class="">
                        <a href="{{route('collection', ['slug' => $c->slug])}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          {{$c->title}}
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown" aria-haspopup="true">

                    <a href="{{route('purchasing-process-1')}}"
                      class="site-nav__link site-nav__link--has-dropdown">
                      PURCHASE PROCESS
                    </a>
                    <ul class="site-nav__dropdown text-left">
                      <li class="">
                        <a href="{{route('purchasing-process-1')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          PURCHASE PROCESS
                        </a>
                      </li>
                      <li class="">
                        <a href="{{route('special-order')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          SPECIAL ORDER
                        </a>
                      </li>
                      <li class="">
                        <a href="{{route('delivery')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          DELIVERY
                        </a>
                      </li>
                      <li class="">
                        <a href="{{route('shopping-list')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          SHOPPING LIST
                        </a>
                      </li>
                      <li class="">
                        <a href="{{route('health-guarantee')}}"
                          class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                          HEALTH GUARANTEE
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-nav__item site-nav__expanded-item">

                    <a href="{{route('pet-delivery-search')}}" class="site-nav__link">
                      PET TAXI
                    </a>
                  </li>
                  <li class="site-nav__item site-nav__expanded-item">

                    <a href="{{route('scam-alert-2023')}}" class="site-nav__link">
                      AVOID SCAMS
                    </a>
                  </li>
                    <li class="site-nav__item site-nav__expanded-item">
                        <a href="/privacy-policy" class="site-nav__link">
                            PRIVACY POLICY
                        </a>
                    </li>
                  <li class="site-nav__item site-nav__expanded-item">

                    <a href="https://t.me/storelovelypups" class="site-nav__link">
                      TELEGRAM
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </header>
        </div>
      </div>
      <div class="site-nav__thumb-menu site-nav__thumb-menu--inactive cart-has-items">
        <button type="button" class="btn site-nav__thumb-button js-toggle-slide-nav">
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger"
            viewBox="0 0 64 64">
            <path d="M7 15h51M7 32h43M7 49h51"></path>
          </svg>
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
            viewBox="0 0 64 64">
            <path d="M19 17.61l27.12 27.13m0-27.12L19 44.74"></path>
          </svg>
          <span class="icon-menu-label">Menu</span>
        </button>

        <a href="{{route('basket')}}" class="site-nav__thumb-cart js-drawer-open-cart js-no-transition"
          aria-controls="CartDrawer" data-icon="bag">
          <span class="cart-link"><svg aria-hidden="true" focusable="false" role="presentation"
              class="icon icon-bag" viewBox="0 0 64 64">
              <g fill="none" stroke="#000" stroke-width="2">
                <path d="M25 26c0-15.79 3.57-20 8-20s8 4.21 8 20"></path>
                <path d="M14.74 18h36.51l3.59 36.73h-43.7z"></path>
              </g>
            </svg><span class="icon__fallback-text">Bag</span>
            {{-- <span class="cart-link__bubble">
              <span class="cart-link__count" aria-hidden="true">
                0
              </span>
            </span> --}}
          </span>
        </a>
      </div>
    </div>
    <div id="SearchModal" class="modal modal-open modal--solid aos-animate">
      <div class="modal__inner">
        <div class="modal__centered page-width text-center">
          <div class="modal__centered-content">
            <form method="get" class="search-modal__wrapper"
              role="search">
              <input type="hidden" name="type" value="product">
              <input type="search" name="q" value="" placeholder="Search our store" id="SearchModalInput"
                class="search-modal__input __search" aria-label="Search our store">
              <button type="button" class="text-link search-modal__submit search-button">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                  viewBox="0 0 64 64">
                  <path d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                  </path>
                </svg>
                <span class="icon__fallback-text">Search</span>
              </button>
            </form>
          </div>
        </div>
      </div>

      <button onclick="searchModal();" type="button" class="btn btn--tertiary btn--circle modal__close js-modal-close text-link">
        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 64 64">
          <path d="M19 17.61l27.12 27.13m0-27.12L19 44.74"></path>
        </svg>
        <span class="icon__fallback-text">Close (esc)</span>
      </button>
    </div>

  </div>
