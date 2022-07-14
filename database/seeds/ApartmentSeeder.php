<?php

use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = config('db.apartments');

        foreach($apartments as $apartment){
            $new_apartment = new Apartment();
            $new_apartment->title = $apartment['title'];
            $new_apartment->description = $apartment['description'];
            $new_apartment->daily_price = $apartment['daily_price'];
            $new_apartment->square_meters = $apartment['square_meters'];
            $new_apartment->rooms_number = $apartment['rooms_number'];
            $new_apartment->beds_number = $apartment['beds_number'];
            $new_apartment->bathrooms_number = $apartment['bathrooms_number'];
            $new_apartment->image = $apartment['image'];
            $new_apartment->visibility = $apartment['visibility'];
            $new_apartment->address = $apartment['address'];
            $new_apartment->longitude = $apartment['longitude'];
            $new_apartment->latitude = $apartment['latitude'];
            $new_apartment->save();
        }


    }
}
