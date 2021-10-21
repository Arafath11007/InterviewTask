<?php

namespace App;

class Rules
{
    private array $rules = [];

    public function create(array $rules): void
    {
        foreach ($rules as $key => $value) {
            if (array_key_exists($key, $this->rules)) {
                $this->rules[$key][array_key_first($value)] = array_values($value)[0];
                continue;
            }
            $this->rules[$key] = $value;
        }
    }

    public function all(): array
    {
        return $this->rules;
    }
}
