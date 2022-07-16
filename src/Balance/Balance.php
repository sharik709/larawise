<?php
namespace Larawise\Balance;

use Larawise\Api;

class Balance extends Api
{
    protected string $profileId;

    public function setProfileId(string $profileId)
    {
        $this->profileId = $profileId;
    }

    public function all(string $type = 'STANDARD')
	{
        return $this->makeRequest('GET', '/v4/profiles/' . $this->profileId . '/balances?types=' . $type);
	}

    public function get(string $balanceId)
    {
        return $this->makeRequest('GET', '/v4/profiles/' . $this->profileId . '/balances/' . $balanceId);
    }
}
