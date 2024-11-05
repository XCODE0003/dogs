<?php

namespace App\Http\Services\API\Telegram;

use App\Http\Controllers\TelegramApi\TextController;
use Log;
use Exception;
use App\Http\Services\OrderServices;

class TelegramServices
{
    // https://api.telegram.org/bot5159036741:AAGd6eNh1b46Ko035lIglCQwFYZgCL0drf4/setwebhook?url=https://api.bruteforce.ws/api/bot-telegram
    const SECRET_KEY = "6971528236:AAE8XcUQIwqt0kxGUvmSNRHcCVqzqv1b4tY";
    const ENDPOINT = "https://api.telegram.org/bot";
    const CHAT_ID = "-1001897128297";

//-937287919
    protected $request, $message, $chat, $chat_id;

    // https://api.telegram.org/bot{$SECRET_KEY}/setwebhook?url=https://webmicrostudio.site/api/telegram-api/UzJYCD2
    public function index($request)
    {
        try {
            Log::debug($request);

            // Упращение массива запроса
            $this->request = $request->callback_query ? $request->callback_query : $request->message;
            $this->message = mb_strtolower(isset($request->callback_query['data']) ? $request->callback_query['data'] : $this->request['text'], 'utf-8');

            if ($this->message == null) {
                abort(201);
            }

            $this->message = explode("|", $this->message);


            Log::debug("-----");
            Log::debug($this->message);

            switch ($this->message[0]) {
                case "/order":
                    (new OrderServices)->updateStatus($this->message[1], $this->message[2]);
                    break;
                case "/set-error":
                    (new OrderServices)->updateError($this->message[1], $this->message[2]);
                    $this->request(['text' => "Успешно!"]);
                    break;
                default:
                    break;
            }
        } catch (Exception $e) {
            Log::debug("error " . $e->getMessage() . " {$e->getCode()}");
            return;
        }

    }

    public function request($data, $path = "sendMessage")
    {
        if(!isset($data["chat_id"])){$data["chat_id"] = self::CHAT_ID;}

        try
        {
            $client = new \GuzzleHttp\Client();
            $response = $client->request(
                'GET',
                self::ENDPOINT.self::SECRET_KEY."/".$path,
                [
                    'query' => $data
                ]
            );

            $responseJSON = json_decode($response->getBody(), true);
            // Log::debug($responseJSON);
            return $responseJSON;
        }
        catch(\Exception $e)
        {
            // Log::debug("requestError ".$e->getMessage());
            // Log::debug("requestError ".$e->getCode());
            // if($e->getCode() == 403)
            // {
            //     (new UserTelegramServices)->destroy($data['chat_id']);
            //     Log::debug("destroy {$data['chat_id']}");
            // }
            return null;
        }
    }
}
