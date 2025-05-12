<?php

declare(strict_types=1);

namespace App\Event\Domain;
class Event
{
    private ?int $id = null;
    private string $title;
    private string $description;
    private string $location;
    private \DateTimeImmutable $dateTime;
    private ?int $maxAttendees;
    private string $categoryId;
    private string $organizerId;
    private \DateTimeImmutable $createdAt;

    public function __construct(
        string $title,
        string $description,
        string $location,
        \DateTimeImmutable $dateTime,
        ?int $maxAttendees,
        string $categoryId,
        string $organizerId
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->location = $location;
        $this->dateTime = $dateTime;
        $this->maxAttendees = $maxAttendees;
        $this->categoryId = $categoryId;
        $this->organizerId = $organizerId;
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getDateTime(): \DateTimeImmutable
    {
        return $this->dateTime;
    }

    public function getMaxAttendees(): ?int
    {
        return $this->maxAttendees;
    }

    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    public function getOrganizerId(): string
    {
        return $this->organizerId;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }
}

