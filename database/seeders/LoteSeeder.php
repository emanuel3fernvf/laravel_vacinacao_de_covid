<?php

namespace Database\Seeders;

use App\Models\ModelLote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelLote::create([
            'lote' => 'FF7835',
            'fabricante' => 'PFIZER',
            'validade' => date('Y/m/d h:m', strtotime('2021-05-21')),
            'nfe' => '48752617',
            'data_recebimento' => date('Y/m/d h:m', strtotime('2021-01-30')),
        ]);

        ModelLote::create([
            'lote' => 'FP7419',
            'fabricante' => 'PFIZER',
            'validade' => date('Y/m/d h:m', strtotime('2021-06-12')),
            'nfe' => '75389546',
            'data_recebimento' => date('Y/m/d h:m', strtotime('2021-02-05')),
        ]);

        ModelLote::create([
            'lote' => '345GIEHR4W',
            'fabricante' => 'FIOCRUZ',
            'validade' => date('Y/m/d h:m', strtotime('2021-10-15')),
            'nfe' => '49854817',
            'data_recebimento' => date('Y/m/d h:m', strtotime('2021-03-11')),
        ]);

        ModelLote::create([
            'lote' => '123FJE5TR3E',
            'fabricante' => 'FIOCRUZ',
            'validade' => date('Y/m/d h:m', strtotime('2021-09-12')),
            'nfe' => '75389546',
            'data_recebimento' => date('Y/m/d h:m', strtotime('2021-04-05')),
        ]);

        ModelLote::create([
            'lote' => '245896',
            'fabricante' => 'BUTANTAN',
            'validade' => date('Y/m/d h:m', strtotime('2021-06-12')),
            'nfe' => '75389546',
            'data_recebimento' => date('Y/m/d h:m', strtotime('2021-02-05')),
        ]);

        ModelLote::create([
            'lote' => '541763',
            'fabricante' => 'BUTANTAN',
            'validade' => date('Y/m/d h:m', strtotime('2021-11-12')),
            'nfe' => '75389546',
            'data_recebimento' => date('Y/m/d h:m', strtotime('2021-05-10')),
        ]);
    }
}
