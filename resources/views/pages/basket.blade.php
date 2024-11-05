@extends('layouts.layout', ['title' => $settings->name . ' | Your Shopping Cart', 'description' => ''])
@section('head')
<script>
    function checkout()

    {
        $.ajax({
            url: '{{ route('checkouts-create') }}',
            type: "post",
            data: {
              "ref": localStorage.getItem("ref"),
              "comment": $("#CartSpecialInstructions").val()
            },
            success: function(id) {
                location.href = "{{route('checkouts')}}/"+id;
            }
        });
    }
</script>

@endsection

@section('content')

    @if (!$products)
        <div class="page-width page-content">

            <div id="CartPage" class="grid">
                <div class="grid__item">

                    <div class="section-header">
                        <h1 class="section-header__title">
                            Bag
                        </h1>
                    </div>

                    <form novalidate="" class="cart cart--empty">

                        <div class="cart__empty-text text-center">
                            <p>Your bag is currently empty.</p>
                            <p>
                                <a href="{{ route('search') }}" class="btn">Continue Searching</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="page-width page-content">

            <div id="CartPage" class="grid">
                <div class="grid__item">

                    <div class="section-header">
                        <h1 class="section-header__title">
                            Bag
                        </h1>
                    </div>

                    <form novalidate="" class="cart">

                        <div class="cart__row small--hide cart__header-labels">
                            <div class="grid grid--full">
                                <div class="grid__item medium-up--one-half medium-up--push-one-half">
                                    <div class="grid grid--full">
                                        <div class="grid__item one-third">
                                            Price
                                        </div>
                                        <div class="grid__item one-third text-center">
                                            Quantity
                                        </div>
                                        <div class="grid__item one-third text-right">
                                            Total
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="cart__items" data-cart-item-list="">

                            @foreach ($products as $product)
                                @php
                                    foreach ($productList as $productInfo) {
                                        if($product->id == $productInfo['product_id'])
                                        {
                                            $sum = isset($productInfo['sum']) ? $productInfo['sum'] : $product->price;
                                            $col = $productInfo['count'];
                                        }
                                    }
                                @endphp
                                <div class="cart__item cart__row" data-id="{{$product->id}}">
                                    <div class="grid grid--full cart__row--table-large">

                                        <div class="grid__item medium-up--one-half small--three-quarters">
                                            <div class="cart__row-product">
                                                <div class="cart__product-image-wrap loaded">
                                                    <a href="/products/envi-male?variant=40222249648215"
                                                        class="cart__product-image lazyloaded"
                                                        style="background-image: url(&quot;{{$product->preview}}&quot;);">
                                                    </a>

                                                </div>

                                                <div class="cart__row-content">
                                                    <a href="/products/envi-male?variant=40222249648215"
                                                        class="cart__product-name" data-cart-item-href=""
                                                        data-cart-item-title="">
                                                        {{$product->title}}
                                                    </a>

                                                    @foreach ($productList as $productInfo)
                                                        @if ($productInfo['product_id'] == $product->id)
                                                            <span class="cart__item-subtitle cart__item-subtitle--inline">{{($productInfo['type'] == "full" ? 'Full Price': 'Deposit')}}</span>
                                                        @endif
                                                    @endforeach

                                                    <span data-cart-item-price-container="" class="medium-up--hide"><span
                                                            class="cart__item-price">€{{$sum}} EUR</span></span>

                                                    <div class="">

                                                    </div>
                                                    <div class="cart__item-subtitle" data-cart-item-property-list="">
                                                        <div class=" ajax-cart__template" data-cart-item-property="">
                                                            t:e
                                                        </div>
                                                    </div>

                                                    <div class="medium-up--hide">
                                                        <div data-cart-item-discount-list=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid__item medium-up--one-half small--one-quarter">
                                            <div class="grid grid--full cart__row--table">

                                                <div class="grid__item one-third small--hide">
                                                    <div data-cart-item-price-container="">
                                                        <div class="cart__item-price">€{{$sum}} EUR</div>
                                                    </div>

                                                    <div data-cart-item-discount-list=""></div>
                                                </div>

                                                <div class="grid__item medium-up--one-third text-center small--text-right">

                                                    <div>
                                                        <label
                                                            for="cart_updates_40222249648215:6e8630ecdee2b117c8ffff6fe9ed9240"
                                                            class="visually-hidden" data-cart-item-label-quantity="">
                                                            Quantity
                                                        </label>
                                                        <input type="number"

                                                            class="cart__quantity" value="{{$col}}"
                                                            >
                                                    </div>
                                                    <a onclick="delItemBasket({{$product->id}});" class="cart__remove" data-cart-item-delete="">
                                                        Remove
                                                    </a>

                                                </div>

                                                <div class="grid__item one-third small--hide text-right">
                                                    <div data-cart-item-line-price-container="">
                                                        <div class="cart__item-price sumItemAll">€{{($col * $sum)}} EUR</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="cart__row cart__footer">
                            <div class="grid">
                                <div class="grid__item medium-up--seven-twelfths">
                                    <div class="cart__note" data-cart-note-container="">
                                        <label for="CartSpecialInstructions">Order note</label>
                                        <textarea name="note" class="input-full cart-notes" id="CartSpecialInstructions" data-cart-note=""></textarea>
                                    </div>
                                </div>
                                <div class="grid__item medium-up--one-half text-center medium-up--text-right">


                                    <div data-cart-discount-container="" class="hide">
                                        <div class="cart__discounts">
                                            <div class="h3">
                                                Discounts
                                            </div>
                                            <div class="cart__note" data-cart-discount-content=""></div>
                                        </div>
                                    </div>

                                    <div class="h3 cart__subtotal">
                                        Subtotal
                                        <span data-cart-subtotal="" class="allSum">€0 EUR</span>
                                    </div>

                                    <p class="cart__note">
                                        Shipping, taxes, and discount codes calculated at checkout.
                                    </p>
                                    <div class="cart__checkout-wrapper">

                                        <button type="button" onclick="checkout();" style="background-color: green;" class="btn cart__checkout">
                                            <span>Take Me Home</span>
                                        </button>
                                    </div>

                                    <div class="cart__checkout-wrapper">
                                        <a href="/">
                                            Continue Searching
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <script>
            var basketInfo = @json($productList);
            var products = @json($products);

            var discount = 0,
                sum = 0,
                delivery = 0;

            function renderBasket() {
                sum = 0;
                discount = 0;

                //подсчёт полной суммы
                Object.keys(basketInfo).forEach(info => {
                  Object.keys(products).forEach(product => {
                    if(basketInfo[info]["product_id"] == products[product]["id"])
                    {
                      var b = basketInfo[info];
                      var p = products[product];

                      var n_sum = parseFloat(b["sum"] ? b['sum'] : p['price']) * b["count"], n_discount = 0;

                      //изменяем сумму в таблице
                      $('.cart__item.cart__row[data-id="'+products[product]["id"]+'"]')
                        .find(".sumItemAll").text("€"+n_sum+" EUR");

                    //   if(p["discount"]){
                    //     n_discount = n_sum * (1 - p["discount"] / 100);
                    //   }

                    //   if(!n_discount)
                    //   {
                        sum = sum + n_sum;
                    //   } else {
                    //     sum_t = sum_t + n_discount;
                    //     discount = discount + (n_sum - n_discount);
                    //   }
                    }
                  });
                });

                delivery = parseFloat(delivery);

                sum = sum + delivery;

                //

                // discount = parseFloat(discount).toFixed(2);
                sum = parseFloat(sum).toFixed(2);
                //


                $(".allSum").text("€"+sum+" EUR");
                // console.log("Фул сумма"+ sum);
                // console.log("Скидка"+ discount);
                // console.log("Сумма товара"+ sum_t);
            }


            $(".cart__quantity").change(function() {
                console.log($(this).val());
                if($(this).val() <= 0)
                {
                    delItemBasket($(this).closest(".cart__item").data("id"));
                } else
                {
                    basketItemCount($(this).closest(".cart__item").data("id"), $(this).val());
                }
            });

            function basketItemCount(product_id, count){
                var obj = $(this);
                $.ajax({
                    url: '{{ route('basket-count') }}',
                    type: "get",
                    data: {
                      "product_id": product_id,
                      "count": count
                    },
                    success: function(data) {
                      //console.log(obj.closest(".count").find("p"));
                      basketInfo = data;

                      renderBasket();
                    }
                });
            }

            // -
            // function decrease(product_id)
            // {
            //     $.ajax({
            //         url: '{{ route('basket-count') }}',
            //         type: "get",
            //         data: {
            //           "product_id": product_id,
            //           "count": -1
            //         },
            //         success: function(data) {
            //           //console.log(-1);
            //           basketInfo = data;
            //           var countItem = obj.closest(".count").data("count");
            //           countItem = countItem - 1;

            //           if(countItem <= 0){countItem++;}
            //           obj.closest(".count").data("count", countItem);
            //           obj.closest(".count").find("p").html(countItem);

            //           renderBasket();
            //         }
            //     });
            // }

            // +
            // function increase(product_id){
            //     var obj = $(this);
            //     $.ajax({
            //         url: '{{ route('basket-count') }}',
            //         type: "get",
            //         data: {
            //           "product_id": product_id,
            //           "count": 1
            //         },
            //         success: function(data) {
            //           //console.log(obj.closest(".count").find("p"));
            //           basketInfo = data;
            //           var countItem = obj.closest(".count").data("count");
            //           countItem = countItem + 1;
            //           obj.closest(".count").data("count", countItem);
            //           obj.closest(".count").find("p").html(countItem);

            //           renderBasket();
            //         }
            //     });
            // }


            renderBasket();
        </script>


    @endif
@endsection
