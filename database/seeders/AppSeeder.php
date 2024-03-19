<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Writing;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(6)->create();

        foreach ($users as $author) {
            $number = rand(1, 5);
            $author->writings()->createMany(
                Writing::factory($number)->make()->toArray()
            );
        }
    }
}