## Simple Steam Web API for Inventory, Profile and SteamIds

This Steamapi using www.steamwebapi.com and you need a Free API Key from there.

# Functions

### Inventory

Get a list of all inventory information from a SteamId without Steam Blocks.

### Profile

Get a list of all profile information without Steam Blocks.

### SteamId Converter

Get a list of all Steamids from a ID string.

## How to use?

```
composer require steamwebapi/php-steam-api
```

```php
$steamWebApi = new SteamWebApi('YOUR API KEY');

// Get Inventory
$steamWebApi->getInventory('STEAMID');

// Get Profile (Username or Url --- OR --- SteamId) -- choice one of them, only one is required, if you dont have username just send null
$steamWebApi->getProfile('Username or Url', 'SteamId');

// Convert SteamId
$steamWebApi->getSteamId('STEAMID');
```
