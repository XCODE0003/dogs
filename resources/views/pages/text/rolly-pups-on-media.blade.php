@extends('layouts.layout', ['title' => $settings->name.' | On Media', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

    <div class="grid">
      <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

        <div class="section-header">
          <h1 class="section-header__title">
            {{$settings->name}} on Media
          </h1>
        </div>

        <div class="rte rte--nomargin">
          <p><img src="/temple/imgs/rolly-pups-on-media/Dailymail_Video_88ebdb66-b18c-481b-afcd-a6f7400a475f.PNG?v=1488757504" alt=""></p>
          <p><img src="/temple/imgs/rolly-pups-on-media/Dailymail-Article.jpg?v=1488757521" alt=""></p>
          <p>Here is the link to the full article! &nbsp; <strong><a href="http://www.dailymail.co.uk/femail/article-4157412/Instagram-account-shows-tiny-8000-teacup-puppies.html" target="_blank" class="js-no-transition">/Click Here/</a></strong></p>
          <p>&nbsp;</p>
        </div>

      </div>
    </div>

  </div>
@endsection
