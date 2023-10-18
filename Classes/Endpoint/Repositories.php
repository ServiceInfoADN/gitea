<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint;


use Adn\Gitea\Endpoint\Repositories\BranchesTrait;
use Adn\Gitea\Endpoint\Repositories\CollaboratorsTrait;
use Adn\Gitea\Endpoint\Repositories\CommitsTrait;
use Adn\Gitea\Endpoint\Repositories\ContentsTrait;
use Adn\Gitea\Endpoint\Repositories\ForksTrait;
use Adn\Gitea\Endpoint\Repositories\GitTrait;
use Adn\Gitea\Endpoint\Repositories\HooksTrait;
use Adn\Gitea\Endpoint\Repositories\KeysTrait;
use Adn\Gitea\Endpoint\Repositories\PullsTrait;
use Adn\Gitea\Endpoint\Repositories\ReleasesTrait;
use Adn\Gitea\Endpoint\Repositories\RepositoryTrait;
use Adn\Gitea\Endpoint\Repositories\StatusesTrait;
use Adn\Gitea\Endpoint\Repositories\SubscriptionTrait;
use Adn\Gitea\Endpoint\Repositories\TopicsTrait;

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
