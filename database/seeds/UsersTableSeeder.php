<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=>'SEIDOU Fadel',
            'email'=>'fadelsylla5@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'password'=>bcrypt('fadel123')
            ]);

        User::create([
            'nom'=>'MENOU Gael',
            'email'=>'adebo@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'password'=>bcrypt('gael123')
            ]);
    }
}
