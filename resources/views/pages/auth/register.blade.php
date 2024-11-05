@extends('layouts.layout', ['title' => $settings->name.' | Register', 'description' => ''])
@section('head')
@endsection

@section('content')
<div class="page-width page-content">
    <div class="grid">

      <div class="grid__item medium-up--one-third medium-up--push-one-third">

        <div class="section-header">
          <h1 class="section-header__title">
            Create Account
          </h1>
        </div>

        <div class="form-vertical">
          <form id="create_customer" accept-charset="UTF-8">

            <label for="FirstName">First Name</label>
            <div class="invalid-feedback-wrapper">
              <input type="text" name="first_name" id="FirstName" class="input-full" autocapitalize="words" autofocus="">
            </div>

            <label for="LastName">Last Name</label>
            <div class="invalid-feedback-wrapper">
              <input type="text" name="second_name" id="LastName" class="input-full" autocapitalize="words">
            </div>

            <label for="Email">Email</label>
            <div class="invalid-feedback-wrapper">
              <input type="email" name="email" id="Email" class="input-full" autocapitalize="off">
            </div>

            <label for="CreatePassword">Password</label>
            <div class="invalid-feedback-wrapper">
              <input type="password" name="password" id="CreatePassword" class="input-full">
            </div>

            <p>
              <button type="button" class="btn btn--full">Create</button>
            </p>
          </form>
        </div>

      </div>

    </div>
  </div>

  <script>
    var wrapper = $('#create_customer'),
        button = $('.btn--full');

    button.click(function(e) {
        $data = getInfo(wrapper);

        wrapper.find('*').removeClass('is-invalid');
        wrapper.find('.invalid-feedback').remove();

        $.ajax({
            url: '{{route("register")}}',
            type: "POST",
            data: $data,
            success: function(data) {
              document.location.href = "{{ route('account') }}";
                // toast('Successfully!', "We've sent you a confirmation email!", 'success');
            },
            error: function(msg) {
                var errors = msg.responseJSON;
                errors = errors["errors"];
                console.log(errors);

                for (var key in errors) {

                    for (var error in errors[key]) {
                        console.log(errors[key][error]);
                        // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                        wrapper.find('input[name="' + key + '"], select[name="' + key + '"]')
                        .closest(".invalid-feedback-wrapper")
                            .addClass('is-invalid');
                        wrapper.find('input[name="' + key + '"], select[name="' + key + '"]')
                            .closest('.invalid-feedback-wrapper').append(`
                                    <div class="invalid-feedback">` + errors[key][error] + `</div>
                                `);
                    }
                }
            }
        });
    });
</script>
@endsection
