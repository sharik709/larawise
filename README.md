# Larawise
Larawise is a Laravel package to make it easier for laaravel developers to communicate with [Wise Platform API](https://api-docs.wise.com/) 

> I'm working on adding more methods to fully use the platform API services. Donate for supporting my work. Thanks!

[![Watch on GitHub](https://img.shields.io/github/watchers/sharik709/larawise.svg?style=social)](https://github.com/sharik709/larawise)
[![Star on GitHub](https://img.shields.io/github/stars/sharik709/larawise.svg?style=social)](https://github.com/sharik709/larawise)
[![Tweet](https://img.shields.io/twitter/url/https/github.com/sharik709/larawise.svg?style=social)](http://www.twitter.com/share?url=https://github.com/sharik709/larawise&text=Hey%20Guys,%20Check%20out%20this%20awesome%20Laravel%20Wise%20Package.)

## Installation
You can install it by using composer with following command `composer require sharik709/larawise`



## Usage
Ensure to use `Larawise` use statement to following namespace
`use Larawise\Larawise;`

`Larawise` would allow you access to all the functionality you need.

### Obtaining Api license for Sandbox and Production
You can visit [wise business api](https://wise.com/gb/business/api) page to get details on how to get Sandbox api token and Production api token.

## 1. User Profile
> Wise platform API needs to receive User Profile ID in order to get balance. as all balance are linked to user's profile.
### 1.1 Get All User Profiles
Following method would allow you to receive an array of all profiles under your api token.
```php
use Larawise\Larawise;

/** @var array */
$profiles = Larawise::profiles()->all();
```

### 1.2 Get A particular User Profile
```php
use Larawise\Larawise;

$profileId = 12345; // Wise's profile id. Which you can get by calling `all` method above.

/** @var array */
$profile = Larawise::profiles()->get($profileId);
```

## 2. Balance
> Balance needs profile ID of the user which you can get from 1.1
### 2.1 Get all Balance
```php
use Larawise\Larawise;

$profileId = 12345; // Wise's profile id. Which you can get by calling `all` method above.

/** @var array */
$profiles = Larawise::balance($profileId)->all();
```

### 2.2 Get A particular Balance
```php
use Larawise\Larawise;

$profileId = 12345; // Wise's profile id. Which you can get by calling `all` method above.
$balanceId = 54321;

/** @var array */
$profile = Larawise::balance($profileId)->get($balanceId);
```

## License
MIT
