@extends('layouts.layout', ['title' => $settings->name.' | Scam Alert', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">

    <div class="grid">
      <div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

        <div class="section-header">
          <h1 class="section-header__title">
            SCAM ALERT!!
          </h1>
        </div>

        <div class="rte rte--nomargin">
          <div style="text-align: left;">We get a lot of comments about how scammers are using our photos and videos to scam people.
            </div>
          <div style="text-align: left;"></div>
          <div style="text-align: left;">Some remove our watermarks and some even use our watermark and claim to be resellers, breeders or friends we work with.&nbsp;<br><br>
          </div>
          <div style="text-align: left;">
            <ul>
              <li style="text-align: left;">
                <span style="color: #799c29;"><strong>ALWAYS use our <a href="{{route('verified-contact-lists-2021')}}" title="Link to verified contact">VERIFIED CONTACT LIST</a>. If you speak to any other phone number than the one listed here, it is not us.</strong></span><br><br>
              </li>
              <li style="text-align: left;">We do <strong>NOT</strong> email you directly on Telegram through any other account other than our official account to promote or sell you a puppy when you leave a comment on our post. Please check our verified contact list HERE to make sure you are being contacted by our user.<br><br>
              </li>
              <li style="text-align: left;">We do <strong>NOT</strong> have Facebook account<br><br>
              </li>
              <li style="text-align: left;">We have <strong>NO</strong>&nbsp;middlemen and our breeders do not have a direct retail sales line. Due to these actions, we have decided to set up a separate page on our website to prevent fraud / scams / imposters stealing from our customers.<br><br>
              </li>
            </ul>
          </div>
          <div style="text-align: left;">To protect yourself from scammers, please check the following:</div>
          <div style="text-align: left;">
            <ul>
              <li>
                <span style="color: #799c29;"> <strong>Make sure it is a legitimate business</strong>. <br><strong>Check the company registration or business license. Make sure they have not expired.</strong> </span> <br><br>
              </li>
              <li>There are very strict shipping regulations for some countries, especially Australia, New Zealand or Japan. If someone claims that a puppy can be delivered in a very short time, such as a day, it is most likely a scam.<br><br>
              </li>
              <li>If you are a victim of a scam/fraud, contact your local consumer protection office and also file a cyber fraud report on the FBI website.<br><br>
              </li>

              <li>Scammers will tell you what you want to hear. <span style="color: #799c29;"><strong>Be very careful!</strong></span><br><br>
              </li>

            </ul>
          </div>
          <div style="text-align: left;"><em><strong><span style="color: #cc0000;"><span style="color: #ff0000;"></span></span></strong></em></div>
        </div>

      </div>
    </div>

  </div>
@endsection
