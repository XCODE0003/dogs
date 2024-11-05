@extends('layouts.layout', ['title' => $settings->name.' | Review | '.$review->category->title, 'description' => ''])
@section('head')
@endsection

@section('content')
<div id="shopify-section-article-template" class="shopify-section">
    <div class="page-width page-content">

      <article class="article">
        <div class="article__content">

          <div class="section-header aos-init " data-aos="">
            <h1 class="section-header__title appear-delay">
              {{$review->category->title}}
            </h1>
          </div>
        </div>
        <div class="article__image-wrap">
          <div class="image-wrap  article__featured-image loaded" style="height: 0; padding-bottom: 100.0%;">
            <img class="lazyautosizes lazyloaded" role="presentation" data-widths="[360, 540, 750, 900, 1080, 1600]" data-aspectratio="1.0" data-sizes="auto" alt="{{$review->category->title}}" src="{{$review->preview}}">

          </div>
        </div>
        <div class="article__content">
          <div class="article__body rte rte--indented-images">
            {!! $review->description !!}
          </div>
          <hr class="hr--large hr--clear">
        </div>
      </article>

      <div class="text-center">
        <a href="{{route('reviews')}}" class="btn btn--tertiary">
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-left" viewBox="0 0 50 15">
            <path d="M50 5.38v4.25H15V15L0 7.5 15 0v5.38z"></path>
          </svg>
          REVIEWS
        </a>

        <hr class="hr--medium hr--clear medium-up--hide">
      </div>
    </div>

    {{-- <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Article",
        "articleBody": "Good Afternoon,\nWe have been extremely happy to add Akthar(ricky) to our family and I have you guys to thank for.\nHe is extremely well behaved, we joke he must be a robot (so tiny and cute) and obedient. He already learned to potty in spot and the game fetch and paw.\nTruly thank you for your great service and hope if we ever get another pup or family\/friend is considering we will see you then.\nThe instructions have been extremely helpful and clear. He came extremely healthy as we had the first Vet check up and is ready to go on be loved and learn what life has to offer. If you would like to post anything from he's feed you are welcome to any time. Thank you infinity and hope you guys have the best of luck.",
        "mainEntityOfPage": {
          "@type": "WebPage",
          "@id": "https:\/\/www.rollypups.com\/blogs\/reviews\/customer-review-ricky-akthar"
        },
        "headline": "Akthar - Pomsky",



        "image": [
          "https:\/\/www.rollypups.com\/cdn\/shop\/articles\/04_84f1dff4-27b0-4b58-8a4e-e0a1f13a4c4e_768x.jpg?v=1631181964"
        ],

        "datePublished": "2020-11-24T05:09:59Z",
        "dateModified": "2021-09-09T06:06:04Z",
        "dateCreated": "2020-11-24T05:09:59Z",
        "author": {
          "@type": "Person",
          "name": "{{$settings->name}}"
        },
        "publisher": {
          "@type": "Organization",


          "logo": {
            "@type": "ImageObject",
            "height": 768,
            "url": "https:\/\/www.rollypups.com\/cdn\/shop\/articles\/04_84f1dff4-27b0-4b58-8a4e-e0a1f13a4c4e_768x.jpg?v=1631181964",
            "width": 768
          },

          "name": "{{$settings->name}}"
        }
      }
    </script> --}}


  </div>
@endsection
