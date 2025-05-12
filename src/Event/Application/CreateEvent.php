<?php

declare(strict_types=1);

namespace App\Event\Application;

use App\Event\Domain\Event;
use App\Event\Domain\EventRepositoryInterface;

class CreateEvent {
    public function __construct(
        private readonly EventRepositoryInterface $eventRepository
    ){
    }

    public function __invoke(array $data){
        $event = new Event (
            $data['title'],
            $data['description'],
            $data['location'],
            $data['dateTime'],
            $data['maxAttendees'],
            $data['categoryId'],
            $data['organizerId']
        );

        return $this->eventRepository->createEvent($event);
    }
}