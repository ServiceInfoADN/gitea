<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint;

use Adn\Dwe64\Endpoint\User\RepositoriesTrait;
use Adn\Dwe64\Endpoint\User\UserTrait;
use Adn\Dwe64\Endpoint\User\FollowersTrait;
use Adn\Dwe64\Endpoint\User\KeysTrait;

/**
 * User endpoint
 */
class User extends AbstractEndpoint implements EndpointInterface
{
    use FollowersTrait;
    use KeysTrait;
    use RepositoriesTrait;
    use UserTrait;

    const BASE_URI = '/user';

}
