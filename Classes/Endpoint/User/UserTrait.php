<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint\User;

use GuzzleHttp\Utils;

/**
 * Users User Trait
 */
trait UserTrait
{
    /**
     * @return array
     */
    public function get(): array
    {
        $response = $this->client->request(self::BASE_URI);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @return array
     */
    public function getEmails(): array
    {
        $response = $this->client->request(self::BASE_URI . '/emails');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param array $emails
     * @return array
     */
    public function addEmails(array $emails): array
    {
        $options['json'] = [
            'emails' => $emails
        ];

        $response = $this->client->request(self::BASE_URI . '/emails', 'POST', $options);

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @param array $emails
     * @return bool
     */
    public function deleteEmails(array $emails): bool
    {
        $options['json'] = [
            'emails' => $emails
        ];

        $this->client->request(self::BASE_URI . '/emails', 'DELETE', $options);

        return true;
    }

    /**
     * @return array
     */
    public function getStopwatches(): array
    {
        $response = $this->client->request(self::BASE_URI . '/stopwatches');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @return array
     */
    public function getTeams(): array
    {
        $response = $this->client->request(self::BASE_URI . '/teams');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }

    /**
     * @return array
     */
    public function getTimes(): array
    {
        $response = $this->client->request(self::BASE_URI . '/times');

        return Utils::jsonDecode($response->getBody()->getContents(), true);
    }
}
