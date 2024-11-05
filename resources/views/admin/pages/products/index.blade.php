@extends('admin.layouts.layout')

@section('content')


<div class="modal fade" id="modal-add-portfolio">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="card new-contact">
                <header class="content__title">
                    <h1 style="text-align: center;padding-top: 10px;">Добавить товар</h1>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label>Цена</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Статус</label>
                                <select class="select2 select2-hidden-accessible" name="status" data-minimum-results-for-search="10" data-placeholder="Выберите статус" aria-hidden="true">

                                    <option value="not_available">Не доступен</option>
                                    <option value="available">Доступен</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Каталог</label>
                                <select class="select2 select2-hidden-accessible" name="category_id" data-minimum-results-for-search="10" data-placeholder="Выберите каталог" aria-hidden="true">
                                    @foreach ($categoryes as $categorye)
                                        <option value="{{$categorye->id}}">{{$categorye->title}}</option>
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
                            <input type="file" name="preview" class="dropify">
                        </div>

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link addButton">Добавить</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Закрыть</button>
            </div>

            <script>

                var wrapper = $("#modal-add-portfolio"),
                    button = wrapper.find(".addButton");

                button.on('click', function(e) {
                    $data = getInfoAll();

                    wrapper.find('*').removeClass('is-invalid');
                    wrapper.find('.invalid-feedback').remove();

                    $.ajax({
                        url: '{{route("admin-product-create")}}',
                        type: "POST",
                        data: $data,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            swal.fire({
                                type: "Success".toLowerCase(),
                                title: "Успешно!",
                                text: "Вы успешно создали новый товар!",
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
                                    wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').addClass('is-invalid');
                                    wrapper.find('input[name="' + key + '"], select[name="' + key + '"]').closest('.form-group').append(`
                                        <div class="invalid-feedback">` + errors[key][error] + `</div>
                                    `);
                                }
                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
</div>





<section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Список товаров</h1>
        </header>

        <div class="card results">
            <div class="results__header results__header_custom">
                @include("admin.components.menu.product")
                <button type="button" class="btn btn-theme-dark" data-toggle="modal" data-target="#modal-add-portfolio">Добавить</button>
            </div>


            <div class="kt-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="ajax-users">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Статус</th>
                            <th>Каталог</th>
                            <th>Дата</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="clearfix mb-3"></div>

        </div>



    </div>
</section>


<script>
    var table = $('#ajax-users');

    // begin first table

    new DataTable(table, {
        responsive: true,
        searchDelay: 500,
        processing: true,
        serverSide: true,
        lengthMenu: [
            [15, 30, 45, -1],
            ["15 строк", "30 строк", "45 строк", "Все"]
        ],
        sDom: '<"dataTables__top"flB>rt<"dataTables__bottom"ip><"clear">',
        order: [0, 'desc'],
        ajax: {
            url: "{{ route('admin-products-get') }}",
            type: "POST"
        },
        columns: [{
                data: "id",
                searchable: true
            },
            {
                data: "title",
                searchable: true,
                render: function(data, type, row) {
                    return '<img src="' + row["preview"] +
                        '" style="width:45px;height: 45px;border-radius:5px;margin-right:10px;vertical-align:middle;">'+data;
                }
            },
            {
                data: "price",
                searchable: true,
                render: function(data, type, row) {
                    return data+" €";
                }
            },

            {
                data: "status",
                searchable: true,
                render: function(data, type, row) {
                    if(data == "not_available")
                    {
                        return `<div class="red">Нет в наличии</div>`;
                    }
                    else if(data == "available")
                    {
                        return `<div class="green">Доступен</div>`;
                    }
                }
            },
            {
                data: "category.title",
                searchable: true,
                render: function(data, type, row) {
                    return `<a href="{{route('admin-catalog')}}/`+row["category"]["id"]+`">`+data+`</a>`;
                }
            },
            {
                data: "created_at",
                searchable: true,
            },
            {
                data: null,
                searchable: false,
                orderable: false,
                render: function(data, type, row) {
                    return `<a href="{{route("admin-product")}}/` + row.id + `" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Редактировать"><i class="zwicon-pencil"></i></a>
                    <a onclick="del(` + row.id + `,'` + row.title + `');"  class="btn_del btn btn-sm btn-clean btn-icon btn-icon-md" title="Удалить"><i class="fas zwicon-trash"></i></a>
                    `;
                }
            }
        ],
        "language": {
            "searchPlaceholder": "Поиск записей...",
            "processing": "Подождите...",
            "search": "Поиск:",
            "lengthMenu": "Показать _MENU_ записей",
            "info": "Записи с _START_ по _END_ из _TOTAL_ записей",
            "infoEmpty": "Записи с 0 до 0 из 0 записей",
            "infoFiltered": "(отфильтровано из _MAX_ записей)",
            "infoPostFix": "",
            "loadingRecords": "Загрузка записей...",
            "zeroRecords": "Записи отсутствуют.",
            "emptyTable": "В таблице отсутствуют данные",
            "paginate": {
                "first": "Первая",
                "previous": "Предыдущая",
                "next": "Следующая",
                "last": "Последняя"
            },
            "aria": {
                "sortAscending": ": активировать для сортировки столбца по возрастанию",
                "sortDescending": ": активировать для сортировки столбца по убыванию"
            }
        }
    });

    function del($id, $name) {
        swal.fire({
            type: "question",
            title: "Внимание!",
            text: "Вы точно хотите удалить " + $name + "?",
            background: "#000",
            backdrop: "rgba(0,0,0,0.2)",
            buttonsStyling: !1,
            padding: "3rem 3rem 2rem",
            confirmButtonText: 'Удалить',
            cancelButtonText: `Отмена`,
            showCancelButton: true,
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
                title: "ca-title",
                container: "ca"
            }
        }).then((result) => {
            if (result.value) {
                portfoliosDistroy($id);
            }
        });
    }

    function portfoliosDistroy($id) {
        window.location.href = "{{route('admin-product-delete')}}/" + $id;
    }
</script>
@endsection
