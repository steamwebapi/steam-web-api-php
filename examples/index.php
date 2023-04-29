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

// SteamID is not correct, please change it!

// Converts SteamId to Steam64Id, SteamId and SteamId3
$steamId = $steamWebApi->getSteamId('7656119914XXXX');

// Get Inventory with SteamId
//$inventory = $steamWebApi->getInventory('76561199XXX');

// Get Profile with SteamId
//$profile = $steamWebApi->getProfile('HoshinoXXXXX');

$inventoryWorth = $steamWebApi->getInventoryWorth('76561199146XXXX');
dd($steamId);
