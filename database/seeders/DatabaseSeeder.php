<?php

namespace Database\Seeders;

use App\Models\PhoneNumber;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(52)->create()->each(function ($user){
            PhoneNumber::factory(1)->create(['user_id' => $user->id]);
        });

    }
}
