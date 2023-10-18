<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint\Organizations;

use GuzzleHttp\Utils;

/**
 * Organizations Members Trait
 */
trait MembersTrait
{
    /**
     * @param string $organization
     * @return array
     */
    public function getMembers(string $organization): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $organization . '/members');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $organization
     * @param string $username
     * @return bool
     */
    public function checkMember(string $organization, string $username): bool
    {
        $this->client->request(self::BASE_URI . '/' . $organization . '/members/' . $username);

        return true;
    }

    /**
     * @param string $organization
     * @param string $username
     * @return bool
     */
    public function deleteMember(string $organization, string $username): bool
    {
        $this->client->request(self::BASE_URI . '/' . $organization . '/members/' . $username, 'DELETE');

        return true;
    }

    /**
     * @param string $organization
     * @return array
     */
    public function getPublicMembers(string $organization): array
    {
        $response = $this->client->request(self::BASE_URI . '/' . $organization . '/public_members');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $organization
     * @param string $username
     * @return bool
     */
    public function checkPublicMember(string $organization, string $username): bool
    {
        $this->client->request(self::BASE_URI . '/' . $organization . '/public_members/' . $username);

        return true;
    }

    /**
     * @param string $organization
     * @param string $username
     * @return bool
     */
    public function addPublicMember(string $organization, string $username): bool
    {
        $this->client->request(self::BASE_URI . '/' . $organization . '/public_members/' . $username, 'PUT');

        return true;
    }

    /**
     * @param string $organization
     * @param string $username
     * @return bool
     */
    public function deletePublicMember(string $organization, string $username): bool
    {
        $this->client->request(self::BASE_URI . '/' . $organization . '/public_members/' . $username, 'DELETE');

        return true;
    }
}
