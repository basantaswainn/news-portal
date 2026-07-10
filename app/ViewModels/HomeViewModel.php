<?php

namespace App\ViewModels;

class HomeViewModel
{
    public function __construct(protected array $data = [])
    {
    }

    public function __get(string $name): mixed
    {
        return $this->data[$name] ?? null;
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
