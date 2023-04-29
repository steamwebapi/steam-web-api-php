<?php
/** BE CAREFUL
 * This is a demo file
 * It is not part of the package
 * It is only used for fast development and testing the package
 * You dont need to include this file in your project, because you will include the package with composer
 *
 *
 */
declare(strict_types=1);
require '../vendor/autoload.php';

function dd()
{
    echo '<pre>';
    array_map(function ($x) {
        print_R($x);
    }, func_get_args());
    echo '</pre>';
    die;
}

use SteamWebApi\SteamWebApi;

$steamWebApi = new SteamWebApi(null);

// Converts SteamId to Steam64Id, SteamId and SteamId3
$steamId = $steamWebApi->getSteamId('76561199146708568');

// Get Inventory with SteamId
//$inventory = $steamWebApi->getInventory('76561199146708568');

// Get Profile with SteamId
//$profile = $steamWebApi->getProfile('HoshinoYuki');

dd($steamId);
