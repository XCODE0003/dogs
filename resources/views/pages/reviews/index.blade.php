@extends('layouts.layout', ['title' => $settings->name.' | Reviews', 'description' => ''])
@section('head')
@endsection

@section('content')
<div id="shopify-section-blog-template" class="shopify-section">

    <div data-section-id="blog-template" data-section-type="blog">
      <div class="page-width page-content">

        <div class="section-header aos-init " data-aos="">
          <h1 class="section-header__title appear-delay">
            REVIEWS
          </h1>
        </div>
        <div class="grid grid--uniform">

          @foreach ($reviews as $review)
          <div class="grid__item medium-up--one-third">

            <article class="article-listing aos-init " data-aos="">
              <div class="article__image-wrap">
                <a href="{{route('review', ['id' => $review->id])}}" class="article__grid-image">
                  <div class="image-wrap loaded" style="height: 0; padding-bottom: 100.0%;">
                    <img class="lazyautosizes lazyloaded" src="{{$review->preview}}" alt="Akthar - Pomsky">
                  </div>
                </a>
              </div>
              <div class="article__content text-center">
                <div class="article__content-meta">
                  <div class="h3">
                    <a href="{{route('review', ['id' => $review->id])}}">{{$review->category->title}}</a>
                  </div>

                  <div class="article__date"></div>
                </div>
              </div>
            </article>
          </div>
          @endforeach

        </div>

        {{ $reviews->appends(request()->input())->links() }}

      </div>
    </div>




  </div>
@endsection
