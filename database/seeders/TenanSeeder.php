<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tenan;

class TenanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tenans')->truncate();
        DB::table('tenans')->insert([
            [
                'kode_tenan' => 001,
                'nama_tenan' => 'bu oneng',
                'no_hp' => '08123456789',
            ],
            [
                'kode_tenan' => 002,
                'nama_tenan' => 'warung katsu',
                'no_hp' => '0812364235869'
            ],
        ]);
    }
}
