<?php

namespace App\CustomRules;

class RuleTwo
{
    public function getRules(): array
    {
        return [
            'download_speed' => [
                'text' => 'Download speed greater than 100',
                'value' => '>100'
            ],
            'technology' => [
                'text' => 'Fiber',
                'value' => '= 1'
            ],
        ];
    }
}