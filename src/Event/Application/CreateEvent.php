<?php

declare(strict_types=1);

namespace App\Event\Application;

use App\Event\Domain\Event;
use App\Event\Domain\EventRepositoryInterface;
use DomainException;
use Exception;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Notifier\Chatter;

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
                $data['dateTime'],
                $data['maxAttendees'],
                $data['categoryId'],
                $data['organizerId']
            );
        } catch (Exception $e) {
            throw new DomainException("Request body missing parameters.");
        }

        return new JsonResponse("ok");
        // return $this->eventRepository->createEvent($event);
    }
}
