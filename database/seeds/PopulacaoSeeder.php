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

        \App\Entities\User::create([
            'name' => 'participante',
            'email' => 'participante@ifto.com',
            'password' => bcrypt('123123123'),
            'formation' => '1',
            'lattes' => 'www.google.com',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id'=> '1',

        ]);

        \App\Entities\User::create([
            'name' => 'Administrador',
            'email' => 'admin@ifto.com',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'www.google.com',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id'=> '1',

        ]);
    }
}
