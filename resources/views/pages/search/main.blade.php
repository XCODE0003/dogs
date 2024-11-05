@extends('layouts.layout', ['title' => $settings->name.' | Search', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

    <div class="grid">
      <div class="grid__item">
        <div class="section-header">
          <h1 class="section-header__title">
            Search
          </h1>
          <div class="section-header__description">
            <form  class="input-group search-bar search-bar--page">
              <input type="search" name="q" value="" placeholder="Search our store" class="input-group-field __search" aria-label="Search our store">
              <span class="input-group-btn search-button">
                <button type="button" class="btn">
                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 64 64">
                    <path d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42"></path>
                  </svg>
                  <span class="icon__fallback-text">Search</span>
                </button>
              </span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
