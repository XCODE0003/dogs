@extends('layouts.layout', ['title' => $settings->name.' | Search | '.$search, 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

    <div class="grid">
      <div class="grid__item">
        <div class="section-header">
          <h1 class="section-header__title">
            Search "{{$search}}"
          </h1>
          <div class="section-header__description">{{$products->total()}} results
          </div>
        </div>

        @if($products && $products->all() != [])
        <div data-section-id="" data-section-type="collection-template">
          <div class="grid grid--uniform">

            @foreach ($products as $product)
            <div class="grid__item grid-product small--one-half medium-up--one-third" data-aos="" data-product-grid="" data-id="6894180728919">
              <div class="grid-product__content">
                <a href="{{route('product', ['slug' => $product->slug])}}" class="grid-product__link quick-product__btn js-screen-open-product-6894180728919 js-no-transition">
                  <div class="product-slider" >
                    <div class="product-slide">
                      <div class="image-wrap">
                        <div class="grid__image-ratio grid__image-ratio--square lazyloaded" style="background-image: url('{{$product->preview}}');">
                        </div>
                      </div>
                    </div>
                  </div>
                  <style>
                    .product-slider.slick-initialized[data-id="6894180728919"]:after {
                      animation-duration: 6750ms;
                    }
                  </style>
                </a>
                <div class="grid-product__meta">
                  <a href="{{route('product', ['slug' => $product->slug])}}" class="grid-product__link quick-product__btn js-screen-open-product-6894180728919 js-no-transition" data-product-id="6894180728919"  aria-expanded="false">
                    <div class="grid-product__title">{{$product->title}}</div>
                  </a>
                  <div class="product-single__vendor"><a href="{{route('product', ['slug' => $product->slug])}}" class="grid-product__link quick-product__btn js-screen-open-product-6894180728919 js-no-transition" data-product-id="6894180728919"  aria-expanded="false"></a>
                    <a href="{{route('collection', ['slug' => $product->category->slug])}}" title="{{$product->category->title}}">{{$product->category->title}}</a>
                  </div>
                  <div class="grid-product__price"><span>
                    €{{$product->price}} EUR
                    </span></div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>

        {{ $products->appends(request()->input())->links() }}

        @else
          Nothing found!
        @endif
      </div>
    </div>
  </div>


@endsection
