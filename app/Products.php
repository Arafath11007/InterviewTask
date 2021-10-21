<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;

class Products
{
    public function getProductsWithFilters(array $request): Builder
    {

        $rules = App::make(Rules::class);

        $filter = $rules->all();

        $parameters = []; //$filter[$r[0]];
        $query = Product::query();
        foreach ($request as $r) {
            foreach ($r as $j) {
                $parameters = $filter[$j];

                if (!empty($parameters['upload_speed'])) {
                    $query->whereRaw('upload_speed ' . $parameters['upload_speed']['value']);
                }

                if (!empty($parameters['download_speed'])) {
                    $query->whereRaw('download_speed ' . $parameters['download_speed']['value']);
                }

                if (!empty($parameters['static_ip'])) {
                    $query->whereRaw('static_ip ' . $parameters['static_ip']['value']);
                }

                if (!empty($parameters['technology'])) {
                    $query->whereRaw('technology ' . $parameters['technology']['value']);
                }
            }
        }

        return $query;
    }
}
