<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint\Issues;

use GuzzleHttp\Utils;

/**
 * Issues Subscriptions Trait
 */
trait SubscriptionsTrait
{
    /**
     * @param string $owner
     * @param string $repositoryName
     * @param int $index
     * @return array|null
     */
    public function getSubscriptions(string $owner, string $repositoryName, int $index): ?array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/issues/' . $index . '/subscriptions');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param int $index
     * @param string $username
     * @return bool
     */
    public function deleteSubscription(string $owner, string $repositoryName, int $index, string $username): bool
    {
        $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/issues/' . $index . '/subscriptions/' . $username, 'DELETE');

        return true;
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @param int $index
     * @param string $username
     * @return bool
     */
    public function addSubscription(string $owner, string $repositoryName, int $index, string $username): bool
    {
        $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/issues/' . $index . '/subscriptions/' . $username, 'PUT');

        return true;
    }
}
