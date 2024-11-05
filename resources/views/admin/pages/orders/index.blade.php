@extends('admin.layouts.layout')

@section('content')

<section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Список заявок</h1>
        </header>

        <div class="card results">
            <div class="results__header results__header_custom">
                <nav class="nav nav-tabs results__nav">
                    <a class="nav-link active">Заявки</a>
                    
                </nav>
                
            </div>


            <div class="kt-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="ajax-users">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Пользователь</th>
                            <th>Полное имя</th>
                            <th>Количество товара</th>
                            <th>Сумма</th>
                            <th>Статус</th>
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
            url: "{{ route('admin-orders-get') }}",
            type: "POST"
        },
        columns: [{
                data: "id",
                searchable: true
            },
            {
                data: "user.first_name",
                searchable: true,
                render: function(data, type, row) {
                    return (data ? `<a href="#">`+data+`</a>` : '');
                }
            },
            {
                data: "full_name",
                searchable: true,
            },
            {
                data: "basket_info.col",
                searchable: false,orderable: false,
            },
            {
                data: "basket_info.sum",orderable: false,
                searchable: false,
            },
            {
                data: "status",
                searchable: true,
                render: function(data, type, row) {
                    if(data == "wait")
                    {
                        return `<div class="orange">Ожидает</div>`;
                    }
                    else if(data == "success")
                    {
                        return `<div class="green">Доставлен</div>`;
                    }
                    else if(data == "cancel")
                    {
                        return `<div class="red">Отменён</div>`;
                    }
                    else if(data == "assembly")
                    {
                        return `<div class="orange">В сборке</div>`;
                    }
                    else if(data == "path")
                    {
                        return `<div class="orange">В пути</div>`;
                    }
                    else if(data == "preorder")
                    {
                        return `<div class="orange">Предзаказ</div>`;
                    }
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
                    return `<a href="{{route("admin-order")}}/` + row.id + `" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Редактировать"><i class="zwicon-eye"></i></a>
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
</script>
@endsection