<?php

namespace App\CustomRules;

class RuleThree
{
    public function getRules(): array
    {
        return [
            'technology' => [
                'text' => 'Fiber',
                'value' => '= 1'
            ],
            'static_ip' => [
                'text' => 'Yes',
                'value' => '= 1'
            ],
        ];
    }
}