<?php

namespace Database\Factories;

use App\Models\Envio;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnvioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Envio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estado' => $this->faker->state(),
            'ciudad' => $this->faker->city(),
            'direccion' => $this->faker->address(),
            'pedido_id' => $this->faker->numberBetween(3, 6),
        ];
    }
}
