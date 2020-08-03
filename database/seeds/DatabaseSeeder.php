<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $states = [
            '1' => 'Ceará',
            '2' => 'Maranhão',
            '3' => 'Piauí'
        ];

        $cidadesCeara = [
            '1' => 'Abaiara',
            '2' => 'Acarape',
            '3' => 'Acarau',
        ];

        DB::table('users')->insert([
            'name' => 'Max',
            'email' => 'teste@teste.com.br',
            'password' => Hash::make('123456'),
        ]);
        // Estados
        foreach($states as $key => $s) {
            DB::table('state')->insert([
                'name' => $states[$key],
                'pais' => 'Brasil',
            ]);
        }

        $int = 1;
        // Cidades Ceará
        foreach($cidadesCeara as $key => $c) {
            DB::table('city')->insert([
                'name' => $cidadesCeara[$key],
                'state_id' => $int,
            ]);
            $int++;
        }

        $listStore = [
            [
                'name' => 'CACAU SHOW',
                'address' => 'RUA DR JOÃO PESSOA, 618 CENTRO',
                'information' => 'RUA DR JOÃO PESSOA, 618 CENTRO',
                'city_id' => '1',
                'lat' => -6.359873,
                'lng' => -39.299174,
            ],
            [
                'name' => 'CACAU SHOW',
                'address' => 'RUA DR JOÃO PESSOA, 618 CENTRO',
                'information' => 'RUA DR JOÃO PESSOA, 618 CENTRO',
                'city_id' => '1',
                'lat' => -4.967555,
                'lng' => -39.027435,
            ],
            [
                'name' => 'CACAU SHOW',
                'address' => 'RUA DR JOÃO PESSOA, 618 CENTRO',
                'information' => 'RUA DR JOÃO PESSOA, 618 CENTRO',
                'city_id' => '1',
                'lat' => -6.003239,
                'lng' => -40.294039,
            ],
        ];

        foreach($listStore as $store) {
            DB::table('store')->insert([
                'name' => $store['name'],
                'address' => $store['address'],
                'information' => $store['information'],
                'city_id' => $store['city_id'],
                'lat' => $store['lat'],
                'lng' => $store['lng'],
            ]);
        }

    }
}
