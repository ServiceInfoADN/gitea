<?php

declare(strict_types=1);

namespace Adn\Dwe64\Endpoint;


use Adn\Dwe64\Endpoint\Issues\CommentsTrait;
use Adn\Dwe64\Endpoint\Issues\IssuesTrait;
use Adn\Dwe64\Endpoint\Issues\IssueTrait;
use Adn\Dwe64\Endpoint\Issues\LabelsTrait;
use Adn\Dwe64\Endpoint\Issues\MilestonesTrait;
use Adn\Dwe64\Endpoint\Issues\ReactionsTrait;
use Adn\Dwe64\Endpoint\Issues\StopwatchTrait;
use Adn\Dwe64\Endpoint\Issues\SubscriptionsTrait;
use Adn\Dwe64\Endpoint\Issues\TimesTrait;

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
