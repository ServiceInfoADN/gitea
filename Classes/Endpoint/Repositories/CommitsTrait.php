<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint\Repositories;

use GuzzleHttp\Utils;

/**
 * Repositories Commits Trait
 */
trait CommitsTrait
{
    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string|null $sha
     * @param int|null $page
     * @return array
     */
    public function getCommits(string $owner, string $repositoryName, string $sha = null, int $page = null): array
    {
        $options['query'] = [
            'sha' => $sha,
            'page' => $page
        ];
        $options['query'] = $this->removeNullValues($options['query']);

        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/commits', 'GET', $options);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string $ref
     * @param int|null $page
     * @return array
     */
    public function getCommitStatuses(string $owner, string $repositoryName, string $ref, int $page = null): array
    {
        $options['query'] = [
            'page' => $page
        ];
        $options['query'] = $this->removeNullValues($options['query']);

        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/commits/' . $ref . '/statuses', 'GET', $options);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
