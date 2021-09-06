<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	// Insert some stuff
        DB::table('categories')->insert(
            array([
                'id'    => 1,
                'code'  => 'sayuran',
                'name'  => 'Sayuran',
            ],
            [
                'id'    => 2,
                'code'  => 'buah',
                'name'  => 'Buah',
            ],
            [
                'id'    => 3,
                'code'  => 'karbo',
                'name'  => 'Karbohidrat',
            ],
            [
                'id'    => 4,
                'code'  => 'protein',
                'name'  => 'Protein',
            ],
            [
                'id'    => 5,
                'code'  => 'bumbu1',
                'name'  => 'Bumbu Dapur',
            ],
            [
                'id'    => 6,
                'code'  => 'bumbu2',
                'name'  => 'Bumbu Pelengkap',
            ],
            [
                'id'    => 7,
                'code'  => 'sayur-lengkap',
                'name'  => 'Paket Sayur Lengkap',
            ],
            )
        );
    }
}
