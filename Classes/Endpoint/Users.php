<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint;


use Adn\Dwe64\Endpoint\Users\TokensTrait;
use Adn\Dwe64\Endpoint\Users\UsersTrait;

/**
 * Users endpoint
 */
class Users extends AbstractEndpoint implements EndpointInterface
{
    use TokensTrait;
    use UsersTrait;

    const BASE_URI = '/users';

}
