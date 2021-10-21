<?php

namespace App\CustomRules;

class RuleOne
{

    public function getRules(): array
    {
        return [
            'upload_speed' => [
                'text' => 'Upload speed less than 100',
                'value' => '<100'
            ],
            'technology' => [
                'text' => 'Fiber',
                'value' => '= 1'
            ],
        ];
    }
}
