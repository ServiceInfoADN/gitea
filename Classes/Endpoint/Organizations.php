<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint;

use Adn\Dwe64\Endpoint\Organizations\HooksTrait;
use Adn\Dwe64\Endpoint\Organizations\MembersTrait;
use Adn\Dwe64\Endpoint\Organizations\OrganizationTrait;
use Adn\Dwe64\Endpoint\Organizations\RepositoriesTrait;
use Adn\Dwe64\Endpoint\Organizations\TeamsTrait;
use Adn\Dwe64\Endpoint\Organizations\UsersTrait;

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
