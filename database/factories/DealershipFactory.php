<?php

namespace Database\Factories;

use App\Models\Dealership;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealershipFactory extends Factory
{
    protected $model = Dealership::class;

    public function definition(): array
    {
        return [
            'created_at' => CarbonImmutable::now(),
            'updated_at' => CarbonImmutable::now(),
        ];
    }
}
