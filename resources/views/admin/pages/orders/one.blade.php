@extends('admin.layouts.layout')

@section('content')

<section class="content" id="wrapperContent">
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>Редактирование заказа <small>#{{$order->id}}</small></h1>
        </header>

        <div class="card new-contact">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" value="{{$order->id}}" name="id">
                        <div class="form-group">
                            <label>Статус</label>
                            <select class="select2 select2-hidden-accessible" name="status" data-minimum-results-for-search="5" data-placeholder="Выберите статус" aria-hidden="true">
                                <option value="wait" @if($order->status == "wait") selected @endif>Ожидает</option>
                                <option value="success" @if($order->status == "success") selected @endif>Завершён</option>
                                <option value="cancel" @if($order->status == "cancel") selected @endif>Отменён</option>
                                <option value="assembly" @if($order->status == "assembly") selected @endif>Сборка</option>
                                <option value="path" @if($order->status == "path") selected @endif>В пути</option>
                                <option value="preorder" @if($order->status == "preorder") selected @endif>Предзаказ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Дата доставки</label>
                            <input type="text" value="{{$order->end_at}}" name="end_at" class="form-control date-picker flatpickr-input" placeholder="10.02.2023" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label>Пользователь</label>
                            <input type="text" value="{{$order->user_id}}" {{-- @if($order->user_id) onclick="window.location.href = 'https://ya.ru'" @endif --}} class="form-control" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label>Полное имя</label>
                            <input type="text" value="{{$order->full_name}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Телефон</label>
                            <input type="text" value="{{$order->phone}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Комментарий</label>
                            <input type="text" value="{{$order->comment}}" readonly="readonly" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Адрес</label>
                            <input type="text" value="{{$order->address}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Квартира</label>
                            <input type="text" value="{{$order->sq}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Домофон</label>
                            <input type="text" value="{{$order->intercom}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Подъезд</label>
                            <input type="text" value="{{$order->entrance}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Этаж</label>
                            <input type="text" value="{{$order->floor}}" readonly="readonly" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="form-group">
                        <label>Товары</label>
                        <table class="table table-inverse mb-0">
                            <thead>
                                <tr>
                                    <th>Товар</th>
                                    <th>Количество</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($order->products as $product)
                                @php
                                    $p = (new \App\Http\Services\ProductServices)->one($product["product_id"]);
                                @endphp
                                <tr>
                                    <td>
                                        <img src="{{$p->preview}}" style="width:45px;height: 45px;border-radius:5px;margin-right:10px;vertical-align:middle;">
                                        {{$p->title}}
                                    </td>
                                    <td>{{$product["count"]}}</td>
                                    <td>
                                        <a href="{{route('admin-product', ['product_id' => $p->id])}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Редактировать"><i class="zwicon-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Количество</label>
                            <input type="text" value="{{$order->basket_info['col']}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Сума оплата</label>
                            <input type="text" value="{{$order->basket_info['sum']}}" readonly="readonly" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Вся сумма</label>
                            <input type="text" value="{{$order->basket_info['all_sum']}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Доставка</label>
                            <input type="text" value="{{$order->basket_info['delivery']}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Скидка товара</label>
                            <input type="text" value="{{$order->basket_info['discount']}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Сумма товара</label>
                            <input type="text" value="{{$order->basket_info['sum_product']}}" readonly="readonly" class="form-control">
                        </div>
                    </div>
                </div>

                
                <div class="mt-5 text-center">
                    <a class="btn btn-theme updateButton">Обновить</a>
                    <a class="btn btn-theme" onclick="location.reload(); return false;">Сброс</a>
                    <a href="{{route('admin-orders')}}" class="btn btn-theme">Назад</a>
                </div>
            </div>
            
        </div>
    </div>
</section>


<script>
    var wrapper = $("#wrapperContent"),
        button = wrapper.find(".updateButton");

    button.on('click', function(e) {
        $data = getInfoAll(wrapper);

        wrapper.find('*').removeClass('is-invalid');
        wrapper.find('.invalid-feedback').remove();

        $.ajax({
            url: '{{route("admin-order-update")}}',
            type: "POST",
            data: $data,
            processData: false,
            contentType: false,
            success: function(data) {
                swal.fire({
                    type: "success",
                    title: "Успешно!",
                    text: "Вы успешно обновили заявку!",
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