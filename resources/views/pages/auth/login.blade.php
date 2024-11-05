@extends('layouts.layout', ['title' => $settings->name.' | Login', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">
    <div class="grid">

      <div class="grid__item medium-up--one-third medium-up--push-one-third">

        <div class="section-header">
          <h1 class="section-header__title">
            Login
          </h1>
        </div>

        <div class="note note--success hide" id="ResetSuccess">
          We've sent you an email with a link to update your password.
        </div>

        <div id="CustomerLoginForm" class="form-vertical">
          <form method="post" accept-charset="UTF-8" data-login-with-shop-sign-in="true">
            <label for="CustomerEmail">Email</label>
            <div class="invalid-feedback-wrapper">
              <input type="email" name="email" class="input-full" autocapitalize="off" autofocus="">
            </div>

            <div class="grid">
              <div class="grid__item one-half">
                <label for="CustomerPassword">Password</label>
              </div>
              <div class="grid__item one-half text-right">
                <small class="label-info">
                  <a href="{{route('restore')}}" id="RecoverPassword" class="js-no-transition">
                    Forgot?
                  </a>
                </small>
              </div>
            </div>
            <div class="invalid-feedback-wrapper">
              <input type="password" name="password" class="input-full">
            </div>

            <p>
              <button type="button" class="btn btn--full">Sign In</button>
            </p>
            <p><a href="{{route('signup')}}" id="customer_register_link">Create account</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    var wrapper = $('#CustomerLoginForm'),
        button = $('.btn--full');

    button.click(function(e) {
        $data = getInfo(wrapper);

        wrapper.find('*').removeClass('is-invalid');
        wrapper.find('.invalid-feedback').remove();

        $.ajax({
            url: '{{route("auth")}}',
            type: "POST",
            data: $data,
            success: function(data) {
                document.location.href = "{{ route('account') }}";
            },
            error: function(msg) {
                var errors = msg.responseJSON;
                errors = errors["errors"];
                console.log(errors);

                for (var key in errors) {
                    for (var error in errors[key]) {
                        console.log(errors[key][error]);
                        console.log("KEY", key)
                        // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                        wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').closest(".invalid-feedback-wrapper")
                        .addClass('is-invalid');
                        wrapper.find('input[name="' + key + '"], select[name="' + key + '"]')
                        .closest('.invalid-feedback-wrapper').append(`
                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                        `);
                        if(key === 'code') {
                            wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').addClass('is-visible')
                        }
                    }
                }
            }
        });
    });
</script>
@endsection
