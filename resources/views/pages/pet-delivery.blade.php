@extends('layouts.layout', ['title' => $settings->name.' | Delivery', 'description' => ''])
@section('head')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
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
        }
        .btn{
            background: black;
        }
    </style>
@endsection

@section('content')
<div  style="max-width: 600px; margin: auto" class=" page-content">

    <div style="padding: 0 30px; margin: auto" class="grid">
      <div class="m-auto w-full flex flex-col gap-14 ">

        <div class="section-header flex-col gap-3 flex justify-center items-center py-8 w-full border-2 rounded-md  border-solid border-black">
          <h1 class="text-5xl section-header__title">
              PET DELIVERY
          </h1>
            <div>
                <svg width="131" height="130" viewBox="0 0 131 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49.5279 61.292C48.536 63.3401 48.0224 65.5869 48.0261 67.8625C48.0136 69.752 48.3766 71.6251 49.0939 73.3731C49.8112 75.1211 50.8686 76.7093 52.2046 78.0453C53.5407 79.3814 55.1288 80.4388 56.8769 81.1561C58.6249 81.8734 60.498 82.2364 62.3874 82.2239C64.3043 82.2239 66.1427 82.9854 67.4981 84.3408C68.8536 85.6962 69.615 87.5346 69.615 89.4515V122.023" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.31488 85.8838H22.6799C24.6096 85.8336 26.5297 86.1705 28.327 86.8745C30.1244 87.5784 31.7626 88.6352 33.1449 89.9825C34.5272 91.3299 35.6256 92.9404 36.3755 94.7191C37.1253 96.4978 37.5112 98.4087 37.5106 100.339V123.336" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M98.5251 78.6589C98.5246 86.5314 96.5438 94.2773 92.765 101.184C88.9861 108.09 83.5307 113.935 76.901 118.18C70.2712 122.425 62.68 124.934 54.8262 125.477C46.9724 126.019 39.1084 124.577 31.9579 121.284C24.8075 117.99 18.6004 112.951 13.9081 106.63C9.21572 100.308 6.18886 92.9084 5.10611 85.1107C4.02337 77.313 4.91952 69.3683 7.71209 62.0077C10.5047 54.6472 15.1039 48.1074 21.0865 42.9902" stroke="black" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M124.429 17.3741L115.043 14.1827C114.383 13.9586 113.668 13.9565 113.007 14.1769C112.346 14.3972 111.775 14.8278 111.382 15.4029L104.53 26.0097L66.9837 7.23667C64.0163 5.48785 60.699 4.41652 57.2693 4.09932C53.8395 3.78212 50.382 4.22691 47.1442 5.40185C43.9064 6.57679 40.9683 8.45284 38.5401 10.8958C36.112 13.3387 34.2537 16.2881 33.0985 19.533C32.78 20.3748 32.6432 21.2744 32.6971 22.1728C32.7509 23.0712 32.9941 23.948 33.4107 24.7458C33.8273 25.5435 34.4079 26.2442 35.1144 26.8017C35.8209 27.3593 36.6373 27.7611 37.5101 27.9808L62.0089 35.8655L64.4493 36.7103L69.0487 52.4796C69.1965 53.0287 69.4804 53.5316 69.8742 53.9418C70.2679 54.352 70.7589 54.6562 71.3015 54.8262L82.3775 58.3931C82.943 58.5773 83.5463 58.6132 84.1296 58.4974C84.7129 58.3816 85.2568 58.1179 85.709 57.7316C86.1612 57.3454 86.5066 56.8495 86.7122 56.2914C86.9178 55.7334 86.9766 55.1319 86.8831 54.5446L84.4426 42.8115H86.0383L109.974 50.6023C111.542 51.143 113.261 51.0419 114.756 50.3211C116.25 49.6002 117.399 48.318 117.952 46.7538L126.4 20.7532C126.493 20.0511 126.35 19.338 125.993 18.7262C125.636 18.1144 125.086 17.6388 124.429 17.3741Z" stroke="black" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </div>
        </div>
        <a href="{{route('pet-delivery-form')}}" style="background-color: #079A4B; " class="text-center transition-all hover:opacity-55 hover:text-white rounded-md btn mt-5 text-white flex items-center justify-center py-3.5 font-bold ">
            REQUEST FOR PET DELIVERY
        </a>

          <div class="flex flex-col w-full gap-3 items-center">
              <div class="input-container w-full">
                  <input id="id_delivery" placeholder="YOUR CODE" class="text-lg" >
              </div>

              <button id="btn" class="btn mt-5 rounded-md font-bold w-full">
                  Continue
              </button>
          </div>
      </div>
    </div>
    <script>
        document.getElementById('btn').addEventListener('click', function(){
            let id = document.getElementById('id_delivery').value;
            window.location.href = '/delivery/'+id;
        })
    </script>
  </div>

@endsection
