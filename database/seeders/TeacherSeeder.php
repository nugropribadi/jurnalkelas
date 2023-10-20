<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Teacher::create([
            'teacher_name' => 'Nugro N Agung Pribadi',
            'nip' => '199211012020121014',
            'jurusan_id' => 1
        ]);
        Teacher::create([
            'teacher_name' => 'Nafik Maula',
            'nip' => '199306152020121014',
            'jurusan_id' => 1
        ]);
    }
}