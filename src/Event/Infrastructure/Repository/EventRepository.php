<?php

declare(strict_types=1);

namespace App\Event\Infrastructure\Repository;

use App\Event\Domain\Event;
use App\Event\Domain\EventRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class EventRepository implements EventRepositoryInterface
{
    public function createEvent(Event $event): JsonResponse
    {
        return new JsonResponse('ok');
    }
}