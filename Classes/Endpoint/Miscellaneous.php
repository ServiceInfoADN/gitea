<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint;

use GuzzleHttp\Utils;

/**
 * Miscellaneous endpoint
 */
class Miscellaneous extends AbstractEndpoint implements EndpointInterface
{
    const BASE_URI = '';


    /**
     * @param string|null $text
     * @param string|null $context
     * @param string|null $mode
     * @param bool $wiki
     * @return string
     */
    public function markdown(string $text = null, string $context = null, string $mode = null, bool $wiki = true): string
    {
        $options['json'] = [
            'context' => $context,
            'mode' => $mode,
            'text' => $text,
            'wiki' => $wiki
        ];
        $options['json'] = $this->removeNullValues($options['json']);

        $response = $this->client->request(self::BASE_URI . '/markdown', 'POST', $options);
        return $response->getBody()->getContents();
    }

    /**
     * @param string$text
     * @return string
     */
    public function markdownRaw(string $text): string
    {
        $options['body'] = $text;
        $response = $this->client->request(self::BASE_URI . '/markdown/raw', 'POST', $options);
        return $response->getBody()->getContents();
    }

    /**
     * @return string
     */
    public function signingKeyGPG(): string
    {
        $response = $this->client->request(self::BASE_URI . '/signing-key.gpg');
        return $response->getBody()->getContents();
    }

    /**
     * @return string
     */
    public function version(): string
    {
        $response = $this->client->request(self::BASE_URI . '/version');
        return Utils::jsonDecode($response->getBody()->getContents(), true)['version'];
    }
}
