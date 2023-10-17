<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint\Repositories;

use GuzzleHttp\Utils;

/**
 * Repositories Forks Trait
 */
trait ForksTrait
{
    /**
     * @param string $owner
     * @param string $repositoryName
     * @return array
     */
    public function getForks(string $owner, string $repositoryName): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/forks');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string|null $organization
     * @return array
     */
    public function createFork(string $owner, string $repositoryName, string $organization = null): array
    {
        $options['json'] = [
            'organization' => $organization
        ];
        $options['json'] = $this->removeNullValues($options['json']);

        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/forks', 'POST', $options);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
