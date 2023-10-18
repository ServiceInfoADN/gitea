<?php

declare(strict_types=1);

namespace Adn\Gitea\Endpoint;


use Adn\Gitea\Endpoint\Issues\CommentsTrait;
use Adn\Gitea\Endpoint\Issues\IssuesTrait;
use Adn\Gitea\Endpoint\Issues\IssueTrait;
use Adn\Gitea\Endpoint\Issues\LabelsTrait;
use Adn\Gitea\Endpoint\Issues\MilestonesTrait;
use Adn\Gitea\Endpoint\Issues\ReactionsTrait;
use Adn\Gitea\Endpoint\Issues\StopwatchTrait;
use Adn\Gitea\Endpoint\Issues\SubscriptionsTrait;
use Adn\Gitea\Endpoint\Issues\TimesTrait;

/**
 * Issues endpoint
 */
class Issues extends AbstractEndpoint implements EndpointInterface
{
    use CommentsTrait;
    use IssueTrait;
    use IssuesTrait;
    use LabelsTrait;
    use MilestonesTrait;
    use ReactionsTrait;
    use StopwatchTrait;
    use SubscriptionsTrait;
    use TimesTrait;

    const BASE_URI = '/repos';

}
