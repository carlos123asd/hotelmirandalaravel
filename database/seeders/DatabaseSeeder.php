<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Activity;
use App\Models\Amenity;
use App\Models\AmenityRoom;
use App\Models\Booking;
use App\Models\Message;
use App\Models\Photo;
use App\Models\Room;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function generateAmenitiesRoom(){
        
    }
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //php artisan migrate:refresh --seed | #restaurar los seeder nuevamente
        User::factory(10)->create();
        Activity::factory(10)->create();
        Room::factory(10)->create();
        Booking::factory(10)->create();
        Photo::factory(10)->create();
        Message::factory(10)->create();
    
        DB::table('amenities')->insert([
            ['name' => 'AC'],
            ['name' => 'Shower'],
            ['name' => 'Towel'],
            ['name' => 'Bathup'],
            ['name' => 'Coffee Set'],
            ['name' => 'LED TV'],
            ['name' => 'WI-FI'],
        ]);

        $rooms = Room::all();
        $amenities = Amenity::all();

        if ($rooms->isEmpty() || $amenities->isEmpty()) {
            $this->command->error("No hay suficientes habitaciones o amenities para generar amenity_room.");
            return;
        }

        for ($i = 0; $i < 30; $i++) {
            $roomId = $rooms->random()->id;
            $amenityId = $amenities->random()->id;

            AmenityRoom::firstOrCreate([
                'room_id' => $roomId,
                'amenity_id' => $amenityId
            ]);
        }
    }
}
