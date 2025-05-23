<?php

declare(strict_types=1);

namespace App\Event\Infrastructure\Controller;

use App\Event\Application\CreateEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CreateEventController extends AbstractController
{
    public function __construct(
        private readonly CreateEvent $createEvent,
    ) {}

    public function __invoke(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // $organizerId = $data['organizerId']; from userId
        return ($this->createEvent)($data);
    }
}
