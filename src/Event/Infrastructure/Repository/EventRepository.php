<?php

declare(strict_types=1);

namespace App\Event\Infrastructure\Repository;

use App\Event\Domain\Event;
use App\Event\Domain\EventRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;


class EventRepository implements EventRepositoryInterface
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}


    public function createEvent(Event $event): void
    {
        $this->entityManager->persist($event);
        $this->entityManager->flush();
    }
}