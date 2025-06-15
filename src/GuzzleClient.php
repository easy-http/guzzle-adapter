<?php

namespace EasyHttp\GuzzleAdapter;

use EasyHttp\GuzzleAdapter\Factories\ClientFactory;
use EasyHttp\Contracts\AbstractClient;
use EasyHttp\Contracts\Contracts\HttpClientAdapter;
use EasyHttp\Contracts\Contracts\HttpClientRequest;

class GuzzleClient extends AbstractClient
{
    protected function buildRequest(string $method, string $uri): HttpClientRequest
    {
        return new GuzzleRequest($method, $uri);
    }

    protected function buildAdapter(): HttpClientAdapter
    {
        return new GuzzleAdapter(ClientFactory::build($this->handler));
    }
}
