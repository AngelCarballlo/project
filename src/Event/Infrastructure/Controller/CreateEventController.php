<?php

declare(strict_types=1);

namespace App\Event\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CreateEventController extends AbstractController
{
    public function __construct() {}

    public function __invoke(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        return new JsonResponse($data, JsonResponse::HTTP_CREATED);
    }
}
