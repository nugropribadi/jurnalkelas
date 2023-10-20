<?php

namespace Database\Seeders;

use App\Models\Rombel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Rombel::create([
            'name' => 'X Rekayasa Perangkat Lunak',
            'jurusan_id' => 1
        ]);
        Rombel::create([
            'name' => 'XI Rekayasa Perangkat Lunak',
            'jurusan_id' => 1
        ]);
        Rombel::create([
            'name' => 'XII Rekayasa Perangkat Lunak',
            'jurusan_id' => 1
        ]);
    }
}