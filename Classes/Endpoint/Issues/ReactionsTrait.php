<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint\Issues;

use GuzzleHttp\Utils;

/**
 * Issues Reactions Trait
 */
trait ReactionsTrait
{
    /**
     * @param string $owner
     * @param string $repositoryName
     * @param int $index
     * @return array|null
     */
    public function getReactions(string $owner, string $repositoryName, int $index): ?array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/issues/' . $index . '/reactions');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param int $index
     * @param string $reaction
     * @return bool
     */
    public function deleteReaction(string $owner, string $repositoryName, int $index, string $reaction): bool
    {
        $options['json'] = [
            'content' => $reaction
        ];

        $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/issues/' . $index . '/reactions', 'DELETE', $options);

        return true;
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param int $index
     * @param string $reaction
     * @return array
     */
    public function addReaction(string $owner, string $repositoryName, int $index, string $reaction): array
    {
        $options['json'] = [
            'content' => $reaction
        ];

        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/issues/' . $index . '/reactions', 'POST', $options);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
