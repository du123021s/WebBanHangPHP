<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catalogs = [
            [
                'catalogID' => 'CA01',
                'name' => 'Women',
            ],
            [
                'catalogID' => 'CA02',
                'name' => 'Man',
            ],
            [
                'catalogID' => 'CA03',
                'name' => 'Accessories',
            ],
        ];

        // Insert the products into the database
        foreach($catalogs as $catalog){
            Catalog::create($catalog);
        }
    }
}
