@extends('layouts.layout', ['title' => $settings->name.' | HOURS OF OPERATION', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

    <div class="grid">
      <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

        <div class="section-header">
          <h1 class="section-header__title">
            HOURS OF OPERATION
          </h1>
        </div>

        <div class="rte rte--nomargin">
          <h3 style="text-align: center;"><span style="color: #3d85c6;"><strong></strong></span></h3>
          <h2 style="text-align: left;">Our business hours are based on Central European Time (GMT+2)&nbsp;</h2>
          <h3 style="text-align: left;"><a href="https://www.timeanddate.com/time/zone/germany/frankfurt" target="_blank" title="KST time" rel="noopener noreferrer" class="js-no-transition">Check our current time here</a></h3>
          <div style="text-align: left;">
            <ul>
              <li>All messages left will be returned as soon as our sales team gets&nbsp;online.<br><br>
              </li>
              <li>With the growing number of inquiries per day, we may not be able to get back to you immediately.<br><br>
              </li>
              <li>Please kindly allow up to 12&nbsp;hours for us to get back to you.<br><br>
              </li>
              <li>For any countries other than US/Canada, we recommend using WhatsApp for contact as it's the best way for us to get back to you.<br><br>
              </li>
              <li>All texts / WhatsApp messages are prioritized as we can get back to you simultaneously while we are on a call.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
@endsection
