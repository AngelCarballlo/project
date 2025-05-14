<?php

declare(strict_types=1);

namespace App\Event\Domain;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

interface EventRepositoryInterface extends ServiceEntityRepositoryInterface
{
    public function createEvent(Event $event): void;
}
