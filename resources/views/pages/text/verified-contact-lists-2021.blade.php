@extends('layouts.layout', ['title' => $settings->name.' | VERIFIED CONTACTS', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

  <div class="grid">
    <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

      <div class="section-header">
        <h1 class="section-header__title">
          VERIFIED CONTACTS
        </h1>
      </div>

      <div class="rte rte--nomargin">
        <h1 style="text-align: center;"></h1>
        <p>There are&nbsp;number of imposters, scammers, and people with foul intentions on the internet. Please use the information below before purchasing.</p>
        <p><span>-----------------------------------------------------------</span></p>
        <p><span style="color: #0b5394;"><strong>VERIFIED NAME OF OUR SUPPORT MANAGER</strong>:</span><span style="color: #990000;"><strong> </strong></span></p>
        <p><span style="color: #00aaff;"><strong>{{$settings->admin_name}}<br></strong></span></p>
        <p>-----------------------------------------------------------</p>
        <meta charset="UTF-8">
        <p><span><strong><span style="color: #0b5394;">VERIFIED PHONE NUMBERS:</span><span style="color: #990000;">&nbsp;</span></strong></span></p>
        <p><span style="color: #00aaff;"><strong>{{$settings->phone}} {{$settings->admin_name}}<br></strong></span></p>
        <p><span style="color: #ff2a00;"><strong>*&nbsp;WE DO NOT USE ANY OTHER NUMBERS TO REACH YOU *</strong></span></p>
        <meta charset="utf-8">
        <p><span>-----------------------------------------------------------</span></p>
        <meta charset="utf-8">
        <p><strong><span style="color: #0b5394;">VERIFIED SOCIAL MEDIA:</span></strong></p>
        <p><span style="color: #00aaff;"><strong>TELEGRAM: <a href="{{$settings->yt}}" target="_blank" title="LINK TO {{$settings->name}} YOUTUBE " rel="noopener noreferrer" class="js-no-transition">LINK</a></strong></span></p>
        <meta charset="UTF-8">
        <p><span style="color: #ff2a00;"><strong>* PLEASE CHECK WHICH PROFILE YOU ARE RECEIVING DM/MESSAGES FROM!!!</strong></span></p>
        <p><span>-----------------------------------------------------------</span></p>
        <meta charset="utf-8">
        <p><strong><span style="color: #0b5394;">VERIFIED MESSENGER:</span></strong></p>
        <p><span style="color: #00aaff;"><strong>{{$settings->phone}} - WHATSAPP</strong></span></p>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <p><span style="color: #00aaff;"><strong>@straubpups - TELEGRAM ID<br></strong></span></p>
        <p><span style="color: #00aaff;"><strong></strong></span><span style="color: #ff2a00;"><strong>* WE DO NOT USE OTHER MESSENGERS FOR COMMUNICATION *</strong></span></p>
        <meta charset="utf-8">
        <p><span>-----------------------------------------------------------</span></p>
        <p><span style="color: #0a5494;"><strong>VERIFIED&nbsp;WEBSITES:</strong></span></p>
        <p><a href="{{route('home')}}" target="_blank" rel="noopener noreferrer" class="js-no-transition"><span style="color: #00aaff;"><strong>{{route('home')}}</strong></span></a></p>
        {{-- <p><span style="color: #00aaff;"><strong><a href="HTTPS://WWW.ROLLYTEACUPPUPPIES.COM" target="_blank" rel="noopener noreferrer" class="js-no-transition">{{route('home')}}</a></strong></span></p> --}}

        <p><span style="color: #ff2a00;"><strong>* WE DO NOT HAVE ANY OTHER WEBSITE*</strong></span></p>
        <p><span>-----------------------------------------------------------</span></p>
      </div>

    </div>
  </div>

</div>


@endsection
