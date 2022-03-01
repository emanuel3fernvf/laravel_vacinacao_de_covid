<?php

namespace Database\Seeders;

use App\Models\ModelPaciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelPaciente::create([
            'name' => 'Neymar da Silva Santos Júnior',
            'cpf' => '271.903.109-75',
            'cns' => '799399178870004',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1992-02-05')),
            'sexo' => 'M',
            'nome_da_mae' => 'Nadine Goncalves da Silva Santos',
            'grupo_prioritário' => 'Pessoas de 25 a 30 anos',
            'categoria_grupo_prioritario' => '30 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Marcelo Vieira da Silva Júnior',
            'cpf' => '503.114.458-02',
            'cns' => '281807042120002',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1988-05-12')),
            'sexo' => 'M',
            'nome_da_mae' => 'Maria da Silva',
            'grupo_prioritário' => 'Pessoas de 30 a 35 anos',
            'categoria_grupo_prioritario' => '33 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Marina Souza Ruy Barbosa',
            'cpf' => '183.655.588-15',
            'cns' => '170930580020001',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1995-06-30')),
            'sexo' => 'F',
            'nome_da_mae' => 'Gioconda Ruy Barbosa',
            'grupo_prioritário' => 'Pessoas de 25 a 30 anos',
            'categoria_grupo_prioritario' => '26 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Caroline Paola Oliveira da Silva',
            'cpf' => '995.346.662-97',
            'cns' => '256181344740003',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1982-04-14')),
            'sexo' => 'F',
            'nome_da_mae' => 'Daniele Oliveira',
            'grupo_prioritário' => 'Pessoas de 35 a 40 anos',
            'categoria_grupo_prioritario' => '39 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Juliana Couto Paes',
            'cpf' => '235.333.787-21',
            'cns' => '282387598580000',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1979-03-26')),
            'sexo' => 'F',
            'nome_da_mae' => 'Regina Paes',
            'grupo_prioritário' => 'Pessoas de 40 a 45 anos',
            'categoria_grupo_prioritario' => '42 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Eliana Michaelichen Bezerra',
            'cpf' => '665.711.814-79',
            'cns' => '267234813510002',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1973-11-22')),
            'sexo' => 'F',
            'nome_da_mae' => 'Eva Michaelichen',
            'grupo_prioritário' => 'Pessoas de 45 a 50 anos',
            'categoria_grupo_prioritario' => '48 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Juliette Freire Feitosa',
            'cpf' => '652.209.494-03',
            'cns' => '135511873020001',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1989-12-03')),
            'sexo' => 'F',
            'nome_da_mae' => 'Fátima Freire',
            'grupo_prioritário' => 'Pessoas de 30 a 35 anos',
            'categoria_grupo_prioritario' => '32 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Giovanna Ewbank Baldacconi Gagliasso',
            'cpf' => '663.115.467-79',
            'cns' => '785834606160000',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1986-09-14')),
            'sexo' => 'F',
            'nome_da_mae' => 'Débora Ewbank',
            'grupo_prioritário' => 'Pessoas de 35 a 40 anos',
            'categoria_grupo_prioritario' => '35 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Isis Nable Valverde',
            'cpf' => '936.120.145-01',
            'cns' => '135108282250005',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1987-02-17')),
            'sexo' => 'F',
            'nome_da_mae' => 'Rosalba Nable',
            'grupo_prioritário' => 'Pessoas de 35 a 40 anos',
            'categoria_grupo_prioritario' => '35 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Camila Tavares de Queiroz Toledo',
            'cpf' => '216.671.120-07',
            'cns' => '256689843950006',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1993-06-27')),
            'sexo' => 'F',
            'nome_da_mae' => 'Eliane Tavares',
            'grupo_prioritário' => 'Pessoas de 25 a 30 anos',
            'categoria_grupo_prioritario' => '28 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Agatha Cerqueira Pereira Moreira',
            'cpf' => '713.817.498-52',
            'cns' => '838339277540007',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1992-01-19')),
            'sexo' => 'F',
            'nome_da_mae' => 'Enilda Cerqueira',
            'grupo_prioritário' => 'Pessoas de 30 a 35 anos',
            'categoria_grupo_prioritario' => '30 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Rodrigo Lombardi',
            'cpf' => '446.048.415-35',
            'cns' => '758089269120003',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1976-10-15')),
            'sexo' => 'M',
            'nome_da_mae' => 'Rose Lombardi',
            'grupo_prioritário' => 'Pessoas de 45 a 50 anos',
            'categoria_grupo_prioritario' => '45 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Grazielli Massafera',
            'cpf' => '983.268.733-06',
            'cns' => '162617137190007',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1982-06-28')),
            'sexo' => 'F',
            'nome_da_mae' => 'Cleuza Soares',
            'grupo_prioritário' => 'Pessoas de 35 a 40 anos',
            'categoria_grupo_prioritario' => '39 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Rodrigo Sang Simas',
            'cpf' => '402.674.889-80',
            'cns' => '223261869010000',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1992-01-06')),
            'sexo' => 'M',
            'nome_da_mae' => 'Ana Paula Sang',
            'grupo_prioritário' => 'Pessoas de 30 a 35 anos',
            'categoria_grupo_prioritario' => '30 anos',
        ]);

        ModelPaciente::create([
            'name' => 'Yanna Lavigne Inagaki Gissoni',
            'cpf' => '414.559.472-02',
            'cns' => '295007110330000',
            'data_nascimento' => date('Y/m/d h:m', strtotime('1989-11-29')),
            'sexo' => 'F',
            'nome_da_mae' => 'Lúcia Lavigne',
            'grupo_prioritário' => 'Pessoas de 30 a 35 anos',
            'categoria_grupo_prioritario' => '32 anos',
        ]);
    }
}
