<?php
namespace Larawise;

use Larawise\Balance\Balance;

class Larawise
{

	public static function balance(string $profileId)
	{
		$balance = new Balance();
        $balance->setProfileId($profileId);
        return $balance;
	}

    public function profile()
    {
        return new Profile();
    }
}
