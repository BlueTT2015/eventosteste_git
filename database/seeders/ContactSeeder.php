<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelContact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'nome'=> Str::random(5),
            'numero'=> Str::random(5),
            'email'=>Str::random(5)
        ]);
    }
}
