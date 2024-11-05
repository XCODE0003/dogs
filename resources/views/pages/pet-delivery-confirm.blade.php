@extends('layouts.layout', ['title' => $settings->name.' | Delivery', 'description' => ''])
@section('head')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <style>
        .input-container.span {

            font-size: 9px;
            font-weight: 800;
            color: #7D7D7D;
        }

        input:focus, input:focus-visible {
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
        }

        .text-gray {
            color: #707070;
        }
        .btn{
            background: black;
        }
    </style>
@endsection

@section('content')
    <div class="page-content">

        <div style="max-width: 500px" >
            <div style="padding: 0 20px"  class="m-auto w-full flex flex-col gap-8 ">

                <div class="flex items-center gap-4 ">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M49 25C49 38.2548 38.2548 49 25 49C11.7452 49 1 38.2548 1 25C1 11.7452 11.7452 1 25 1C38.2548 1 49 11.7452 49 25Z"
                            stroke="#34C759" stroke-width="2"/>
                        <path d="M15 24.5113L22.3067 31.818L35.1247 19" stroke="#34C759" stroke-width="2"/>
                    </svg>
                    <div class="flex flex-col gap-2 items-start">
                        <p class="text-xs text-gray">
                            Confirmation #{{$delivery->UUID}}
                        </p>
                        <p class="text-2xl  font-semibold">
                            Thank you, {{$delivery->fname}}!
                        </p>
                    </div>
                </div>
                <div class="flex flex-col rounded-md border border-gray w-full">
                    <div class="p-4 flex flex-col">
                        <p class="">
                            Your payment for processing
                        </p>
                        <p class="text-gray">
                            You’ll get a confirmation notification with your order number soon.
                        </p>


                    </div>
                    <div style="background: #F5F5F5" class="p-4 items-center flex  gap-1">
                        <input type="checkbox">
                        Text me with news and offers
                    </div>
                </div>
                <div class="flex flex-col rounded-md border border-gray w-full">
                    <div class="p-4 flex  gap-5 flex-col">
                        <p class="">
                            Order details
                        </p>
                       <div class="flex items-center  gap-10">
                          <div  class="flex flex-col gap-1">
                              <p class="text-gray">
                                  Sender address
                              </p>
                              <p>
                                  {{$delivery->fname}} {{$delivery->lname}} <br>
                                    {{$delivery->address}} <br>
                                    {{$delivery->country}} <br>
                                    {{$delivery->phone}}
                              </p>
                          </div>
                           <div class="flex flex-col gap-1">
                               <p class="text-gray">
                                   Delivery address
                               </p>
                               <p>
                                   {{$delivery->fname_delivery}} {{$delivery->lname_delivery}} <br>
                                   {{$delivery->address_delivery}} <br>
                                   {{$delivery->country_delivery}} <br>
                                   {{$delivery->phone_delivery}}
                               </p>
                           </div>
                       </div>


                    </div>
                </div>
                <div class="flex items-center justify-between">
                   <div>
                       Need help?
                       <a href="#" class="border-b ">
                           Contact us
                       </a>
                   </div>

                    <a href="/" class="btn  rounded-md font-bold ">
                        Continue shopping
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
