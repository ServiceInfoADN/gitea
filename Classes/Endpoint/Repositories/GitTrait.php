<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint\Repositories;

use GuzzleHttp\Utils;

/**
 * Repositories Git Trait
 */
trait GitTrait
{
    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string $sha
     * @return array
     */
    public function getBlob(string $owner, string $repositoryName, string $sha): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/git/blobs/' . $sha);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string $sha
     * @return array
     */
    public function getCommit(string $owner, string $repositoryName, string $sha): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/git/commits/' . $sha);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @return array
     */
    public function getRefs(string $owner, string $repositoryName): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/git/refs');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string $ref
     * @return array
     */
    public function getRef(string $owner, string $repositoryName, string $ref): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/git/refs/' . $ref);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string $sha
     * @return array
     */
    public function getTag(string $owner, string $repositoryName, string $sha): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/git/tags/' . $sha);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param string $sha
     * @param bool|null $recursive
     * @param int|null $page
     * @param int|null $perPage
     * @return array
     */
    public function getTree(
        string $owner,
        string $repositoryName,
        string $sha,
        bool $recursive = null,
        int $page = null,
        int $perPage = null
    ): array
    {
        $options['query'] = [
            'recursive' => $recursive,
            'page' => $page,
            'per_page' => $perPage,
        ];
        $options['query'] = $this->removeNullValues($options['query']);

        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/git/trees/' . $sha, 'GET', $options);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
