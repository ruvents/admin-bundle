<?php
declare(strict_types=1);

namespace Ruvents\AdminBundle\Menu;

final class ResolvedMenuItem
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var null|string
     */
    private $href;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var self[]
     */
    private $children;

    /**
     * @var string[]
     */
    private $requiresGranted;

    public function __construct(string $title, array $attributes, ?string $href, bool $active = false, array $children = [], array $requiresGranted = [])
    {
        $this->title = $title;
        $this->attributes = $attributes;
        $this->href = $href;
        $this->active = $active;
        $this->children = $children;
        $this->requiresGranted = $requiresGranted;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return null|string
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @return self[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @return string[]
     */
    public function getRequiresGranted(): array
    {
        return $this->requiresGranted;
    }
}
