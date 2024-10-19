<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guest' => $this->faker->name(),
            'orderdate' => $this->faker->dateTimeBetween('-1 years','now'),
            'checkin' => $this->faker->dateTimeBetween('-1 years','now'),
            'checkout' => $this->faker->dateTimeBetween('-1 years','now'),
            'specialrequest' => $this->faker->paragraph(),
            'room_id' => Room::factory(),
            'status' => $this->faker->randomElement(['In Progress','Check Out', 'Check In'])
            /*
            $table->string('guest');
            $table->dateTime('orderdate');
            $table->dateTime('checkin');
            $table->dateTime('checkout');
            $table->dateTime('ordertime')->useCurrent();
            $table->text('specialrequest')->nullable();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->enum('status',['In Progress','Check Out', 'Check In']);
            */
        ];
    }
}
