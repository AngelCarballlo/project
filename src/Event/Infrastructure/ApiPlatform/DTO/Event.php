<?php

declare(strict_types=1);

namespace App\Event\Infrastructure\ApiPlatform\DTO;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Event\Infrastructure\Controller\CreateEventController;

#[ApiResource(
    collectionOperations: [
        'create_event' => [
            "pagination_enabled" => false,
            'method' => 'POST',
            'deserialize' => false,
            'controller' => CreateEventController::class,
            'path' => '/event/create_event',
            'openapi_context' => [
                'tags' => ['Event'],
                'summary' => 'Creates an event resource',
                'requestBody' => [
                    'content' => [
                        'application/json' => [
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'title' => [
                                        'type' => 'string',
                                        'example' => 'Rolling Loud'
                                    ],
                                    'description' => [
                                        'type' => 'string',
                                        'example' => 'Rolling Loud is a well-known music festival'
                                    ],
                                    'location' => [
                                        'type' => 'string',
                                        'example' => 'Galicia, Spain'
                                    ],
                                    'date' => [
                                        'type' => 'date-time',
                                        'example' => '28-05-2025 10:00:00'
                                    ],
                                    'maxAttendees' => [
                                        'type' => 'integer',
                                        'example' => 250000
                                    ],
                                    'categoryId' => [
                                        'type' => 'string',
                                        'example' => '2AB34RTS'
                                    ],
                                    'organizerId' => [
                                        'type' => 'string',
                                        'example' => '3RT4YH5B'
                                    ],
                                    'createdAt' => [
                                        'type' => 'date-time',
                                        'example' => '28-05-2025 10:00:00'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    itemOperations: []
)]
class Event {}
