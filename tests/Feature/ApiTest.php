<?php
namespace Larawise\Tests\Feature;

use GuzzleHttp\Client;
use Larawise\Api;
use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_if_http_request_is_made_upon_calling()
    {
        $api = $this->getMockForAbstractClass(Api::class);

        $response = $api->makeRequest('GET', 'https://google.com');

        $this->assertEquals(200, $response->getStatusCode());
    }
}
