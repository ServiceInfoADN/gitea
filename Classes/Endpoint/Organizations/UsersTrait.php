<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint\Organizations;

use GuzzleHttp\Utils;

/**
 * Organizations Users Trait
 */
trait UsersTrait
{
    /**
     * @return array
     */
    public function getCurrentUserOrganizations(): array
    {
        $response = $this->client->request('/user/orgs');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $username
     * @return array
     */
    public function getUserOrganizations(string $username): array
    {
        $response = $this->client->request('/users/' . $username . '/orgs');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
