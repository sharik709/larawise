<?php
namespace Larawise;

use GuzzleHttp\Client;
use Larawise\Exceptions\MissingApiTokenException;

abstract class Api
{

    /** @var Client|\Illuminate\Contracts\Foundation\Application|mixed */
    protected Client $http;

    /**
     * @throws MissingApiTokenException
     */
    public function __construct($httpClient = null)
	{
        $this->setHttpClient($httpClient);
	}

    /**
     * @throws MissingApiTokenException
     * @return mixed
     */
    public function setHttpClient($httpClient)
    {
        if ($httpClient) {
            return $this->http = $httpClient;
        }

        $this->http = $this->getNewHttpClient();
    }

    /**
     * @throws MissingApiTokenException
     * @return Client
     */
    public function getNewHttpClient(): Client
    {
        return new Client([
            'base_uri' => $this->getBaseUri(),
            'headers'  => [
                'Authorization' => 'Bearer ' . $this->getWiseToken(),
                'Content-Type'  => 'application/json'
            ]
        ]);
    }

    /**
     * @throws MissingApiTokenException
     * @return string
     */
    public function getWiseToken(): string
    {
        if (config('larawise.api_token')) {
            return config('larawise.api_token');
        }

        throw new MissingApiTokenException("Wise API Token missing. Ensure to set 'WISE_API_KEY' in your .env");
    }


	public function post()
	{

	}

    public function makeRequest(string $method, string $uri, array $options = [])
    {
        $response = $this->http->request($method, $uri, $options);

        if ($response->getStatusCode() === 200) {
            return json_decode($response->getBody()->getContents(), true);
        }

        return $response;
    }

    /**
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
	public function getBaseUri()
	{
        if (app()->environment() != 'production') {
            return config('larawise.sandbox');
        }

        return config('larawise.live');
	}


}
