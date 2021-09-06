<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('warehouses')->insert(
            array(
                [
                    'id'        => 1,
                    'name'      => 'Gudang Jakarta 1',
                    'city'      => 'Cakung',
                    'country'   => 'Jakarta Timur',
                ],
                [
                    'id'        => 2,
                    'name'      => 'Gudang Wonosobo 1',
                    'city'      => 'Wonosobo',
                    'country'   => 'Jawa Tengah',
                ],
                [
                    'id'        => 3,
                    'name'      => 'Toko 1',
                    'city'      => 'Jakarta',
                    'country'   => 'Jakarta Timur',
                ],
                [
                    'id'        => 4,
                    'name'      => 'Toko 2',
                    'city'      => 'Jakarta',
                    'country'   => 'Jakarta Utara',
                ],
                [
                    'id'        => 5,
                    'name'      => 'Toko 3',
                    'city'      => 'Wonosobo',
                    'country'   => 'Jawa Tengah',
                ],
            )
        );
    }
}
