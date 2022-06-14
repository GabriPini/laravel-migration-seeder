<?php

use Illuminate\Database\Seeder;
use App\Models\Place;
class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $travels = [
            [
            'commercial_name' => 'Pini Viaggi',
            'country' => 'Italy',
            'region' => 'Sicily',
            'city' => 'Pozzallo',
            'period' => 'Spring',
            'description' => 'Studio Appartment ',
            'image'=>'http://cdn.home-designing.com/wp-content/uploads/2015/12/small-black-and-white-studio-apartment.jpg' ,
            'price' => 550,
            'all_inclusive' => false,
            'seats' => 4,
            ],

            [
            'commercial_name' => 'PG Viaggi',
            'country' => 'Italy',
            'region' => 'Sicily',
            'city' => 'Pozzallo',
            'period' => 'Spring',
            'description' => 'Villa',
            'image'=>'https://www.myistria.com/UserDocsImages/app/objekti/795/slika_hd/19082020034916_Villas-near-Rovinj-Villa-Prestige-2.jpg?preset=carousel-1-webp' ,
            'price' => 1550,
            'all_inclusive' => false,
            'seats' => 4,
            ],

            [
            'commercial_name' => 'Pini Travels',
            'country' => 'Mars',
            'region' => 'Sector 1',
            'city' => 'Mars Settlemets',
            'period' => 'All live',
            'description' => 'Come here to stay forever!',
            'image'=>'https://scitechdaily.com/images/Mars-Colony-Illustration.jpg' ,
            'price' => 1000,
            'all_inclusive' => true,
            'seats' => 1,
            ],



         ];

         foreach($travels as $travel) {
            $new_travel = new Place();
            $new_travel->commercial_name = $travel['commercial_name'];
            $new_travel->country = $travel['country'];
            $new_travel->region = $travel['region'];
            $new_travel->city = $travel['city'];
            $new_travel->period = $travel['period'];
            $new_travel->description = $travel['description'];
            $new_travel->image = $travel['image'];
            $new_travel->price = $travel['price'];
            $new_travel->all_inclusive = $travel['all_inclusive'];
            $new_travel->seats = $travel['seats'];

            $new_travel->save();

        }
    }
}
