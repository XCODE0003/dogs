@extends('layouts.layout', ['title' => $settings->name.' | Delivery', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

    <div class="grid">
      <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

        <div class="section-header">
          <h1 class="section-header__title">
            DELIVERY
          </h1>
        </div>

        <div class="rte rte--nomargin">
          <div>
            <ul>
              <li><span style="color: #799c29;">The estimated delivery date given by the sales department is an estimate.</span> This date may change depending on the puppy's growth. It should be noted when buying a puppy from us - the time from ordering to receipt of the puppy is about 2-3 weeks.</li>
            </ul>
          </div>
          <div>
            <ul>
              <li>If you order a <span style="color: #8fce00;"><strong><a href="{{route('taxi')}}" title="Order a Pet Taxi">PET TAXI</a></strong></span>, the time from order to receipt is from 12 hours, depending on the complexity of the journey.</strong></li>
            </ul>
          </div>
          <div>
            <ul>
              <li>In the process of organizing flights, unforeseen circumstances may arise, for example, seats for the specified dates may either be filled or not accepted by the airline.</li>
            </ul>
          </div>
          <div>
            <ul>
              <li>Even if we book tickets for a specified date, it is not guaranteed until we receive information from the booking agency.</li>
            </ul>
          </div>
          <div>
            <ul>
              <li><span style="color: #799c29;">Safety is our top priority.</strong></span> Over the years and being a reputable online pet store, all of our puppies have been delivered safely. We have the right to reschedule a delivery date if the delivery of a puppy on a particular day jeopardizes the health of the puppy.</li>
            </ul>
          </div>
          <ul></ul>

        </div>
<ul>
        <div class="rte rte--nomargin">
            <img src="/temple/imgs/2.png" alt="">
</ul>
        </div>
    </div>

  </div>
@endsection
