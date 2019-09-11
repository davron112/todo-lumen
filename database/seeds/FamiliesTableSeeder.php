<?php

use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{

    public function run()
    {
        $families = [
            [
                'first_name' => 'Le Liang',
                'children' => [
                    [
                        'first_name' => 'Jahnen Rhesham',
                        'children' => [
                            ['first_name' => 'Ardum Cemme'],
                            ['first_name' => 'Charcin Zezundu'],
                            ['first_name' => 'Suntavas Modrisi'],
                        ],
                    ],
                    [
                        'first_name' => 'Kargousvac Durarini',
                        'children' => [
                            ['first_name' => 'Veldum Threekeep'],
                            ['first_name' => 'Ton Dirgehelm'],
                            ['first_name' => 'Fin Glirguz'],
                        ],
                    ],
                ],
            ],
            [
                'first_name' => 'Vurcor Sanuna',
                'children' => [
                    [
                        'first_name' => 'Sehmar Naleir',
                        'children' => [
                            ['first_name' => 'Jesvisk Grovrebe'],
                            ['first_name' => 'Egrork Lionwood'],
                        ],
                    ],
                    [
                        'first_name' => 'Nuhoth Zeldruld',
                        'children' => [
                            ['first_name' => 'Gockurth Noselash'],
                            ['first_name' => 'Mar Trueglade'],
                            ['first_name' => 'Horekeod Zandrelrehk'],
                        ],
                    ],
                ],
            ],
        ];
        foreach($families as $family)
        {
            \App\Models\Family::create($family);
        }
    }
}
