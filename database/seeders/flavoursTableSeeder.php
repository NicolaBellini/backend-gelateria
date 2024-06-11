<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flavour;
use App\functions\Helper;

class flavoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flavours = [
            'Vanilla',
            'Chocolate',
            'Strawberry',
            'Mint Chocolate Chip',
            'Cookie Dough',
            'Pistachio',
            'Salted Caramel',
            'Mango',
            'Lemon Sorbet',
            'Cookies and Cream'
        ];

        foreach ($flavours as $flavour) {
            $newFlavour = new Flavour();
            $newFlavour->name = $flavour;
            $newFlavour->slug = Helper::generateSlug($newFlavour->name, Flavour::class);
            $newFlavour->save();
        }
    }
}
