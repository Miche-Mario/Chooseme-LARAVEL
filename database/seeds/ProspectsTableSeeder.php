<?php

use Illuminate\Database\Seeder;
use App\Models\Prospect;

class ProspectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prospect::create(['nom'=>'BABONI Nahim',  'email'=>'baboninahim@gmail.com']);
        Prospect::create(['nom'=>'BAKOBI Djalil',  'email'=>'ibrahimdjalil@gmail.com']);
    }
}
