<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint;

use Adn\Dwe64\Client;

/**
 * Abstract endpoint
 */
abstract class AbstractEndpoint implements EndpointInterface
{
    /**
     * @var Client
     */
    protected Client $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $array
     * @return array
     */
    protected function removeNullValues(array $array): array
    {
        $array = array_map(function($value) {
            return is_array($value) ? $this->removeNullValues($value) : $value;
        }, $array);

        return array_filter($array, function($value) {
            return !is_null($value) && !(is_array($value) && empty($value));
        });
    }
}
