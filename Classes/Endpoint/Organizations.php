<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint;

use Adn\Gitea\Endpoint\Organizations\HooksTrait;
use Adn\Gitea\Endpoint\Organizations\MembersTrait;
use Adn\Gitea\Endpoint\Organizations\OrganizationTrait;
use Adn\Gitea\Endpoint\Organizations\RepositoriesTrait;
use Adn\Gitea\Endpoint\Organizations\TeamsTrait;
use Adn\Gitea\Endpoint\Organizations\UsersTrait;

/**
 * Organizations endpoint
 */
class Organizations extends AbstractEndpoint implements EndpointInterface
{
    use HooksTrait;
    use MembersTrait;
    use OrganizationTrait;
    use RepositoriesTrait;
    use TeamsTrait;
    use UsersTrait;

    const BASE_URI = '/orgs';

}
