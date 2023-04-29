<?php
/**
 * SteamWebApi
 * www.steamwebapi.com PHP Package
 */

namespace SteamWebApi;

use GuzzleHttp\Client;

/**
 * Something
 *
 */
class SteamWebApi
{
    // Your API Key from https://www.steamwebapi.com/dashboard -> Dashboard
    private string $apiKey = '2OEIYCPSNRMH6CFG';

    private Client $client;

    private string $baseUrl = 'https://www.steamwebapi.com/steam/api/';

    public function __construct(string $apiKey = null, bool $debug = false)
    {
        // Set Guzzle Client
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
            // You can set any number of default request options.
            'timeout' => 60,
            'debug' => $debug,
        ]);

        // Set API Key
        $this->apiKey = $apiKey ?? $this->apiKey;
    }

    public function getInventory(string $steamId, string $game = 'csgo', string $language = 'english', bool $parse = true)
    {
        $request = $this->client->request('GET', 'inventory', [
            'query' => [
                'steam_id' => $steamId,
                'game' => $game,
                'language' => $language,
                'parse' => $parse,
                'key' => $this->apiKey,
            ],
            'timeout' => 120,
        ]);

        return json_decode($request->getBody()->getContents(), true);
    }


    public function getSteamId(string $steamId)
    {
        $request = $this->client->request('GET', 'steamid', [
            'query' => [
                'steam_id' => $steamId,
                'key' => $this->apiKey,
            ],
            'timeout' => 120,
        ]);

        return json_decode($request->getBody()->getContents(), true);
    }


    public function getProfile(string $urlOrUsername = null, string $steamId = null)
    {
        $request = $this->client->request('GET', 'profile', [
            'query' => [
                'steam_id' => $steamId,
                'url' => $urlOrUsername,
                'key' => $this->apiKey,
            ],
            'timeout' => 120,
        ]);

        return json_decode($request->getBody()->getContents(), true);
    }


    public function getInventoryWorth(string $steamId, string $game = 'csgo', string $language = 'english', bool $parse = true): array
    {
        $request = $this->client->request('GET', 'inventory', [
            'query' => [
                'steam_id' => $steamId,
                'game' => $game,
                'language' => $language,
                'parse' => $parse,
                'key' => $this->apiKey,
            ],
            'timeout' => 120,
        ]);


        // Inventorylist
        //$request->getBody()->getContents();
        $toArray = json_decode($request->getBody()->getContents(), true);

        $worthInDollar = array_sum(array_column($toArray, 'priceAvg'));


        return ['worthInDollar' => number_format($worthInDollar, 2), 'inventory' => $toArray];
    }

}
