<?php
namespace Larawise;

class Profile extends Api
{
    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function all()
    {
        return $this->makeRequest('GET', '/v2/profiles');
    }

    /**
     * @param string $profileId
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function get(string $profileId)
    {
        return $this->makeRequest('GET', '/v1/profiles/' . $profileId);
    }
}
