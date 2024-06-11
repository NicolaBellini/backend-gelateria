<?php

namespace Database\Seeders;

use App\functions\Helper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IceCream;

class iceCreamsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $iceCreamNames = [
            'Classic Vanilla',
            'Dark Chocolate',
            'Fresh Strawberry',
            'Mint Choco Bliss',
            'Dough Delight',
            'Nutty Pistachio',
            'Caramel Swirl',
            'Tropical Mango',
            'Citrus Sorbet',
            'Oreo Crush'
        ];
        foreach ($iceCreamNames as $name) {
            $newIceCream = new IceCream();
            $newIceCream->name = $name;
            $newIceCream->slug = Helper::generateSlug($newIceCream->name, IceCream::class);
            $newIceCream->save();
        }
    }
}
