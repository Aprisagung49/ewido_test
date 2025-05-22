<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $productGroup = [
            'Cables' => [
                'Automotive Cable',
                'Electronic Cable'
            ],
            'Enamelled Wire' => [
                'EW',
                'PVF',
                'HEIW',
                'AIW',
                'UEW',
                'PEW',
                'EIW'
            ],
            'Power Supply Cord and Cord Set' => [
                'Plug',
                'Connector'
            ]
        ];

        foreach ($productGroup as $rootGroup => $childGroup) {
            $parent = ProductGroup::create(['name' => $rootGroup]);

            foreach ($childGroup as $child) {
                ProductGroup::create([
                    'name' => $child,
                    'parent_id' => $parent->id
                ]);
            }
        }
    }
}
