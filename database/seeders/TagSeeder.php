<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            [
                'tag' => 'romance',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'tag' => 'love',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'tag' => 'fiction',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'tag' => 'non-fiction',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'tag' => 'fantasy',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'tag' => 'random',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);
    }
}