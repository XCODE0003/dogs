@extends('layouts.layout', ['title' => $settings->name.' | Reset', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">
    <div class="grid">

      <div class="grid__item medium-up--one-third medium-up--push-one-third">

        <div class="section-header">
          <h1 class="section-header__title">
            Reset your password
          </h1>
        </div>
        

        <div id="RecoverPasswordForm" class="">
          <p>We will send you an email to reset your password.</p>


          <div class="form-vertical">
            <form id="RecoverEmailForm">
              <label for="RecoverEmail">Email</label>
              <div class="invalid-feedback-wrapper">
                <input type="email" value="" name="email" class="input-full" autocapitalize="off">
              </div>
              <p>
                <button type="button" class="btn btn--full">Submit</button>
              </p>
              <a href="{{route('login')}}" id="HideRecoverPasswordLink">Cancel</a>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    var wrapper = $('#RecoverEmailForm'),
        button = $('.btn--full');

    button.click(function(e) {
        $data = getInfo(wrapper);

        wrapper.find('*').removeClass('is-invalid');
        wrapper.find('.invalid-feedback').remove();

        $.ajax({
            url: '{{route("reset-password")}}',
            type: "POST",
            data: $data,
            success: function(data) {
                toast('Successfully!', 'You have been sent an email with a new password!', 'success');
            },
            error: function(msg) {
                var errors = msg.responseJSON;
                errors = errors["errors"];
                console.log(errors);
                if(errors == undefined)
                {
                    toast('Error!', 'Mail not found!', 'error');
                }

                for (var key in errors) {

                    for (var error in errors[key]) {
                        console.log(errors[key][error]);
                        // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                        wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').closest(".log_in_input")
                            .addClass('is-invalid');
                        wrapper.find('input[name="' + key + '"], select[name="' + key + '"]')
                            .closest('.log_in_input').append(`
                                    <div class="invalid-feedback">` + errors[key][error] + `</div>
                                `);
                    }
                }
            }
        });
    });
</script>
@endsection
