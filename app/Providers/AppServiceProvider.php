<?php

namespace App\Providers;

use App\CustomRules\RuleOne;
use App\CustomRules\RuleThree;
use App\CustomRules\RuleTwo;
use App\Rules;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        Rules::class => Rules::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $rules = $this->app->make(Rules::class);

        $ruleOne = new RuleOne();
        $ruleTwo = new RuleTwo();
        $ruleThree = new RuleThree();

        $rules->create([
            'rule1' => $ruleOne->getRules(),
            'rule2' => $ruleTwo->getRules(),
            'rule3' => $ruleThree->getRules(),
        ]);
    }
}
