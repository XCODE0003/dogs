@extends('admin.layouts.layout')

@section('content')
    <section class="content">
        <header class="content__title">
            <h1>Настройки <small>Здесь собраны все доступные настройки на сайте!</small></h1>
        </header>

        <div class="widget-lists card-columns">
            <div class="card widget-past-days">
                <div class="card-body">
                    <h4 class="card-title">Контактная информация</h4>
                    <h6 class="card-subtitle"></h6>
                </div>

                <!-- <div class="widget-past-days__main">
                            <div class="flot-chart flot-chart--sm flot-past-days" style="padding: 0px; position: relative;">
                                </div>
                        </div> -->

                <div class="listview listview--striped" id="wrapperSettingsInfo">
                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Название сайта</small>
                            <input type="text" name="name" value="{{ $settings->name }}" class="form-control"
                                placeholder="Название сайта" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Почта</small>
                            <input type="text" name="email" value="{{ $settings->email }}" class="form-control"
                                placeholder="test@mail.ru" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Телефон</small>
                            <input type="text" name="phone" value="{{ $settings->phone }}" class="form-control"
                                placeholder="+79323070000" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;display: flex;justify-content: center;">

                            <button type="button" class="btn btn-success">Сохранить</button>

                        </div>
                    </div>

                    <script>
                        function fin() {
                            swal.fire({
                                type: "Success".toLowerCase(),
                                title: "Успешно!",
                                text: "Вы успешно обновили глобальные настройки!",
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

                        var
                            buttonSettingsText = $("#wrapperSettingsInfo").find(".btn-success");
                        buttonSettingsText.on('click', function(e) {
                            var wrapper = $("#wrapperSettingsInfo");

                            var $data = InfoSettingsText(wrapper);

                            wrapper.find('*').removeClass('is-invalid');
                            wrapper.find('.invalid-feedback').remove();

                            $.ajax({
                                url: '{{ route('admin-info-update') }}',
                                type: "POST",
                                data: $data,
                                processData: false,
                                contentType: false,
                                success: function(data) {
                                    fin();
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
                                                .closest('.widget-past-days__info').append(`
                                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                                    `);
                                        }
                                    }
                                }
                            });
                        });

                        function InfoSettingsText(wrapper) {
                            var $data = new FormData();
                            wrapper.find('input, textearea, select').each(function() {
                                $data.append(this.name, $(this).val());
                            });

                            return $data;
                        }
                    </script>

                </div>
            </div>

            {{-- <div class="card widget-pie" id="wrapperSettingsImgs">
            <div class="card-body">
                <h4 class="card-title">Фото на сайте</h4>
                <h6 class="card-subtitle"></h6>
            </div>
            <div class="widget-pie__inner">
                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div style="padding: 10px;">
                        <input type="file" name="logo" class="dropify" data-default-file="{{$settings->logo}}">
                    </div>
                    <div class="widget-pie__title">Логотип</div>
                </div>

                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div style="padding: 10px;">
                        <input type="file" name="favicon" class="dropify" data-default-file="{{$settings->favicon}}">
                    </div>
                    <div class="widget-pie__title">Фавикон</div>
                </div>

                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div style="padding: 10px;">
                        <input type="file" name="logo_white" class="dropify" data-default-file="{{$settings->logo_white}}">
                    </div>
                    <div class="widget-pie__title">Доп. логотип<br> белый</div>
                </div>



            </div>
            <div class="listview__item">
                <div class="widget-past-days__info" style="width: 100%;display: flex;justify-content: center;">

                    <button type="button" class="btn btn-success">Сохранить</button>

                </div>
            </div>
            <script>
                var
                    buttonSettingsText = $("#wrapperSettingsImgs").find(".btn-success");
                buttonSettingsText.on('click', function(e) {
                    var wrapper = $("#wrapperSettingsImgs");

                    var $data = InfoImgsText(wrapper);

                    wrapper.find('*').removeClass('is-invalid');
                    wrapper.find('.invalid-feedback').remove();

                    $.ajax({
                        url: '/admin/settings-imgs-update',
                        type: "POST",
                        data: $data,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            fin();
                        },
                        error: function(msg) {
                            var errors = msg.responseJSON;
                            errors = errors["errors"];
                            console.log(errors);

                            for (var key in errors) {

                                for (var error in errors[key]) {
                                    console.log(errors[key][error]);
                                    // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                                    wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').addClass('is-invalid');
                                    wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').closest('.widget-pie__item').append(`
                                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                                    `);
                                }
                            }
                        }
                    });
                });

                function InfoImgsText(wrapper) {
                    var $data = new FormData();

                    $data.append('favicon', wrapper.find('input[name="favicon"]').prop('files')[0]);
                    $data.append('logo_white', wrapper.find('input[name="logo_white"]').prop('files')[0]);
                    $data.append('logo', wrapper.find('input[name="logo"]').prop('files')[0]);

                    return $data;
                }
            </script>
        </div> --}}

            <div class="card widget-past-days">
                <div class="card-body">
                    <h4 class="card-title">Информация на сайте</h4>
                    <h6 class="card-subtitle"></h6>
                </div>

                <!-- <div class="widget-past-days__main">
                            <div class="flot-chart flot-chart--sm flot-past-days" style="padding: 0px; position: relative;">
                                </div>
                        </div> -->

                <div class="listview listview--striped" id="wrapperSettingsInfo2">
                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Имя администратора</small>
                            <input type="text" name="admin_name" value="{{ $settings->admin_name }}" class="form-control"
                                placeholder="Brain" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class=" widget-past-days__info" style="width: 100%;">
                            <small style="margin-bottom: 10px; display: block;">Тех. работы</small>
                            <select class="select2 select2-hidden-accessible" name="teh_works"
                                data-minimum-results-for-search="10" aria-hidden="true">
                                <option value="1" @if ($settings->teh_works) selected @endif>Включены</option>
                                <option value="0" @if (!$settings->teh_works) selected @endif>Выключены</option>
                            </select>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;display: flex;justify-content: center;">

                            <button type="button" class="btn btn-success">Сохранить</button>

                        </div>
                    </div>

                    <script>
                        var
                            buttonSettingsText = $("#wrapperSettingsInfo2").find(".btn-success");
                        buttonSettingsText.on('click', function(e) {
                            var wrapper = $("#wrapperSettingsInfo2");

                            var $data = InfoSettingsText(wrapper);

                            wrapper.find('*').removeClass('is-invalid');
                            wrapper.find('.invalid-feedback').remove();

                            $.ajax({
                                url: '{{ route('admin-text-update') }}',
                                type: "POST",
                                data: $data,
                                processData: false,
                                contentType: false,
                                success: function(data) {
                                    fin();
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
                                                .closest('.widget-past-days__info').append(`
                                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                                    `);
                                        }
                                    }
                                }
                            });
                        });

                        function InfoSettingsText(wrapper) {
                            var $data = new FormData();
                            wrapper.find('input, textearea, select').each(function() {
                                $data.append(this.name, $(this).val());
                            });

                            return $data;
                        }
                    </script>

                </div>
            </div>



            <div class="card widget-past-days">
                <div class="card-body">
                    <h4 class="card-title">Соц. сети</h4>
                    <h6 class="card-subtitle"></h6>
                </div>

                <!-- <div class="widget-past-days__main">
                            <div class="flot-chart flot-chart--sm flot-past-days" style="padding: 0px; position: relative;">
                                </div>
                        </div> -->

                <div class="listview listview--striped" id="wrapperSettingsSocial">
                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Ютуб</small>
                            <input type="text" name="yt" value="{{ $settings->yt }}" class="form-control"
                                placeholder="https://www.youtube.com/channel/UCmYhTZSzhXX3bDD9U7Y-Fhg	"
                                style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Инстаграм</small>
                            <input type="text" name="in" value="{{ $settings->in }}" class="form-control"
                                placeholder="https://instagram.com/" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Ватсап</small>
                            <input type="text" name="wa" value="{{ $settings->wa }}" class="form-control"
                                placeholder="https://web.whatsapp.com/send/?phone=16786317877" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;">
                            <small>Текст</small>
                            <input type="text" name="text" value="{{ $settings->text }}" class="form-control"
                                placeholder="+1 678-631-7877" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info" style="width: 100%;display: flex;justify-content: center;">

                            <button type="button" class="btn btn-success">Сохранить</button>

                        </div>
                    </div>

                    <script>
                        var
                            buttonSettingsText = $("#wrapperSettingsSocial").find(".btn-success");
                        buttonSettingsText.on('click', function(e) {
                            var wrapper = $("#wrapperSettingsSocial");

                            var $data = InfoSettingsText(wrapper);

                            wrapper.find('*').removeClass('is-invalid');
                            wrapper.find('.invalid-feedback').remove();

                            $.ajax({
                                url: '{{ route('admin-social-update') }}',
                                type: "POST",
                                data: $data,
                                processData: false,
                                contentType: false,
                                success: function(data) {
                                    fin();
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
                                                .closest('.widget-past-days__info').append(`
                                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                                    `);
                                        }
                                    }
                                }
                            });
                        });

                        function InfoSettingsText(wrapper) {
                            var $data = new FormData();
                            wrapper.find('input, textearea, select').each(function() {
                                $data.append(this.name, $(this).val());
                            });

                            return $data;
                        }
                    </script>

                </div>
            </div>
            {{-- <div class="card widget-past-days" id="wrapperSettingsSelect">
            <div class="card-body">
                <h4 class="card-title">Взаимодействие с сайтом</h4>
                <h6 class="card-subtitle"></h6>
            </div>

            <!-- <div class="widget-past-days__main">
                        <div class="flot-chart flot-chart--sm flot-past-days" style="padding: 0px; position: relative;">
                            </div>
                    </div> -->

            <div class="listview listview--striped">
                <div class="listview__item">
                    <div class="widget-past-days__info" style="width: 100%;">
                        <small style="margin-bottom: 10px; display: block;">Тех. работы</small>
                        <select class="select2 select2-hidden-accessible" name="teh_works" data-minimum-results-for-search="10" aria-hidden="true">
                            <option value="1" @if ($settings->teh_works) selected @endif>Включены</option>
                            <option value="0" @if (!$settings->teh_works) selected @endif>Выключены</option>
                        </select>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="widget-past-days__info" style="width: 100%;display: flex;justify-content: center;">

                        <button type="button" class="btn btn-success">Сохранить</button>

                    </div>
                </div>
            </div>
            <script>
                var
                    buttonSettingsText = $("#wrapperSettingsSelect").find(".btn-success");
                    buttonSettingsText.on('click', function(e) {
                    var wrapper = $("#wrapperSettingsSelect");

                    var $data = InfoSettingsText(wrapper);

                    wrapper.find('*').removeClass('is-invalid');
                    wrapper.find('.invalid-feedback').remove();

                    $.ajax({
                        url: '{{route("admin-select-update")}}',
                        type: "POST",
                        data: $data,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            fin();
                        },
                        error: function(msg) {
                            var errors = msg.responseJSON;
                            errors = errors["errors"];
                            console.log(errors);

                            for (var key in errors) {

                                for (var error in errors[key]) {
                                    console.log(errors[key][error]);
                                    // $('#form_review input[name="' + key + '"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
                                    wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').addClass('is-invalid');
                                    wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').closest('.widget-past-days__info').append(`
                                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                                    `);
                                }
                            }
                        }
                    });
                });
            </script>
        </div> --}}
        </div>
    </section>
@endsection
