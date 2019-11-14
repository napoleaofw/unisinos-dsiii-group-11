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
        // $this->call(UsersTableSeeder::class);
        $this->call(UrgencyTableSeeder::class);
        $this->call(MeasureUnitTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(RequirementTableSeeder::class);
    }
}
