@extends('layouts.layout', ['title' => $settings->name.' | News', 'description' => ''])
@section('head')
@endsection

@section('content')
<div id="shopify-section-blog-template" class="shopify-section">

    <div data-section-id="blog-template" data-section-type="blog">
      <div class="page-width page-content">

        <div class="section-header aos-init " data-aos="">
          <h1 class="section-header__title appear-delay">
            News
          </h1>
        </div>
        <div class="grid grid--uniform">
          <div class="grid__item medium-up--one-third">

            <article class="article-listing aos-init " data-aos="">
              <div class="article__image-wrap">
                <a href="/blogs/news/temporary-change-in-hours" class="article__grid-image">
                  <div class="image-wrap loaded" style="height: 0; padding-bottom: 100.0%;">
                    <img class="lazyautosizes lazyloaded" src="/temple/news/1.gif" data-aspectratio="1.0" data-sizes="auto" alt="Temporary Change in Hours">

                  </div>
                </a>
              </div>
              <div class="article__content text-center">
                <div class="article__content-meta">
                  <div class="h3">
                    <a href="/blogs/news/temporary-change-in-hours">Temporary Change in Hours</a>
                  </div>

                  <div class="article__date"></div>
                </div>
              </div>
            </article>
          </div>
          <div class="grid__item medium-up--one-third">

            <article class="article-listing aos-init " data-aos="">
              <div class="article__content text-center">
                <div class="article__content-meta">
                  <div class="h3">
                    <a href="/blogs/news/2021-website-changes">2021 Website changes</a>
                  </div>

                  <div class="article__date"></div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>




  </div>
@endsection
