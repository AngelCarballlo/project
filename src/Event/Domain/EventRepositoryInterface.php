<?php

declare(strict_types=1);

namespace App\Event\Domain;

use Symfony\Component\HttpFoundation\JsonResponse;

interface EventRepositoryInterface {
    public function createEvent(Event $event): JsonResponse;
}
