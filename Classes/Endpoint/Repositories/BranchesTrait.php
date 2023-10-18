<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint\Repositories;

use GuzzleHttp\Utils;

/**
 * Repositories Branches Trait
 */
trait BranchesTrait
{
    /**
     * @param string $owner
     * @param string $repositoryName
     * @return array
     */
    public function getBranches(string $owner, string $repositoryName): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/branches');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string $branch
     * @return array
     */
    public function getBranche(string $owner, string $repositoryName, string $branch): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/branches/' . $branch);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
