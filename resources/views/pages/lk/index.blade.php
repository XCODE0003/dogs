@extends('layouts.layout', ['title' => $settings->name.' | '.$u->first_name.' '.$u->second_name, 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content customers">
    <div class="section-header">
      <h1 class="section-header__title">
        My account
      </h1>
      <div class="section-header__description">
        <a href="{{route('logout')}}" id="customer_logout_link">Log out</a>
      </div>
    </div>

    <div class="grid">

      <div class="grid__item medium-up--two-thirds">
        <h2 class="h3">Order History</h2>
        <p>You haven't placed any orders yet.</p>
      </div>

      <div class="grid__item medium-up--one-third">
        <h3>Account details</h3>

        <p class="h5">{{$u->first_name}} {{$u->second_name}}</p>

        <p>{{$u->email}}<br></p>

        <p><a href="{{route('account_addresses')}}" class="text-link">View addresses (1)</a></p>
      </div>

    </div>
  </div>
@endsection
