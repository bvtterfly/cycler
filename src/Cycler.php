<?php

namespace Bvtterfly\Cycler;

class Cycler
{
    private mixed $current;

    private array $items;

    private int $index;

    public function __construct(mixed $items)
    {
        $this->items = $items;
        $this->current = null;
        $this->index = -1;
    }

    public function reset(): void
    {
        $this->index = -1;
        $this->current = null;
    }

    public function current(): mixed
    {
        return $this->current;
    }

    public function next(): mixed
    {
        $this->index++;
        if ($this->index >= count($this->items)) {
            $this->index = 0;
        }
        $this->current = $this->items[$this->index];

        return $this->current;
    }
}
