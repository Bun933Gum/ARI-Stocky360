<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert(
            array([
                'id'            => 1,
                'name'          => 'PT. Alfasuko Rekayasa Industri',
                'email'         => 'sales@alfasuko.com',
                'phone'         => '08123456789',
                'country'       => 'Cipinang',
                'city'          => 'DKI Jakarta',
                'adresse'       => 'Graha Komando',
            ],
            [
                'id'            => 2,
                'name'          => 'Tetep Trisno',
                'email'         => 'tetep@alfasukomart.com',
                'phone'         => '08134567842',
                'country'       => 'Kalierang',
                'city'          => 'Wonosobo',
                'adresse'       => 'Kalierang no. 125',
            ],
            )
        );
    }
}
