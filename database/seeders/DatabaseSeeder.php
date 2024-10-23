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
                ['name' => 'Air conditioner', 'icon' => 'build/images/imgs/listaroomdetails/lista1.svg'], 
                ['name' => 'Breakfast', 'icon' => 'build/images/imgs/listaroomdetails/lista2.svg'], 
                ['name' => 'Cleaning', 'icon' => 'build/images/imgs/listaroomdetails/lista3.svg'], 
                ['name' => 'Grocery', 'icon' => 'build/images/imgs/listaroomdetails/lista4.svg'], 
                ['name' => 'Shop near', 'icon' => 'build/images/imgs/listaroomdetails/lista5.svg'], 
                ['name' => 'High speed WiFi', 'icon' => 'build/images/imgs/listaroomdetails/lista8.svg'], 
                ['name' => 'Kitchen', 'icon' => 'build/images/imgs/listaroomdetails/lista9.svg'],
                ['name' => 'Shower', 'icon' => 'build/images/imgs/listaroomdetails/lista10.svg'],
                ['name' => 'Single bed', 'icon' => 'build/images/imgs/listaroomdetails/lista11.svg'],
                ['name' => 'Towels', 'icon' => 'build/images/imgs/listaroomdetails/lista12.svg']
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
