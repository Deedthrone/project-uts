<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker_id = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker_id->name(),
                'email' => $faker_id->freeEmail(),
                'password' => '1234'
            ]);
        }
    }
}
