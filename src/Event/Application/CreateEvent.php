<?php

declare(strict_types=1);

namespace App\Event\Application;

use App\Event\Domain\Event;
use App\Event\Domain\EventRepositoryInterface;
use DateTime;
use DomainException;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;

class CreateEvent
{
    public function __construct(
        private readonly EventRepositoryInterface $eventRepository
    ) {}

    public function __invoke(array $data)
    {
        try {
            $event = new Event(
                $data['title'],
                $data['description'],
                $data['location'],
                new DateTime($data['dateTime']),
                $data['maxAttendees'],
                $data['categoryId'],
                $data['organizerId']
            );
            $this->eventRepository->createEvent($event);
        } catch (Exception $e) {
            throw new DomainException("Request body missing parameters. Message:" . $e);
        }

        return new JsonResponse("ok");
    }
}
