@extends('layouts.layout', ['title' => $settings->name.' | ', 'description' => ''])
@section('head')
@endsection

@section('content')
<div id="shopify-section-article-template" class="shopify-section">
    <div class="page-width page-content">

      <article class="article">
        <div class="article__content">

          <div class="section-header aos-init " data-aos="">
            <h1 class="section-header__title appear-delay">
              Temporary Change in Hours
            </h1>
       </div>
        </div>
        <div class="article__image-wrap">
          <div class="image-wrap  article__featured-image loaded" data-aos="" style="height: 0; padding-bottom: 100.0%;">
          <img class="lazyautosizes lazyloaded" style="    width: 100%;"  alt="Temporary Change in Hours" src="/temple/news/1.gif">
          
          </div>
        </div>
        <div class="article__content">
          <div class="article__body rte rte--indented-images">
            <p>We are currently in Korea and are unable to answer back in real-time. <br><br>Both our sales and support team is in Korea until early January.&nbsp;<br>Please leave us a message and we will get back to you within 24 hours. </p>
            <p>Current time in Korea can be checked below. <br>https://www.timeanddate.com/worldclock/south-korea/seoul<br><br></p>
          </div>
          <hr class="hr--large hr--clear">
        </div>
      </article>

      <div class="text-center">
        <a href="/blogs/news" class="btn btn--tertiary">
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-left" viewBox="0 0 50 15">
            <path d="M50 5.38v4.25H15V15L0 7.5 15 0v5.38z"></path>
          </svg>
          News
        </a>

        <hr class="hr--medium hr--clear medium-up--hide">
      </div>
    </div>



  </div>
@endsection
