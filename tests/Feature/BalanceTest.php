<?php
namespace Larawise\Tests\Feature;

use Larawise\Larawise;
use Tests\TestCase;

class BalanceTest extends TestCase
{
    public function test_if_all_balance_can_be_retrieved()
    {
        $profileId = '16539971';
        $balance = Larawise::balance($profileId)->all();

        $this->assertIsArray($balance);
    }

    public function test_if_a_particular_balance_can_be_retrieved()
    {
        $profileId = '16539971';
        $balance = Larawise::balance($profileId)->all();
        $particularBalance = Larawise::balance($profileId)->get($balance[0]['id']);
        $this->assertIsArray($balance);
        $this->assertIsArray($particularBalance);
    }
}
