@extends('layouts.layout', ['title' => $settings->name.' | '.$category, 'description' => ''])
@section('head')
@endsection

@section('content')
<div id="shopify-section-collection-header" class="shopify-section">
    <div class="page-width page-content page-content--flush-bottom">
      <div class="section-header" data-aos="">
        <h1 class="section-header__title appear-delay">
          {{$category}}
        </h1>
        <div class="rte section-header__description section-header__description--large appear-delay-1">
          {{$category}} Puppies
          <div style="text-align: center;"></div>
        </div>
      </div>
    </div>
  </div>

  <div id="shopify-section-collection-filters" class="shopify-section">
    <div class="collection-filters">
      <div class="collection-filter__wrapper" data-section-id="collection-filters" data-section-type="collection-filter" data-combine-tags="false">
        <div class="collection-filter__scrollable" data-aos="overflow__animation__small"></div>
      </div>
      <div class="collection-dropdowns">
        <div class="collection-dropdowns__item"><label for="SortBy" class="hidden-label">Sort </label>
          <select name="SortBy" id="SortBy" data-default-sortby="manual">
            <option value="" @if(!$sort) selected="selected" @endif>Sort</option>
            <option value="title-asc" @if($sort == 'title-asc') selected="selected" @endif>Alphabetically, A-Z</option>
            <option value="title-desc" @if($sort == 'title-desc') selected="selected" @endif>Alphabetically, Z-A</option>
            <option value="price-asc" @if($sort == 'price-asc') selected="selected" @endif>Price, low to high</option>
            <option value="price-desc" @if($sort == 'price-desc') selected="selected" @endif>Price, high to low</option>
            <option value="created-asc" @if($sort == 'created-asc') selected="selected" @endif>Date, old to new</option>
            <option value="created-desc" @if($sort == 'created-desc') selected="selected" @endif>Date, new to old</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <div id="shopify-section-collection-template" class="shopify-section">


    <div id="CollectionSection" data-section-id="collection-template" data-section-type="collection-template" data-product-sliders-mobile="false">

      <div class="page-width">
        <div id="CollectionAjaxContent">
          <div class="grid grid--uniform grid--scattered-large-3 grid--scattered-small-2 small--grid--flush" data-collection-container="">

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
      </div>
    </div>




  </div>

  {{-- <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "CollectionPage",

      "description": "Available Puppies\n",



      "image": {
        "@type": "ImageObject",
        "height": 1309,
        "url": "https:\/\/www.rollypups.com\/cdn\/shop\/files\/1231_435a453b-9057-43d5-8150-05e10014913d_1402x.jpg?v=1628743572",
        "width": 1402
      },

      "name": "AVAILABLE NOW"
    }
  </script> --}}

  <script>
    var select = $("#SortBy");
    select.on( "change", function() {
      console.log(select.val());
      location.href = '{{((!empty($_SERVER['HTTPS'])) ? 'https' : 'http')}}://'+window.location.hostname+window.location.pathname+'?sort='+select.val();
    });
  </script>
@endsection
