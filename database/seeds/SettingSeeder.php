<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id' => 1,
                'email' => 'admin@alfasukomart.com',
                'currency_id' => 1,
                'client_id' => 1,
                'warehouse_id' => Null,
                'CompanyName' => 'Alfasukomart',
                'CompanyPhone' => '02123456789',
                'CompanyAdress' => 'Graha Komando',
                'footer' => 'Alfasukomart - POS Grocery',
                'developed_by' => 'Alfasukomart',
                'logo' => 'logo-default.png',
            )

        );
    }
}
