<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tamu = [
            [
                'id' => '0101',
                'nama' => 'Rizaldi',
                'tlp' => '08123456789',
                'email' => 'rizaldi@gmail.com',
                'alamat' => 'Rancamaya'
            ],
            [
                'id' => '0102',
                'nama' => 'Mantan Relawan',
                'tlp' => '08123456789',
                'email' => 'relawan@gmail.com',
                'alamat' => 'KRR'
            ]
        ];
        Tamu::insert($tamu);
    }
}
