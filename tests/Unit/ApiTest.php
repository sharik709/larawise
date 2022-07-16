<?php
namespace Larawise\Tests\Unit;

use Larawise\Api;
use Tests\TestCase;
use Larawise\Larawise;

class ApiTest extends TestCase
{
	public function test_if_base_uri_is_returned()
	{
		$api = $this->getMockForAbstractClass(Api::class);

        $this->assertEquals(config('larawise.sandbox'), $api->getBaseUri());
	}

}
