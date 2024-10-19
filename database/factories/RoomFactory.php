<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $offer = $this->faker->boolean();
        return [
            'room_number' => $this->faker->unique()->numberBetween(1000,9999),
            'type_room' => $this->faker->randomElement(['Double Superior', 'Suite', 'Single Bed', 'Double Bed']),
            'description' => $this->faker->paragraph(),
            'offer' => $offer,
            'price' => $this->faker->randomFloat(2,100,600),
            'discount' => $offer ? $this->faker->numberBetween(10,60) : 0,
            'cancellation' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['Available', 'Booked'])
            /*
            $table->integer('room_number')->unique();
            $table->enum('type_room',['Double Superior', 'Suite', 'Single Bed', 'Double Bed']);
            $table->text('description')->nullable();
            $table->boolean('offer')->default(false);
            $table->decimal('price',8,2);
            $table->unsignedTinyInteger('discount')->default(0);
            $table->text('cancellation')->nullable();
            $table->enum('status',['Available', 'Booked'])->default('Available');
            */
        ];
    }
}
