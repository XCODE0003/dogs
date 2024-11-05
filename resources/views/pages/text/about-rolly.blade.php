@extends('layouts.layout', ['title' => $settings->name.' | About', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

    <div class="grid">
      <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

        <div class="section-header">
          <h1 class="section-header__title">
            About {{$settings->name}}
          </h1>
        </div>

        <div class="rte rte--nomargin">
            <img src="/temple/imgs/car 1.png" alt="">
          <img src="/temple/imgs/about-rolly/About.png" alt="">
        </div>

      </div>
    </div>

  </div>
@endsection
