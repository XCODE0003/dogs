@extends('layouts.layout', ['title' => $settings->name.' | Delivery', 'description' => ''])
@section('head')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script async
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&loading=async&libraries=places&callback=initMap">
    </script>
    <style>
        .input-container.span {

            font-size: 9px;
            font-weight: 800;
            color: #7D7D7D;
        }
        input:focus, input:focus-visible{
            outline: 0 !important;
            box-shadow: none !important;
            border-width: 0;
        }
        .input-container {
            display: flex;
            flex-direction: column;
            border-radius: 5px;
            padding: 8px 12px;
            border: 1px solid #DCDCDC;
            gap: 4px;
        }

        input {
            border: 0px;
            width: 100% !important;
        }
        .grid{
            margin: 0 !important;
        }
         input[type="datetime-local"] {
             cursor: pointer !important;
             position: relative;
         }

        input[type="datetime-local"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }

        input[type="datetime-local"]::-webkit-inner-spin-button,
        input[type="datetime-local"]::-webkit-clear-button {
            z-index: 1;
        }
        .btn{
            background: black;
        }
    </style>
@endsection

@section('content')

    <div style="max-width: 400px; margin: auto;"  class=" page-content">

        <div  style="padding: 0 30px" class="grid">
            <form action="{{route('pet-delivery-form-create')}}" method="post" style="max-width: 450px" class="m-auto w-full">
                @csrf
                <div class="section-header">
                    <h1 class="section-header__title">
                        SENDER ADDRESS
                    </h1>
                </div>
                <div class="flex w-full flex-col gap-5">
                    <div class="input-container">
                      <span>
                          Country / Region
                      </span>
                        <input name="country" required>
                    </div>
                    <div class="flex gap-3.5 w-full max-md:flex-col items-center">
                        <div class="input-container w-full flex-1">
                          <span>
                              First Name
                          </span>
                            <input name="fname" required>
                        </div>
                        <div class="input-container  w-full flex-1">
                              <span>
                                  Last Name
                              </span>
                            <input name="lname" required>
                        </div>
                    </div>
                    <div class="input-container">
                      <span>
                          Address
                      </span>
                        <input name="address" required>
                    </div>
                    <div class="input-container">
                      <span>
                          Phone Number of WhatsApp / Telegram
                      </span>
                        <input name="phone" required >
                    </div>
                </div>
                <div class="section-header mt-10">
                    <h1 class="section-header__title">
                        DELIVERY ADRESS
                    </h1>
                </div>
                <div class="flex w-full flex-col gap-5">
                    <div class="input-container">
                      <span>
                          Country / Region
                      </span>
                        <input name="country_delivery" required>
                    </div>
                    <div class="flex gap-3.5 max-md:flex-col w-full items-center">
                        <div class="input-container w-full flex-1">
                          <span>
                              First Name
                          </span>
                            <input name="fname_delivery" required>
                        </div>
                        <div class="input-container w-full flex-1">
                          <span>
                              Last Name
                          </span>
                            <input name="lname_delivery" required>
                        </div>
                    </div>
                    <div class="input-container">
                          <span>
                              Address
                          </span>
                        <input name="address_delivery" required>
                    </div>
                    <div class="input-container">
                          <span>
                              Phone Number of WhatsApp / Telegram
                          </span>
                        <input name="phone_delivery" required>
                    </div>
                </div>
                <div class="section-header mt-10">
                    <h1 class="section-header__title">
                        PICKUP TIME
                    </h1>
                </div>
                <div class="flex w-full flex-col gap-5">

                    <div class="input-container ">

                        <input type="datetime-local" required name="date" class="cursor-pointer outline-0 select-none border-0" placeholder="12/03/2024 11:00">
                    </div>
                </div>



                <button  class="btn mt-5 rounded-md font-bold w-full">
                    Continue
                </button>
            </form>
        </div>
    </div>

@endsection
