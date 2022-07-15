<?php

use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ads = config('db.ads');

        foreach ($ads as $ad) {
            $new_ad = new Ad();
            $new_ad->type = $ad['type'];
            $new_ad->duration = $ad['duration'];
            $new_ad->price = $ad['price'];
            $new_ad->save();
        }
    }
}
