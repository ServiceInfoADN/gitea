<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint;

use Adn\Gitea\Endpoint\User\RepositoriesTrait;
use Adn\Gitea\Endpoint\User\UserTrait;
use Adn\Gitea\Endpoint\User\FollowersTrait;
use Adn\Gitea\Endpoint\User\KeysTrait;

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
