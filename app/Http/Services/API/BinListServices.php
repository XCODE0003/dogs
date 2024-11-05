<?php

namespace App\Http\Services\API;

use Log;

class BinListServices
{

    // https://binlist.net/
    const ENDPOINT_PUBLIC = "https://lookup.binlist.net/",
    SECRET_KEY = "";

    public function getBin($card)
    {
        $card = preg_replace('/[^0-9]/', '', $card);
        $card = substr($card, 0, 8);
        return $this->request("get", $card);
    }

    private function request($method, $url, $parameters = null)
    {
        try
        {
            $client = new \GuzzleHttp\Client();
            $response = $client->request($method, self::ENDPOINT_PUBLIC.$url,
                ($method == "get" ?
                    [
                        'query' => $parameters
                    ] :
                    [
                        'headers' => [
                            'Content-Type' => 'application/json',
                        ],
                        'body' => json_encode($parameters)
                    ]
                )
            );

            $responseJSON = json_decode($response->getBody(), true);
            // Log::debug($responseJSON);
            return $responseJSON;
        }
        catch(\Exception $e){
            Log::debug($e->getMessage());
            return null;
        }
    }
}
