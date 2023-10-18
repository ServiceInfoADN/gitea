<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint;


use Adn\Dwe64\Endpoint\Repositories\BranchesTrait;
use Adn\Dwe64\Endpoint\Repositories\CollaboratorsTrait;
use Adn\Dwe64\Endpoint\Repositories\CommitsTrait;
use Adn\Dwe64\Endpoint\Repositories\ContentsTrait;
use Adn\Dwe64\Endpoint\Repositories\ForksTrait;
use Adn\Dwe64\Endpoint\Repositories\GitTrait;
use Adn\Dwe64\Endpoint\Repositories\HooksTrait;
use Adn\Dwe64\Endpoint\Repositories\KeysTrait;
use Adn\Dwe64\Endpoint\Repositories\PullsTrait;
use Adn\Dwe64\Endpoint\Repositories\ReleasesTrait;
use Adn\Dwe64\Endpoint\Repositories\RepositoryTrait;
use Adn\Dwe64\Endpoint\Repositories\StatusesTrait;
use Adn\Dwe64\Endpoint\Repositories\SubscriptionTrait;
use Adn\Dwe64\Endpoint\Repositories\TopicsTrait;

/**
 * Repositories endpoint
 */
class Repositories extends AbstractEndpoint implements EndpointInterface
{
    use BranchesTrait;
    use CollaboratorsTrait;
    use CommitsTrait;
    use ContentsTrait;
    use ForksTrait;
    use GitTrait;
    use HooksTrait;
    use KeysTrait;
    use PullsTrait;
    use ReleasesTrait;
    use RepositoryTrait;
    use StatusesTrait;
    use SubscriptionTrait;
    use TopicsTrait;

    const BASE_URI = '/repos';

}
