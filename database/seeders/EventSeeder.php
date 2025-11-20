<?php


namespace Database\Seeders;

use http\Env\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'title'=> Str::random(10),
            'description'=>Str::random(50),
            'date'=> '2026-05-16',
            'city'=> Str::random(10),
            'private'=> true,
            'updated_at'=> now(),
            'created_at'=> now(),
        ]);
    }
}
