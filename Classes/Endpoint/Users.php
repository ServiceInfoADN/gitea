<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint;


use Adn\Gitea\Endpoint\Users\TokensTrait;
use Adn\Gitea\Endpoint\Users\UsersTrait;

/**
 * Users endpoint
 */
class Users extends AbstractEndpoint implements EndpointInterface
{
    use TokensTrait;
    use UsersTrait;

    const BASE_URI = '/users';

}
