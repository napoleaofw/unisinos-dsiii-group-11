<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            [
                'category_id' => '1',
                'measure_unit_id' => '2',
                'description' => 'Fralda'
            ],
            [
                'category_id' => '1',
                'measure_unit_id' => '2',
                'description' => 'Papel higiênico'
            ],
            [
                'category_id' => '1',
                'measure_unit_id' => '1',
                'description' => 'Creme dental'
            ],
            [
                'category_id' => '1',
                'measure_unit_id' => '1',
                'description' => 'Escova de dentes'
            ],
            [
                'category_id' => '1',
                'measure_unit_id' => '1',
                'description' => 'Pente'
            ],
            [
                'category_id' => '2',
                'measure_unit_id' => '1',
                'description' => 'Camiseta manga longa'
            ],
            [
                'category_id' => '2',
                'measure_unit_id' => '1',
                'description' => 'Casaco'
            ],
            [
                'category_id' => '2',
                'measure_unit_id' => '1',
                'description' => 'Calça de moletom'
            ],
            [
                'category_id' => '2',
                'measure_unit_id' => '1',
                'description' => 'Calça jeans'
            ],
            [
                'category_id' => '2',
                'measure_unit_id' => '1',
                'description' => 'Tênis'
            ],
            [
                'category_id' => '3',
                'measure_unit_id' => '8',
                'description' => 'Arroz'
            ],
            [
                'category_id' => '3',
                'measure_unit_id' => '8',
                'description' => 'Feijão'
            ],
            [
                'category_id' => '3',
                'measure_unit_id' => '8',
                'description' => 'Frango'
            ],
            [
                'category_id' => '3',
                'measure_unit_id' => '8',
                'description' => 'Alface'
            ],
            [
                'category_id' => '3',
                'measure_unit_id' => '8',
                'description' => 'Tomate'
            ],
            [
                'category_id' => '4',
                'measure_unit_id' => '1',
                'description' => 'Bengala'
            ],
            [
                'category_id' => '4',
                'measure_unit_id' => '1',
                'description' => 'Cadeira de rodas'
            ]
        ]);
    }
}
