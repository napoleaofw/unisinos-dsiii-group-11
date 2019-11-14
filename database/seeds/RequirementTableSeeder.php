<?php

use Illuminate\Database\Seeder;

class RequirementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirement')->insert([
            [
                'item_id' => '1',
                'urgency_id' => '3',
                'quantity' => '20'
            ],
            [
                'item_id' => '2',
                'urgency_id' => '3',
                'quantity' => '30'
            ],
            [
                'item_id' => '3',
                'urgency_id' => '2',
                'quantity' => '10'
            ],
            [
                'item_id' => '4',
                'urgency_id' => '1',
                'quantity' => '12'
            ],
            [
                'item_id' => '5',
                'urgency_id' => '1',
                'quantity' => '5'
            ],
            [
                'item_id' => '6',
                'urgency_id' => '2',
                'quantity' => '8'
            ],
            [
                'item_id' => '7',
                'urgency_id' => '2',
                'quantity' => '10'
            ],
            [
                'item_id' => '8',
                'urgency_id' => '2',
                'quantity' => '9'
            ],
            [
                'item_id' => '9',
                'urgency_id' => '2',
                'quantity' => '4'
            ],
            [
                'item_id' => '10',
                'urgency_id' => '2',
                'quantity' => '4'
            ],
            [
                'item_id' => '11',
                'urgency_id' => '3',
                'quantity' => '22'
            ],
            [
                'item_id' => '12',
                'urgency_id' => '3',
                'quantity' => '15'
            ],
            [
                'item_id' => '13',
                'urgency_id' => '3',
                'quantity' => '12'
            ],
            [
                'item_id' => '14',
                'urgency_id' => '2',
                'quantity' => '4'
            ],
            [
                'item_id' => '15',
                'urgency_id' => '2',
                'quantity' => '8'
            ],
            [
                'item_id' => '16',
                'urgency_id' => '3',
                'quantity' => '7'
            ],
            [
                'item_id' => '17',
                'urgency_id' => '2',
                'quantity' => '3'
            ],
        ]);
    }
}
