## Simple Steam Web API for Inventory, Profile and SteamIds

This Steamapi using www.steamwebapi.com and you need a Free API Key from there.

# Functions

### Inventory

Get a list of all inventory information from a SteamId without Steam Blocks.

### Inventory and total price of the inventory

Get a list of all inventory information from a SteamId blocking and calculate the total price of the inventory.

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

// Get Inventory And Worth
$steamWebApi->getInventoryWorth('STEAMID');

// Get Profile (Username or Url --- OR --- SteamId) -- choice one of them, only one is required, if you dont have username just send null
$steamWebApi->getProfile('Username or Url', 'SteamId');

// Convert SteamId
$steamWebApi->getSteamId('STEAMID');
```

# You can help me to improve this package

If you want to add new functions, just create a pull request. 
