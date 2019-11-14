<?php

use Illuminate\Database\Seeder;

class MeasureUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measure_unit')->insert([
            [    'acronym' => 'UN',
                'description' => 'Unidade'
            ],
            [
                'acronym' => 'PT',
                'description' => 'Pacote'
            ],
            [
                'acronym' => 'RL',
                'description' => 'Rolo'
            ],
            [
                'acronym' => 'CX',
                'description' => 'Caixa'
            ],
            [
                'acronym' => 'DZ',
                'description' => 'Dúzia'
            ],
            [
                'acronym' => 'PA',
                'description' => 'Par'
            ],
            [
                'acronym' => 'PC',
                'description' => 'Peça'
            ],
            [
                'acronym' => 'kg',
                'description' => 'Kilograma'
            ],
            [
                'acronym' => 'g',
                'description' => 'Grama'
            ],
            [
                'acronym' => 'l',
                'description' => 'Litro'
            ],
            [
                'acronym' => 'ml',
                'description' => 'Mililitro'
            ],
            [
                'acronym' => 'm',
                'description' => 'Metro'
            ],
            [
                'acronym' => 'm2',
                'description' => 'Metro quadrado'
            ],
            [
                'acronym' => 'm3',
                'description' => 'Metro cúbico'
            ],
            [
                'acronym' => 'cm',
                'description' => 'Centímetro'
            ],
            [
                'acronym' => 'cm2',
                'description' => 'Centímetro quadrado'
            ]
        ]);
    }
}
