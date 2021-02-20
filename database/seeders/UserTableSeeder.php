<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        $user_admin = User::create([
            'fullname' => 'Çağla Öztürk',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'activation_key' => Str::random(60),
            'is_active' => 1,
            'is_admin' => 1
        ]);

        for($i=0; $i<30; $i++){
            $user_customer = User::create([
                'fullname' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('123456'),
                'is_active' => 1,
                'is_admin' => 0
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
