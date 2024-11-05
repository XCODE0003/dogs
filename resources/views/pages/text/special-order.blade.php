@extends('layouts.layout', ['title' => $settings->name . ' | Shopping List', 'description' => ''])
@section('head')
@endsection

@section('content')
    <div class="page-width page-content">

        <div class="grid">
            <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

                <header class="section-header">
                    <h1 class="section-header__title">
                        SPECIAL ORDER
                    </h1>
                </header>

                <div class="rte rte--nomargin">
                    <meta charset="UTF-8">
                    <ul>
                        <li>Special order is a<span>&nbsp;</span><strong><span>service to
                                    locate</span></strong><span>&nbsp;</span>a breed and gender, a color of the puppy you
                            want. Since a puppy is a living animal, no puppy is going to look the same. However, we can
                            locate the similar ones to what we had previously for sale.<br><br>
                        </li>
                        <li>Once €1,000 deposit is made, the service to locate the puppy will start. Once we locate the
                            particular puppy, the client will have first priority before the post goes up on our sales
                            channel. The client has two hours to decide whether to keep or pass on the puppy.&nbsp;<br><br>
                        </li>
                        <li>If the client is happy with the puppy, the €1,000 deposit is applied toward the puppy price and
                            the<span>&nbsp;</span><span><strong>remaining balance becomes due in&nbsp;one (1) calendar day
                                    /&nbsp;24 hours.</strong></span><br><br>
                        </li>
                        <li>If the client is unhappy with the puppy we present, they are welcome to pass on the puppy and
                            wait for the next available puppy. If two hours have passed upon presentation, it is considered
                            to pass on the puppy.&nbsp;<br><br>
                        </li>
                        <li>The client will have privilege of passing&nbsp;the puppy two times before this privilege goes
                            away. The €1,000 deposit paid does not expire.<br><br>
                        </li>
                        <li>Please consult with your sales associate for a duration of locating the puppy. <strong>Some
                                breed/color/gender can&nbsp;have waiting list in place.</strong><br><br>
                        </li>
                        <li><strong><span style="color: #ff2a00;">Please do NOT place the order if you are unsure or not
                                    committed to purchase.</span><br><br></strong></li>
                        <li>Please take a note that there will be<span>&nbsp;</span><span><strong>€50/day hotel fee from the
                                    day of deposit if the cancellation takes place</strong></span>. If the flight has been
                            booked, the booking fee will not be reimbursed.<br><br>
                        </li>
                        <li>€1,000 deposit is a payment for the locating the particular puppy. It is a service fee and is
                            <strong>not refundable</strong>.</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
@endsection
