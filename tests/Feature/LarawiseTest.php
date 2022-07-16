<?php
namespace Larawise\Tests\Feature;

use Tests\TestCase;
use Larawise\Balance\Balance;
use Larawise\Larawise;

class LarawiseTest extends TestCase
{
	public function test_if_balance_returns_balance_class_instance()
	{
		$this->assertInstanceOf(Balance::class, Larawise::balance());
	}
}