<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert(
            array([
                'id'                => 1,
                'name'              => 'Bungkus',
                'ShortName'         => 'Bks',
                'operator'          => '*',
                'operator_value'    => '1',
            ],
            [
                'id'                => 2,
                'name'              => 'Gram',
                'ShortName'         => 'Gr',
                'operator'          => '*',
                'operator_value'    => '1',
            ],
            [
                'id'                => 3,
                'name'              => 'Kilogram',
                'ShortName'         => 'Kg',
                'operator'          => '*',
                'operator_value'    => '1',
            ],
            [
                'id'                => 4,
                'name'              => 'Pack',
                'ShortName'         => 'Pack',
                'operator'          => '*',
                'operator_value'    => '1',
            ],
            [
                'id'                => 5,
                'name'              => 'Kardus',
                'ShortName'         => 'Dus',
                'operator'          => '*',
                'operator_value'    => '1',
            ],
            [
                'id'                => 6,
                'name'              => 'Ikat',
                'ShortName'         => 'Ikat',
                'operator'          => '*',
                'operator_value'    => '1',
            ],
            )
        );
    }
}
