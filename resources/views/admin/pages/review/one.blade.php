@extends('admin.layouts.layout')

@section('content')
    <section class="content" id="wrapperContent">
        <div class="content__inner content__inner--sm">
            <header class="content__title">
                <h1>Редактирование <small>{{ $item->title }}</small></h1>
            </header>

            <div class="card new-contact">
                <div class="new-contact__header">
                    <img src="{{ $item->preview }}" class="new-contact__img" alt="title">
                </div>

                <div class="card-body">
                    <div class="row">
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Каталог</label>
                                <select class="select2 select2-hidden-accessible" name="categorie_id"
                                    data-minimum-results-for-search="10" data-placeholder="Выберите каталог"
                                    aria-hidden="true">
                                    @foreach ($categoryes as $categorye)
                                        <option value="{{ $categorye->id }}"
                                            @if ($categorye->id == $item->categorie_id) selected @endif>{{ $categorye->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Превью</label>
                            <div class="custom-control custom-radio mb-2">
                                <input type="checkbox" checked id="customRadio1" name="watermark" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Вставить вотермарку</label>
                            </div>
                            <!-- <form class="dropzone" id="add-portfolio" action="/" maxFiles="1"></form> -->
                            <input type="file" name="preview" data-default-file="{{ $item->preview }}"
                                class="dropify">


                        </div>

                        <div class="col-md-12 form-group">
                            <label>Описание</label>
                            <input type="hidden" name="description">
                            <!-- <form class="dropzone" id="add-portfolio" action="/" maxFiles="1"></form> -->
                            <div class="summernoteExample" data-name="description">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <a class="btn btn-theme updateButton">Обновить</a>
                        <a class="btn btn-theme" onclick="location.reload(); return false;">Сброс</a>
                        <a href="{{ route('admin-reviews') }}" class="btn btn-theme">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        var wrapper = $("#wrapperContent"),
            button = wrapper.find(".updateButton");

        button.on('click', function(e) {
            $data = getInfoAll();

            wrapper.find('*').removeClass('is-invalid');
            wrapper.find('.invalid-feedback').remove();

            $.ajax({
                url: '{{ route("admin-review-update") }}',
                type: "POST",
                data: $data,
                processData: false,
                contentType: false,
                success: function(data) {
                    swal.fire({
                        type: "success",
                        title: "Успешно!",
                        text: "Успешно обновлено!",
                        background: "#000",
                        backdrop: "rgba(0,0,0,0.2)",
                        buttonsStyling: !1,
                        padding: "3rem 3rem 2rem",
                        customClass: {
                            confirmButton: "btn btn-link",
                            title: "ca-title",
                            container: "ca"
                        }
                    }).then((result) => {
                        location.reload();
                    });
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
                                .addClass('is-invalid');
                            wrapper.find('input[name="' + key + '"], select[name="' + key + '"]')
                                .closest('.form-group').append(`
                                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                                    `);
                        }

                        if (key == "id") {
                            swal.fire({
                                type: "error",
                                title: "Ошибка!",
                                text: "Запись не найдена!",
                                background: "#000",
                                backdrop: "rgba(0,0,0,0.2)",
                                buttonsStyling: !1,
                                padding: "3rem 3rem 2rem",
                                customClass: {
                                    confirmButton: "btn btn-link",
                                    title: "ca-title",
                                    container: "ca"
                                }
                            }).then((result) => {
                                location.reload();
                            });
                        }
                    }
                }
            });
        });
    </script>
@endsection
