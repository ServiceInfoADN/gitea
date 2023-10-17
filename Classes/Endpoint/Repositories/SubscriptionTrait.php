<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint\Repositories;

use GuzzleHttp\Utils;

/**
 * Repositories Subscription Trait
 */
trait SubscriptionTrait
{
    /**
     * @param string $owner
     * @param string $repositoryName
     * @return array
     */
    public function getSubscribers(string $owner, string $repositoryName): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/subscribers');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @return array
     */
    public function checkSubscription(string $owner, string $repositoryName): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/subscription');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @return array
     */
    public function addSubscription(string $owner, string $repositoryName): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/subscription', 'PUT');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $owner
     * @param string $repositoryName
     * @return bool
     */
    public function deleteSubscription(string $owner, string $repositoryName): bool
    {
        $this->client->request(self::BASE_URI . '/' . $owner . '/' . $repositoryName . '/subscription', 'DELETE');

        return true;
    }
}
