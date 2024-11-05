@extends('admin.layouts.layout')

@section('content')
    <section class="content" id="wrapperContent">
        <div class="content__inner content__inner--sm">
            <header class="content__title">
                <h1>Редактирование товара <small>{{ $product->title }}</small></h1>
            </header>

            <div class="card new-contact">
                <div class="new-contact__header">
                    <img src="{{ $product->preview }}" class="new-contact__img" alt="title">
                </div>

                <div class="card-body">
                    <div class="row">
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input type="text" value="{{ $product->title }}" name="title" class="form-control"
                                    placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label>Цена</label>
                                <input type="text" value="{{ $product->price }}" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Статус</label>
                                <select class="select2 select2-hidden-accessible" name="status"
                                    data-minimum-results-for-search="1" data-placeholder="Выберите статус"
                                    aria-hidden="true">

                                    <option @if ($product->status == 'not_available') selected @endif value="not_available">Не
                                        доступен</option>
                                    <option @if ($product->status == 'available') selected @endif value="available">Доступен
                                    </option>
                                    <option @if ($product->status == 'pre-order') selected @endif value="pre-order">Предзаказ
                                    </option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Каталог</label>
                                <select class="select2 select2-hidden-accessible" name="category_id"
                                    data-minimum-results-for-search="10" data-placeholder="Выберите каталог"
                                    aria-hidden="true">
                                    @foreach ($categoryes as $categorye)
                                        <option value="{{ $categorye->id }}"
                                            @if ($categorye->id == $product->category_id) selected @endif>{{ $categorye->title }}
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
                            <input type="file" name="preview" data-default-file="{{ $product->preview }}"
                                class="dropify">
                        </div>

                        <div class="col-md-12 form-group">
                            <label>Изображения</label>
                            <form class="dropzone" id="update-portfolio" action="{{ route('admin-dropzone') }}"
                                maxFiles="15">
                                <input type="hidden" name="uid" value="{{ $product->id }}">
                            </form>
                            <script>
                                (function($) {
                                    'use strict';
                                    Dropzone.options.updatePortfolio = {
                                        paramName: "file", // The name that will be used to transfer the file
                                        // maxFilesize: 10, // MB
                                        addRemoveLinks: true,
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        init: function() {
                                            let myDropzone = this;

                                            var imgs = @json($product->photos);
                                            console.log(imgs);
                                            imgs.forEach(function(item, i, arr) {
                                                var mockFile = {
                                                    name: item.path,
                                                    url: item.path,
                                                    uidPhoto: item.id
                                                };

                                                myDropzone.emit("addedfile", mockFile);
                                                //Делаем превьюху по Url где хранятся загруженные картинки
                                                myDropzone.emit("thumbnail", mockFile, item.path);
                                                //Даем статус загруженные
                                                myDropzone.emit("complete", mockFile);
                                            });

                                            //https://github.com/dropzone/dropzone/wiki/FAQ#i-want-to-display-additional-information-after-a-file-uploaded
                                            myDropzone.on("success", function(file, data) {
                                                file["uidPhoto"] = data.uid;
                                                file["url"] = data.url;

                                                this.emit('thumbnail', file, data.url); //показ картинки
                                                this.createThumbnailFromUrl(file, data.url);
                                            });

                                            // https://www.youtube.com/watch?v=6JYZ_05SuC4&ab_channel=LaravelCreative
                                            myDropzone.on("removedfile", function(file) {
                                                removedFileDropzone(file);
                                            });


                                        }
                                    };
                                })(jQuery);

                                function removedFileDropzone(file) {
                                    $.ajax({
                                        url: '{{ route('admin-dropzone-delete') }}',
                                        type: "delete",
                                        data: {
                                            "url": file.url,
                                            "uidPhoto": file.uidPhoto,
                                        },
                                        success: function(data) {

                                        },
                                        error: function(msg) {

                                        }
                                    });
                                }
                            </script>

                        </div>

                        <div class="col-md-12 form-group">
                            <label>Характеристики</label>
                            <div class="form-group characteristic">
                                <input type="text" name="title_characteristic" class="form-control" placeholder="Название">
                                <input type="text" name="text" class="form-control" placeholder="Значение">
                                <a class="btn btn-theme" onclick="characteristic()">Добавить</a>
                            </div>

                            <script>
                                function characteristic()
                                {
                                    $.ajax({
                                        url: '{{ route('admin-characteristic-create') }}',
                                        type: "post",
                                        data: {
                                            "product_id": {{$product->id}},
                                            "title": $(".characteristic input[name='title_characteristic']").val(),
                                            "text": $(".characteristic input[name='text']").val(),
                                        },
                                        success: function(data) {
                                            console.log(data);
                                            toast('Успешно!', 'Успешно!', 'success');
                                            $('.characteristic_table tbody').prepend(`
                                            <tr data-id="`+data["id"]+`">
                                                <th scope="row">`+data["id"]+`</th>
                                                <td>`+data["title"]+`</td>
                                                <td>`+data["text"]+`</td>
                                                <td><a onclick="characteristicDel(`+data["id"]+`);" class="btn_del btn btn-sm btn-clean btn-icon btn-icon-md" title="Удалить"><i class="fas zwicon-trash"></i></a></td>
                                            </tr>
                                            `);
                                        },
                                        error: function(msg) {
                                            toast('Ошибка!', 'Заполните все поля!', 'error');
                                        }
                                    });
                                }
                            </script>

                            <table class="characteristic_table table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Характеристика</th>
                                        <th>Значение</th>
                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($product->characteristics->reverse() as $characteristic)
                                        <tr data-id="{{ $characteristic->id }}">
                                            <th scope="row">{{ $characteristic->id }}</th>
                                            <td>{{ $characteristic->title }}</td>
                                            <td>{{ $characteristic->text }}</td>
                                            <td><a onclick="characteristicDel({{ $characteristic->id }});"
                                                    class="btn_del btn btn-sm btn-clean btn-icon btn-icon-md"
                                                    title="Удалить"><i class="fas zwicon-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <script>
                                function characteristicDel(characteristicId) {
                                    $.ajax({
                                        url: '{{ route('admin-characteristic-delete') }}/'+characteristicId,
                                        type: "delete",
                                        processData: false,
                                        contentType: false,
                                        success: function(data) {
                                            toast('Успешно!', 'Успешно!', 'success');
                                            $('.characteristic_table tr[data-id="'+characteristicId+'"]').slideUp(300);
                                        },
                                        error: function(msg) {

                                        }
                                    });
                                }
                            </script>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <a class="btn btn-theme updateButton">Обновить</a>
                        <a class="btn btn-theme" onclick="location.reload(); return false;">Сброс</a>
                        <a href="{{ route('admin-products') }}" class="btn btn-theme">Назад</a>
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
                url: '{{ route('admin-product-update') }}',
                type: "POST",
                data: $data,
                processData: false,
                contentType: false,
                success: function(data) {
                    swal.fire({
                        type: "success",
                        title: "Успешно!",
                        text: "Вы успешно обновили альбом!",
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
