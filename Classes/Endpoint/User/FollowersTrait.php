<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint\User;

use GuzzleHttp\Utils;

/**
 * Users Followers Trait
 */
trait FollowersTrait
{
    /**
     * @return array
     */
    public function getFollowers(): array
    {
        $response = $this->client->request(self::BASE_URI . '/followers');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @return array
     */
    public function getFollowing(): array
    {
        $response = $this->client->request(self::BASE_URI . '/following');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $username
     * @return bool
     */
    public function checkFollowing(string $username): bool
    {
        $this->client->request(self::BASE_URI . '/following/' . $username);

        return true;
    }

    /**
     * @param string $username
     * @return bool
     */
    public function addFollowing(string $username): bool
    {
        $this->client->request(self::BASE_URI . '/following/' . $username, 'PUT');

        return true;
    }

    /**
     * @param string $username
     * @return bool
     */
    public function deleteFollowing(string $username): bool
    {
        $this->client->request(self::BASE_URI . '/following/' . $username, 'DELETE');

        return true;
    }
}
