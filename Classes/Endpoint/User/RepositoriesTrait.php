<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint\User;

use GuzzleHttp\Utils;

/**
 * Users Repositories Trait
 */
trait RepositoriesTrait
{
    /**
     * @return array
     */
    public function getRepositories(): array
    {
        $response = $this->client->request(self::BASE_URI . '/repos');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @return array
     */
    public function getStarredRepositories(): array
    {
        $response = $this->client->request(self::BASE_URI . '/starred');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @return bool
     */
    public function checkStarredRepository(string $owner, string $repositoryName): bool
    {
        $this->client->request(self::BASE_URI . '/starred/' . $owner . '/' . $repositoryName);

        return true;
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @return bool
     */
    public function addStarredRepository(string $owner, string $repositoryName): bool
    {
        $this->client->request(self::BASE_URI . '/starred/' . $owner . '/' . $repositoryName, 'PUT');

        return true;
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @return bool
     */
    public function deleteStarredRepository(string $owner, string $repositoryName): bool
    {
        $this->client->request(self::BASE_URI . '/starred/' . $owner . '/' . $repositoryName, 'DELETE');

        return true;
    }

    /**
     * @return array
     */
    public function getSubscriptions(): array
    {
        $response = $this->client->request(self::BASE_URI . '/subscriptions');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
