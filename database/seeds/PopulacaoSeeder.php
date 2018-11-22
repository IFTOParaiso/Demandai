<?php

use Illuminate\Database\Seeder;

class PopulacaoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // INSTITUIÇÃO
        \App\Entities\Institution::create([
            'name' => 'IFTO',
            'description' => 'IFTO Campus Paraíso',
            'email' => 'paraiso@ifto.edu.br',
            'phone' => '63 33610300',
            'site' => 'www.ifto.edu.br/paraiso',
            'status' => '1',
            'street' => 'Rua do IFTO',
            'number' => '10',
            'sector' => 'Parque Agroinsdutrial',
            'city' => 'Paraíso do Tocantins',
            'complement' => 'IFTO',

        ]);
        // USUÁRIO (PROPI)
        \App\Entities\User::create([
            'name' => 'Propi',
            'email' => 'propi@demandai.com',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'www.google.com',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',
        ]);
        // USUÁRIO (ADMINISTRADOR)
        \App\Entities\User::create([
            'name' => 'Administrador',
            'email' => 'admin@demandai.com',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'www.google.com',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);
        // USUÁRIO (PESQUISADOR)
        \App\Entities\User::create([
            'name' => 'Pesquisador',
            'email' => 'pesquisador@demandai.com',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'www.google.com',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);

        //  TIPO DE USUÁRIO (PROPI)
        \App\Entities\TypeUser::create([
            'name' => 'Usuário Propi',
            'description' => 'Descrição do Usuário PROPI',
            'status' => '1',
        ]);
        // TIPO DE USUÁRIO (ADMINISTRADOR)
        \App\Entities\TypeUser::create([
            'name' => 'Usuário Administrador',
            'description' => 'Descrição do Usuário Administrador',
            'status' => '1',

        ]);
        // TIPO DE USUÁRIO (PESQUISADOR)
        \App\Entities\TypeUser::create([
            'name' => 'Usuário Pesquisador',
            'description' => 'Descrição do Usuário Pesquisador',
            'status' => '1',


        ]);


    }
}
