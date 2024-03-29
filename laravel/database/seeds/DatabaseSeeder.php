<?php

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
        for($i=0;$i<9;$i++) {
            $this->call(NewsSeeder::class);
        }

        for ($i=0; $i <9; $i++) {
            $this->call(DonationSeeder::class);
        }
    }
}
