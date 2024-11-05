@extends('admin.layouts.layout')

@section('content')

<section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Список пользователей</h1>
        </header>

        <div class="card results">
            <div class="results__header results__header_custom">
               
            </div>


            <div class="kt-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="ajax-users">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Полное имя</th>
                            <th>Почта</th>
                            <th>Роль</th>
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
            url: "{{ route('admin-users-get') }}",
            type: "POST"
        },
        columns: [{
                data: "id",
                searchable: true
            },
            {
                data: "first_name",
                searchable: true,
                render: function(data, type, row) {
                    return data+" "+row['second_name'];
                }
            },
            {
                data: "email",
                searchable: true,
            },
            {
                data: "role",
                searchable: true,
                render: function(data, type, row) {
                    if(data == "user")
                    {
                        return "Пользователь";
                    } else 
                    {
                        return "Админ";
                    }
                }
            },
            {
                data: "created_at",
                searchable: true,
            },
            {
                data: "second_name",
                searchable: false,
                orderable: false,
                render: function(data, type, row) {
                    return `<a href="{{route("admin-user")}}/` + row.id + `" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Редактировать"><i class="zwicon-pencil"></i></a>`;
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