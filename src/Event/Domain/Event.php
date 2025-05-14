<?php

declare(strict_types=1);

namespace App\Event\Domain;

use App\Event\Infrastructure\Repository\DoctrineEventRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DoctrineEventRepository::class)]

class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    public function __construct(
        #[ORM\Column(type: 'string', length: 255)]
        private string $title,

        #[ORM\Column(type: 'string', length: 1000)]
        private string $description,

        #[ORM\Column(type: 'string', length: 255)]
        private string $location,

        #[ORM\Column(type: 'datetime')]
        private DateTime $dateTime,

        #[ORM\Column(type: 'integer')]
        private int $maxAttendees,

        #[ORM\Column(type: 'string', length: 255)]
        private string $categoryId,

        #[ORM\Column(type: 'string', length: 255)]
        private string $organizerId,

        #[ORM\Column(type: 'datetime')]
        private DateTime $createdAt = new DateTime()
    ) {
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

    public function getDateTime(): DateTime
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

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getId(): int
    {
        return $this->id;
    }
}

