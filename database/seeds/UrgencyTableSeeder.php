<?php

use Illuminate\Database\Seeder;

class UrgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('urgency')->insert([
            [
                'importance' => '3',
                'description' => 'Baixa'
            ],
            [
                'importance' => '2',
                'description' => 'Média'
            ],
            [
                'importance' => '1',
                'description' => 'Alta'
            ]
        ]);
    }
}
