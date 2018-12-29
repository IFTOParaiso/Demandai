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
        \App\Entities\Institution::create([ // ID:1 -PARAÍSO - TO
            'name' => 'IFTO - Campus Paraíso do Tocantins',
            'description' => 'Instituto Federal do Tocantins - Campus Paraíso',
            'email' => 'paraiso@ifto.edu.br',
            'phone' => '63 3361-0300',
            'site' => 'http://portal.ifto.edu.br/paraiso/',
            'status' => '1',
            'street' => 'BR 153, KM 480',
            'number' => 'sn',
            'sector' => 'Plano Diretor Sul',
            'city' => 'Palmas - TO',
            'complement' => 'IFTO',

        ]);

        \App\Entities\Institution::create([ // ID:2 PALMAS - TO
            'name' => 'IFTO - Campus Palmas',
            'description' => 'Instituto Federal do Tocantins - Campus Palmas',
            'email' => 'palmas@ifto.edu.br',
            'phone' => '63 3236-4000',
            'site' => 'http://portal.ifto.edu.br/paraiso/',
            'status' => '1',
            'street' => 'Quadra 310 Su, Lo 5',
            'number' => 'sn',
            'sector' => 'Parque Agroindustrial',
            'city' => 'Paraíso do Tocantins - TO',
            'complement' => 'IFTO',

        ]);

        \App\Entities\Institution::create([ // ID:3 ARAGUAÍNA - TO
            'name' => 'IFTO - Campus Araguaína',
            'description' => 'Instituto Federal do Tocantins - Campus Araguaína',
            'email' => 'araguaina@ifto.edu.br',
            'phone' => '63 3411-0300',
            'site' => 'http://portal.ifto.edu.br/araguaina',
            'status' => '1',
            'street' => 'Av. Amazonas, esquina com a Av. Paraguai, Quadra 56, Lote 01',
            'number' => 'sn',
            'sector' => 'Cimba Araguaína',
            'city' => 'Araguaína - TO',
            'complement' => 'IFTO',

        ]);

        \App\Entities\Institution::create([ // ID:4 COLINAS - TO
            'name' => 'IFTO - Campus Colinas',
            'description' => 'Instituto Federal do Tocantins - Campus Colinas do Tocantins',
            'email' => 'colinas@ifto.edu.br',
            'phone' => '63 99972-2908',
            'site' => 'http://portal.ifto.edu.br/colinas',
            'status' => '1',
            'street' => 'Avenida Bernardo Sayão, Lote 29B, Chácara Raio de Sol',
            'number' => 'sn',
            'sector' => 'Santa Maria',
            'city' => 'Colinas do Tocantins - TO',
            'complement' => 'IFTO',

        ]);

        \App\Entities\Institution::create([ // ID:5 DIANÓPOLIS - TO
            'name' => 'IFTO - Campus Dianópolis',
            'description' => 'Instituto Federal do Tocantins - Campus Dianópolis',
            'email' => 'dianopolis@ifto.edu.br',
            'phone' => '63 99969-4268',
            'site' => 'http://portal.ifto.edu.br/dianopolis',
            'status' => '1',
            'street' => 'Rodovia TO 040 - Km 349',
            'number' => 'sn',
            'sector' => 'Loteamento Rio Palmeira - Lote 1',
            'city' => 'Dianópolis - TO',
            'complement' => 'IFTO',

        ]);

        \App\Entities\Institution::create([ // ID:6 GURUPI - TO
            'name' => 'IFTO - Campus Gurupi',
            'description' => 'Instituto Federal do Tocantins - Campus Gurupi',
            'email' => 'gurupi@ifto.edu.br',
            'phone' => '63 3311-5400',
            'site' => 'http://portal.ifto.edu.br/gurupi',
            'status' => '1',
            'street' => 'Alameda Madrid',
            'number' => '545',
            'sector' => 'Jardim Sevilha',
            'city' => 'Gurupi - TO',
            'complement' => 'IFTO',

        ]);

        \App\Entities\Institution::create([ // ID:7 PORTO NACIONAL - TO
            'name' => 'IFTO - Campus Porto Nacional',
            'description' => 'Instituto Federal do Tocantins - Campus Gurupi',
            'email' => 'portonacional@ifto.edu.br',
            'phone' => '63 3363-9700',
            'site' => 'http://portal.ifto.edu.br/porto',
            'status' => '1',
            'street' => 'Avenida Tocantins, A.I. - Loteamento Mãe Dedé',
            'number' => 'sn',
            'sector' => 'Jardim América',
            'city' => 'Porto Nacional - TO',
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
            'name' => 'Leandro Teófilo Pinto dos Reis',
            'email' => 'teofilo@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/5205961243034154',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);

        \App\Entities\User::create([
            'name' => 'André Mesquita Rincon',
            'email' => 'rincon.ifto@gmail.com',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'http://lattes.cnpq.br/8592889761837696',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);

        \App\Entities\User::create([
            'name' => 'Gislaine Pereira Sales',
            'email' => 'gislaine@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/4959271117499925',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);

        \App\Entities\User::create([
            'name' => 'Thatiane de Oliveira Rosa',
            'email' => 'thatiane@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/0303783728759750',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);

        \App\Entities\User::create([
            'name' => 'Stéfan de Oliveira Rosa',
            'email' => 'stefan@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/2774705785638791',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);

        \App\Entities\User::create([
            'name' => 'Fábio Silveira Vidal',
            'email' => 'vidalfs@gmail.com',
            'password' => bcrypt('123456'),
            'formation' => '3',
            'lattes' => 'http://lattes.cnpq.br/5457169156572232',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '1',

        ]);

        \App\Entities\User::create([
            'name' => 'Wilson Wolf Costa',
            'email' => 'wilsoncosta@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'http://lattes.cnpq.br/4641095971291235',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '2',

        ]);

        \App\Entities\User::create([
            'name' => 'Gerson Pesente Focking',
            'email' => 'presente@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '3',
            'lattes' => 'http://lattes.cnpq.br/7255745251514223',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '2',

        ]);

        \App\Entities\User::create([
            'name' => 'Napoleão Póvoa Ribeiro Filho',
            'email' => 'napoleao@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/3384664312366751',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '2',

        ]);

        \App\Entities\User::create([
            'name' => 'Madson Teles de Souza',
            'email' => 'madson@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/8817711554486322',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '2',

        ]);

        \App\Entities\User::create([
            'name' => 'Daiane Aparecida Tonaco',
            'email' => 'daiane@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/1081122677251461',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '3',

        ]);

        \App\Entities\User::create([
            'name' => 'Cassiana Barros da Silva',
            'email' => 'cassiana@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'http://lattes.cnpq.br/8510907561824305',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '3',

        ]);

        \App\Entities\User::create([
            'name' => 'Bárbara Marques Bianchini',
            'email' => 'barbara@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '1',
            'lattes' => 'http://lattes.cnpq.br/8890370120392974',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '3',

        ]);

        \App\Entities\User::create([
            'name' => 'Ana Carolina Resende Maia',
            'email' => 'anacarolina@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/6339954928780661',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '3',

        ]);

        \App\Entities\User::create([
            'name' => 'Ricardo Alencar Liborio',
            'email' => 'ricardo@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/6261435311932626',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '6',

        ]);

        \App\Entities\User::create([
            'name' => 'Paulo Victor Gomes Sales',
            'email' => 'paulovictor@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '3',
            'lattes' => 'http://lattes.cnpq.br/3165647792943190',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '6',

        ]);

        \App\Entities\User::create([
            'name' => 'Helber Véras Nunes',
            'email' => 'helber@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '3',
            'lattes' => 'http://lattes.cnpq.br/2795363298472337',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '6',

        ]);

        \App\Entities\User::create([
            'name' => 'Ademil Domingos do Nascimento',
            'email' => 'ademil@ifto.edu.br',
            'password' => bcrypt('123456'),
            'formation' => '2',
            'lattes' => 'http://lattes.cnpq.br/5796073468092493',
            'status' => '1',
            'remember_token' => str_random(10),
            'institution_id' => '6',

        ]);

        // TIPO DE USUÁRIO (ADMINISTRADOR)
        \App\Entities\TypeUser::create([
            'name' => 'Administrador',
            'description' => 'Descrição do Usuário Administrador',
            'status' => '1',

        ]);

        //  TIPO DE USUÁRIO (PROPI)
        \App\Entities\TypeUser::create([
            'name' => 'Propi',
            'description' => 'Descrição do Usuário PROPI',
            'status' => '1',
        ]);

        // TIPO DE USUÁRIO (PESQUISADOR)
        \App\Entities\TypeUser::create([
            'name' => 'Pesquisador',
            'description' => 'Descrição do Usuário Pesquisador',
            'status' => '1',


        ]);

        // USUÁRIO TIPO USUÁRIO (PROPI)
        \App\Entities\UserTypeUser::create([
            'user_id' => '1',
            'type_user_id' => '1',

        ]);
        // USUÁRIO TIPO USUÁRIO (ADMINISTRADOR)
        \App\Entities\UserTypeUser::create([
            'user_id' => '2',
            'type_user_id' => '2',

        ]);
        // USUÁRIO TIPO USUÁRIO (PESQUISADOR)
        \App\Entities\UserTypeUser::create([
            'user_id' => '3',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '4',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '5',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '6',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '7',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '8',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '9',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '10',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '11',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '12',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '13',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '14',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '15',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '16',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '17',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '18',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '19',
            'type_user_id' => '3',

        ]);

        \App\Entities\UserTypeUser::create([
            'user_id' => '20',
            'type_user_id' => '3',

        ]);

        // GRANDES ÁREAS
        \App\Entities\BigArea::create([
            'name' => 'C. Exatas e da Terra',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Ciências Agrárias',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Ciências Biológicas',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Ciências Humanas	',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Engenharias',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Ciências da Saúde',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Ling., Letras e Artes',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Soc. Aplicadas',
            'status' => '1',
        ]);
        \App\Entities\BigArea::create([
            'name' => 'Outras',
            'status' => '1',
        ]);

        //C. EXATAS E DA TERRA

        \App\Entities\Area::create(['name' => '	Ciências Exatas e da Terra	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Matemática	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Álgebra	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Conjuntos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Lógica Matemática	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoria dos Números	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Grupos de Algebra Não-Comutaviva	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Algebra Comutativa	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geometria Algebrica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise Complexa	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise Funcional	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise Funcional Não-Linear	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Equações Diferênciais Ordinárias	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Equações Diferênciais Parciais	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Equações Diferênciais Funcionais	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geometria e Topologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geometria Diferêncial	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Topologia Algébrica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Topologia das Variedades	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sistemas Dinâmicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoria das Singularidades e Teoria das Catástrofes	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoria das Folheações	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Matemática Aplicada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física Matemática	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise Numérica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Matemática Discreta e Combinatoria	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Probabilidade e Estatística	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Probabilidade	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral e Fundamentos da Probabilidade	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral e Processos Estocásticos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoremas de Limite	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Processos Markovianos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise Estocástica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Processos Estocásticos Especiais	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estatística	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Fundamentos da Estatística	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Inferência Paramétrica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Inferência Nao-Paramétrica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Inferência em Processos Estocásticos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise Multivariada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Regressão e Correlação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Planejamento de Experimentos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise de Dados	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Probabilidade e Estatística Aplicadas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Ciência da Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoria da Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Computabilidade e Modelos de Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Linguagem Formais e Automatos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise de Algoritmos e Complexidade de Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Lógicas e Semântica de Programas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Matemática da Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Matemática Simbólica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Modelos Analíticos e de Simulação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Metodologia e Técnicas da Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Linguagens de Programação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Software	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Banco de Dados	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sistemas de Informação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Processamento Gráfico (Graphics)	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sistemas de Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Hardware	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Arquitetura de Sistemas de Computação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Software Básico	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teleinformática	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astronomia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astronomia de Posição e Mecânica Celeste	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astronomia Fundamental	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astronomia Dinâmica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astrofísica Estelar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astrofísica do Meio Interestelar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Meio Interestelar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Nebulosa	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astrofísica Extragaláctica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Galáxias	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Aglomerados de Galáxias	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Quasares	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Cosmologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astrofísica do Sistema Solar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física Solar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Movimento da Terra	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sistema Planetário	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Astronômica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astronômia Ótica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Radioastronomia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Astronomia Espacial	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Processamento de Dados Astronômicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física Geral	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Métodos Matemáticos da Física	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física Clássica e Física Quântica; Mecânica e Campos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Relatividade e Gravitação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física Estatística e Termodinâmica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Metrologia, Técnicas Gerais de Laboratório, Sistema de Instrumentação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Específica de Uso Geral em Física	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Áreas Clássicas de Fenomenologia e suas Aplicações	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Eletricidade e Magnetismo; Campos e Partículas Carregadas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Ótica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Acústica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Transferência de Calor; Processos Térmicos e Termodinâmicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Mecânica, Elasticidade e Reologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Dinâmica dos Fluidos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física das Partículas Elementares e Campos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral de Partículas e Campos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Teorias Específicas e Modelos de Interação; Sistematica de Partículas; Raios Cósmicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Reações Específicas e Fenomiologia de Partículas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Propriedades de Partículas Específicas e Ressonâncias	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física Nuclear	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estrutura Nuclear	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Desintegração Nuclear e Radioatividade	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Reações Nucleares e Espalhamento Geral	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Reações Nucleares e Espalhamento (Reações Específicas)	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Propriedades de Núcleos Específicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Métodos Experimentais e Instrumentação para Partículas Elementares e Física Nuclear	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física Atômica e Molécular	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estrutura Eletrônica de Átomos e Moléculas; Teoria	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Espectros Atômicos e Integração de Fótons	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Espectros Moléculares e Interações de Fótons com Moléculas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Processos de Colisão e Interações de Átomos e Moléculas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Inf.Sobre Átomos e Moléculas Obtidos Experimentalmente;Instrumentação e Técnicas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estudos de Átomos e Moléculas Especiais	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física dos Fluidos, Física de Plasmas e Descargas Elétricas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Cinética e Teoria de Transporte de Fluidos; Propriedades Físicas de Gases	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física de Plasmas e Descargas Elétricas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Física da Matéria Condensada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estrutura de Líquidos e Sólidos; Cristalografia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Propriedades Mecânicas e Acústicas da Matéria Condensada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Dinâmica da Rede e Estatística de Cristais	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Equação de Estado, Equilíbrio de Fases e Transições de Fase	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Propriedades Térmicas da Matéria Condensada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Propriedades de Transportes de Matéria Condensada (Não Eletrônicas)	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Campos Quânticos e Sólidos, Hélio, Líquido, Sólido	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Superfícies e Interfaces; Películas e Filamentos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estados Eletrônicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Transp.Eletrônicos e Prop. Elétricas de Superfícies; Interfaces e Películas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estruturas Eletrônicas e Propriedades Elétricas de Superfícies Interfaces e Películas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Supercondutividade	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Materiais Magnéticos e Propriedades Magnéticas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Ressonância Mag.e Relax.Na Mat.Condens;Efeitos Mosbauer;Corr.Ang.Pertubada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Materiais Dielétricos e Propriedades Dielétricas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Prop.Óticas e Espectrosc.da Mat.Condens;Outras Inter.da Mat.Com Rad.e Part.	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Emissão Eletrônica e Iônica por Líquidos e Sólidos; Fenômenos de Impacto	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química Orgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estrutura, Conformação e Estereoquímica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sintese Orgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Fisico-Química Orgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Fotoquímica Orgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química dos Produtos Naturais	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Evolução, Sistemática e Ecologia Química	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Polimeros e Colóides	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química Inorgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Campos de Coordenação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Não-Metais e Seus Compostos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Compostos Organo-Metálicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Determinação de Estrutura de Compostos Inorgânicos	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Foto-Química Inorgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Fisico Química Inorgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química Bio-Inorgânica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Fisico-Química	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Cinética Química e Catálise	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Eletroquímica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Espectroscopia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química de Interfaces	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química do Estado Condensado	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química Nuclear e Radioquímica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química Teórica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Termodinâmica Química	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química Analítica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Separação	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Métodos Óticos de Análise	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Eletroanalítica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Gravimetria	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Titimetria	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Analítica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Análise de Traços e Química Ambiental	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	GeoCiências	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Mineralogia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Petrologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geoquímica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geologia Regional	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geotectônica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geocronologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Cartografia Geológica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Metalogenia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Hidrogeologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Prospecção Mineral	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sedimentologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Paleontologia Estratigráfica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Estratigrafia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geologia Ambiental	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geofísica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geomagnetismo	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sismologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geotermia e Fluxo Térmico	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Propriedades Físicas das Rochas	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geofísica Nuclear	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sensoriamento Remoto	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Aeronomia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Desenvolvimento de Instrumentação Geofísica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geofísica Aplicada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Gravimetria	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Meteorologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Meteorologia Dinâmica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Meteorologia Sinótica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Meteorologia Física	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Química da Atmosfera	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Meteorológica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Climatologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Micrometeorologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sensoriamento Remoto da Atmosfera	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Meteorologia Aplicada	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geodesia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geodesia Física	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geodesia Geométrica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geodesia Celeste	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Fotogrametria	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Cartografia Básica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geografia Física	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geomorfologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Climatologia Geográfica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Pedologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Hidrogeografia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geoecologia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Fotogeografia (Físico-Ecológica)	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geocartografia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Oceanografia	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Oceanografia Biológica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Interação entre os Organismos Marinhos e os Parâmetros Ambientais	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Oceanografia Física	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Variáveis Físicas da Água do Mar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Movimento da Água do Mar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Origem das Massas de Água	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Interação do Oceano com o Leito do Mar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Interação do Oceano com a Atmosfera	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Oceanografia Química	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Propriedades Químicas da Água do Mar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Interações Químico-Biológicas/Geológicas das Substâncias Químicas da Água do Mar	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Oceanografia Geológica	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geomorfologia Submarina	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Sedimentologia Marinha	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geofísica Marinha	', 'status' => '1', 'big_area_id' => '1',]);
        \App\Entities\Area::create(['name' => '	Geoquímica Marinha	', 'status' => '1', 'big_area_id' => '1',]);

        // CIÊNCIAS AGRÁRIAS

        \App\Entities\Area::create(['name' => '	Ciências Agrárias	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Agronomia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Ciência do Solo	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Genese, Morfologia e Classificação dos Solos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Física do Solo	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Química do Solo	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Microbiologia e Bioquímica do Solo	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fertilidade do Solo e Adubação	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Manejo e Conservação do Solo	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fitossanidade	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fitopatologia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Entomologia Agrícola	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Parasitologia Agrícola	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Microbiologia Agrícola	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Defesa Fitossanitária	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fitotecnia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Manejo e Tratos Culturais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Mecanização Agrícola	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Produção e Beneficiamento de Sementes	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Produção de Mudas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Melhoramento Vegetal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fisiologia de Plantas Cultivadas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Matologia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Floricultura, Parques e Jardins	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Floricultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Parques e Jardins	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Arborização de Vias Públicas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Agrometeorologia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Extensão Rural	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Recursos Florestais e Engenharia Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Silvicultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Dendrologia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Florestamento e Reflorestamento	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Genética e Melhoramento Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Sementes Florestais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Nutrição Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Solos Florestais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Proteção Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Manejo Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Economia Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Politica e Legislação Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Administração Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Dendrometria e Inventário Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fotointerpretação Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Ordenamento Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Técnicas e Operações Florestais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Exploração Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Mecanização Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia e Utilização de Produtos Florestais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Anatomia e Identificação de Produtos Florestais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Propriedades Físico-Mecânicas da Madeira	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Relações Água-Madeira e Secagem	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tratamento da Madeira	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Processamento Mecânico da Madeira	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Química da Madeira	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Resinas de Madeiras	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Celulose e Papel	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Chapas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Conservação da Natureza	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Hidrologia Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Conservação de Áreas Silvestres	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Conservação de Bacias Hidrográficas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Recuperação de Áreas Degradadas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Energia de Biomassa Florestal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Engenharia Agrícola	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Máquinas e Implementos Agrícolas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Água e Solo	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Irrigação e Drenagem	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Conservação de Solo e Água	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Processamento de Produtos Agrícolas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Pré-Processamento de Produtos Agrícolas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Armazenamento de Produtos Agrícolas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Transferência de Produtos Agrícolas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Construções Rurais e Ambiência	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Assentamento Rural	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Construções Rurais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Saneamento Rural	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Energização Rural	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Zootecnia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Ecologia dos Animais Domésticos e Etologia	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Genética e Melhoramento dos Animais Domésticos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Nutrição e Alimentação Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Exigências Nutricionais dos Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Avaliação de Alimentos para Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Conservação de Alimentos para Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Pastagem e Forragicultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Avaliação, Produção e Conservação de Forragens	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Manejo e Conservação de Pastagens	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fisiologia de Plantas Forrageiras	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Melhoramento de Plantas Forrageiras e Produção de Sementes	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Toxicologia e Plantas Tóxicas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Produção Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Criação de Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Manejo de Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Instalações para Produção Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Medicina Veterinária	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Clínica e Cirurgia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Anestesiologia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Técnica Cirúrgica Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Radiologia de Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Farmacologia e Terapêutica Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Obstetrícia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Clínica Veterinária	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Clínica Cirúrgica Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Toxicologia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Medicina Veterinária Preventiva	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Epidemiologia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Saneamento Aplicado à Saúde do Homem	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Doenças Infecciosas de Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Doenças Parasitárias de Animais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Saúde Animal (Programas Sanitários)	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Patologia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Patologia Aviária	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Anatomia Patologia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Patologia Clínica Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Reprodução Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Ginecologia e Andrologia Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Inseminação Artificial Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fisiopatologia da Reprodução Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Inspeção de Produtos de Origem Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Recursos Pesqueiros e Engenharia de Pesca	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Recursos Pesqueiros Marinhos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fatores Abióticos do Mar	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Avaliação de Estoques Pesqueiros Marinhos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Exploração Pesqueira Marinha	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Manejo e Conservação de Recursos Pesqueiros Marinhos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Recursos Pesqueiros de Águas Interiores	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fatores Abióticos de Águas Interiores	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Avaliação de Estoques Pesqueiros de Águas Interiores	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Explotação Pesqueira de Águas Interiores	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Manejo e Conservação de Recursos Pesqueiros de Águas Interiores	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Aqüicultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Maricultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Carcinocultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Ostreicultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Piscicultura	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Pesca	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Ciência e Tecnologia de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Ciência de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Valor Nutritivo de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Química, Física, Físico-Química e Bioquímica dos Alim. e das Mat.-Primas Alimentares	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Microbiologia de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Pós-Colheita	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Toxicidade e Resíduos de Pesticidas em Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Avaliação e Controle de Qualidade de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Padrões, Legislação e Fiscalização de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Produtos de Origem Animal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Produtos de Origem Vegetal	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia das Bebidas	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Alimentos Dietéticos e Nutricionais	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Aproveitamento de Subprodutos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Embalagens de Produtos Alimentares	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Instalações Industriais de Produção de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);
        \App\Entities\Area::create(['name' => '	Armazenamento de Alimentos	', 'status' => '1', 'big_area_id' => '2',]);

        // CIÊNCIAS BIOLÓGICAS

        \App\Entities\Area::create(['name' => '	Ciências Biológicas	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biologia Geral	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Genética	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Genética Quantitativa	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Genética Molecular e de Microorganismos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Genética Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Genética Animal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Genética Humana e Médica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Mutagênese	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Botânica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Paleobotânica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Morfologia Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Morfologia Externa	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Citologia Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Anatomia Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Palinologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Nutrição e Crescimento Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Reprodução Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Ecofisiologia Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Taxonomia Vegetal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Taxonomia de Criptógamos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Taxonomia de Fanerógamos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fitogeografia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Botânica Aplicada	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Zoologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Paleozoologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Morfologia dos Grupos Recentes	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia dos Grupos Recentes	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Comportamento Animal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Taxonomia dos Grupos Recentes	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Zoologia Aplicada	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Conservação das Espécies Animais	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Utilização dos Animais	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Controle Populacional de Animais	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Ecologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Ecologia Teórica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Ecologia de Ecossistemas	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Ecologia Aplicada	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Morfologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Citologia e Biologia Celular	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Embriologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Histologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Anatomia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Anatomia Humana	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Anatomia Animal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Geral	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia de Órgaos e Sistemas	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Neurofisiologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Cardiovascular	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia da Respiração	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Renal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Endocrina	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia da Digestão	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Cinesiologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia do Esforço	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Fisiologia Comparada	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Bioquímica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Química de Macromoléculas	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Proteínas	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Lipídeos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Glicídeos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Bioquímica dos Microorganismos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Metabolismo e Bioenergética	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biologia Molecular	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Enzimologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biofísica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biofísica Molecular	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biofísica Celular	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biofísica de Processos e Sistemas	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Radiologia e Fotobiologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Farmacologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Farmacologia Geral	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Farmacocinética	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biodisponibilidade	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Farmacologia Autonômica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Neuropsicofarmacologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Farmacologia Cardiorenal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Farmacologia Bioquímica e Molecular	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Etnofarmacologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Toxicologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Farmacologia Clínica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Imunologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Imunoquímica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Imunologia Celular	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Imunogenética	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Imunologia Aplicada	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Microbiologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Biologia e Fisiologia dos Microorganismos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Virologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Bacterologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Micologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Microbiologia Aplicada	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Microbiologia Médica	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Microbiologia Industrial e de Fermentação	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Parasitologia	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Protozoologia de Parasitos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Protozoologia Parasitária Humana	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Protozoologia Parasitária Animal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Helmintologia de Parasitos	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Helmintologia Humana	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Helmintologia Animal	', 'status' => '1', 'big_area_id' => '3',]);
        \App\Entities\Area::create(['name' => '	Entomologia e Malacologia de Parasitos e Vetores	', 'status' => '1', 'big_area_id' => '3',]);

        // CIÊNCIAS HUMANAS

        \App\Entities\Area::create(['name' => '	Ciências Humanas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Filosofia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História da Filosofia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Metafísica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Lógica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Ética	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Epistemologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Filosofia Brasileira	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sociologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Fundamentos da Sociologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Sociológica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História da Sociologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sociologia do Conhecimento	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sociologia do Desenvolvimento	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sociologia Urbana	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sociologia Rural	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sociologia da Saúde	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Outras Sociologias Específicas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Antropologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Antropológica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Etnologia Indígena	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Antropologia Urbana	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Antropologia Rural	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Antropologia das Populações Afro-Brasileiras	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Arqueologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria e Método em Arqueologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Arqueologia Pré-Histórica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Arqueologia Histórica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria e Filosofia da História	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História Antiga e Medieval	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História Moderna e Contemporânea	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História da América	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História dos Estados Unidos	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História Latino-Americana	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História do Brasil	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História do Brasil Colônia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História do Brasil Império	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História do Brasil República	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História Regional do Brasil	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História das Ciências	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia Humana	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia da População	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia Agrária	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia Urbana	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia Econômica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia Política	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Geografia Regional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria do Desenvolvimento Regional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Regionalização	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Análise Regional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Fundamentos e Medidas da Psicologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História, Teorias e Sistemas em Psicologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Metodologia, Instrumentação e Equipamento em Psicologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Construção e Validade de Testes, Escalas e Outras Medidas Psicológicas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Técnicas de Processamento Estatístico, Matemático e Computacional em Psicologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia Experimental	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Processos Perceptuais e Motores	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Processos de Aprendizagem, Memória e Motivação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Processos Cognitivos e Atencionais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Estados Subjetivos e Emoção	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia Fisiológica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Neurologia, Eletrofisiologia e Comportamento	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Processos Psico-Fisiológicos	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Estimulação Elétrica e com Drogas; Comportamento	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicobiologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia Comparativa	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Estudos Naturalísticos do Comportamento Animal	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Mecanismos Instintivos e Processos Sociais em Animais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia Social	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Relações Interpessoais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Processos Grupais e de Comunicação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Papéis e Estruturas Sociais; Indivíduo	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia Cognitiva	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia do Desenvolvimento Humano	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Processos Perceptuais e Cognitivos; Desenvolvimento	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Desenvolvimento Social e da Personalidade	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia do Ensino e da Aprendizagem	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Planejamento Institucional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Programação de Condições de Ensino	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Treinamento de Pessoal	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Aprendizagem e Desempenho Acadêmicos	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Ensino e Aprendizagem na Sala de Aula	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia do Trabalho e Organizacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Análise Institucional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Recrutamento e Seleção de Pessoal	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Treinamento e Avaliação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Fatores Humanos no Trabalho	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Planejamento Ambiental e Comportamento Humano	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Tratamento e Prevenção Psicológica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Intervenção Terapêutica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Programas de Atendimento Comunitário	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Treinamento e Reabilitação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Desvios da Conduta	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Distúrbios da Linguagem	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Distúrbios Psicossomáticos	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Fundamentos da Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Filosofia da Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História da Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sociologia da Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Antropologia Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Economia da Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Psicologia Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Administração Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Administração de Sistemas Educacionais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Administração de Unidades Educativas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Planejamento e Avaliação Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Política Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Planejamento Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Avaliação de Sistemas, Instituições, Planos e Programas Educacionais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Ensino-Aprendizagem	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teorias da Instrução	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Métodos e Técnicas de Ensino	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Tecnologia Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Avaliação da Aprendizagem	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Currículo	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral de Planejamento e Desenvolvimento Curricular	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Currículos Específicos para Níveis e Tipos de Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Orientação e Aconselhamento	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Orientação Educacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Orientação Vocacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Tópicos Específicos de Educação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Educação de Adultos	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Educação Permanente	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Educação Rural	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Educação em Periferias Urbanas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Educação Especial	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Educação Pré-Escolar	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Ensino Profissionalizante	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Ciência Política	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Política	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Política Clássica	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Política Medieval	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Política Moderna	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teoria Política Contemporânea	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Estado e Governo	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Estrutura e Transformação do Estado	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Sistemas Governamentais Comparados	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Relações Intergovernamentais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Estudos do Poder Local	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Instituições Governamentais Específicas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Comportamento Político	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Estudos Eleitorais e Partidos Políticos	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Atitude e Ideologias Políticas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Conflitos e Coalizões Políticas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Comportamento Legislativo	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Classes Sociais e Grupos de Interesse	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Políticas Públicas	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Análise do Processo Decisório	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Análise Institucional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Técnicas de Antecipação	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Política Internacional	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Política Externa do Brasil	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Organizações Internacionais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Integração Internacional, Conflito, Guerra e Paz	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Relações Internacionais, Bilaterais e Multilaterais	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	História da Teologia	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teologia Moral	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teologia Sistemática	', 'status' => '1', 'big_area_id' => '4',]);
        \App\Entities\Area::create(['name' => '	Teologia Pastoral	', 'status' => '1', 'big_area_id' => '4',]);

        // ENGENHARIAS

        \App\Entities\Area::create(['name' => '	Engenharias	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Civil	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Construção Civil	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais e Componentes de Construção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Construtivos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instalações Prediais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estruturas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estruturas de Concreto	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estruturas de Madeiras	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estruturas Metálicas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Mecânica das Estruturas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Geotécnica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Fundações e Escavações	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Mecânicas das Rochas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Mecânicas dos Solos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Obras de Terra e Enrocamento	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Pavimentos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Hidráulica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Hidráulica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Hidrologia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Infra-Estrutura de Transportes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aeroportos; Projeto e Construção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Ferrovias; Projetos e Construção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Portos e Vias Nevegáveis; Projeto e Construção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Rodovias; Projeto e Construção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Minas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Pesquisa Mineral	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Caracterização do Minério	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Dimensionamento de Jazidas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Lavra	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Lavra a Céu Aberto	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Lavra de Mina Subterrânea	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Equipamentos de Lavra	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tratamento de Minérios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Métodos de Concentração e Enriquecimento de Minérios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Equipamentos de Beneficiamento de Minérios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Materiais e Metalúrgica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instalações e Equipamentos Metalúrgicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instalações Metalúrgicas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Equipamentos Metalúrgicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Metalurgia Extrativa	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aglomeração	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Eletrometalurgia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Hidrometalurgia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Pirometalurgia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tratamento de Minérios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Metalurgia de Transformação	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Conformação Mecânica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Fundição	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Metalurgia de Po	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Recobrimentos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Soldagem	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tratamento Térmicos, Mecânicos e Químicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Usinagem	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Metalurgia Fisica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estrutura dos Metais e Ligas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Propriedades Físicas dos Metais e Ligas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Propriedades Mecânicas dos Metais e Ligas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Transformação de Fases	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Corrosão	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais não Metálicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Extração e Transformação de Materiais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Cerâmicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais Conjugados não Metálicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Polímeros, Aplicações	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Elétrica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais Elétricos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais Condutores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais e Componentes Semicondutores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais e Dispositivos Supercondutores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais Dielétricos, Piesoelétricos e Ferroelétricos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais e Componentes Eletroóticos e Magnetoóticos, Materiais Fotoelétricos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais e Dispositivos Magnéticos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Medidas Elétricas, Magnéticas e Eletrônicas; Instrumentação	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Medidas Elétricas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Medidas Magnéticas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Eletromecânica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Eletrônica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Sistemas Eletrônicos de Medida e de Controle	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Circuitos Elétricos, Magnéticos e Eletrônicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral dos Circuitos Elétricos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Circuitos Lineares e Não-Lineares	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Circuitos Eletrônicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Circuitos Magnéticos, Magnetismos, Eletromagnetismo	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Sistemas Elétricos de Potência	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Geração da Energia Elétrica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Transmissão da Energia Elétrica, Distribuição da Energia Elétrica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Conversão e Retificação da Energia Elétrica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Medição, Controle, Correção e Proteção de Sistemas Elétricos de Potência	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Máquinas Elétricas e Dispositivos de Potência	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instalações Elétricas Prediais e Industriais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Eletrônica Industrial, Sistemas e Controles Eletrônicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Eletrônica Industrial	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Automação Eletrônica de Processos Elétricos e Industriais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Controle de Processos Eletrônicos, Retroalimentação	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Telecomunicações	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Teoria Eletromagnética, Microondas, Propagação de Ondas, Antenas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Radionavegação e Radioastronomia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Sistemas de Telecomunicações	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Mecânica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Fenômenos de Transporte	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Transferência de Calor	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Mecânica dos Fluidos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Dinâmica dos Gases	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Principios Variacionais e Métodos Numéricos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Térmica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Termodinâmica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Controle Ambiental	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aproveitamento da Energia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Mecânica dos Sólidos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Mecânica dos Corpos Sólidos, Elásticos e Plásticos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Dinâmica dos Corpos Rígidos, Elásticos e Plásticos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Análise de Tensões	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Termoelasticidade	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Projetos de Máquinas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Teoria dos Mecanismos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estática e Dinâmica Aplicada	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Elementos de Máquinas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Fundamentos Gerais de Projetos das Máquinas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Máquinas, Motores e Equipamentos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Métodos de Síntese e Otimização Aplicados ao Projeto Mecânico	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Controle de Sistemas Mecânicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aproveitamento de Energia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos de Fabricação	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Matrizes e Ferramentas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Máquinas de Usinagem e Conformação	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Controle Numérico	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Robotização	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos de Fabricação, Seleção Econômica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Química	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Industriais de Engenharia Química	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Bioquimicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Orgânicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Inorgânicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Operações Industriais e Equipamentos para Engenharia Química	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Reatores Químicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Operações Características de Processos Bioquímicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Operações de Separação e Mistura	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tecnologia Química	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Balancos Globais de Matéria e Energia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Água	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Álcool	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Alimentos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Borrachas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Carvão	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Cerâmica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Cimento	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Couro	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Detergentes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Fertilizantes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Medicamentos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Metais não-Ferrosos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Óleos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Papel e Celulose	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Petróleo e Petroquímica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Polímeros	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Produtos Naturais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Têxteis	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tratamentos e Aproveitamento de Rejeitos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Xisto	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Sanitária	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Recursos Hídricos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Planejamento Integrado dos Recursos Hídricos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tecnologia e Problemas Sanitários de Irrigação	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Águas Subterrâneas e Poços Profundos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Controle de Enchentes e de Barragens	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Sedimentologia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tratamento de Águas de Abastecimento e Residuárias	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Química Sanitária	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Simplificados de Tratamento de Águas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Técnicas Convencionais de Tratamento de Águas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Técnicas Avancadas de Tratamento de Águas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estudos e Caracterização de Efluentes Industriais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Lay Out de Processos Industriais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Resíduos Radioativos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Saneamento Básico	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Técnicas de Abastecimento da Água	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Drenagem de Águas Residuárias	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Drenagem Urbana de Águas Pluviais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Resíduos Sólidos, Domésticos e Industriais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Limpeza Pública	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instalações Hidráulico-Sanitárias	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Saneamento Ambiental	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Ecologia Aplicada à Engenharia Sanitária	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Microbiologia Aplicada e Engenharia Sanitária	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Parasitologia Aplicada à Engenharia Sanitária	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Qualidade do Ar, das Águas e do Solo	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Controle da Poluição	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Legislação Ambiental	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Produção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Gerência de Produção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Planejamento de Instalações Industriais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Planejamento, Projeto e Controle de Sistemas de Produção	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Higiene e Segurança do Trabalho	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Suprimentos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Garantia de Controle de Qualidade	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Pesquisa Operacional	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Estocásticos e Teorias da Filas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Programação Linear, Não-Linear, Mista e Dinâmica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Séries Temporais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Teoria dos Grafos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Teoria dos Jogos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia do Produto	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Ergonomia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Metodologia de Projeto do Produto	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos de Trabalho	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Gerência do Projeto e do Produto	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Desenvolvimento de Produto	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Econômica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estudo de Mercado	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Localização Industrial	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Análise de Custos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Economia de Tecnologia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Vida Econômica dos Equipamentos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Avaliação de Projetos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Nuclear	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aplicações de Radioisotopos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Produção de Radioisotopos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aplicações Industriais de Radioisotopos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instrumentação para Medida e Controle de Radiação	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Fusão Controlada	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processos Industriais da Fusão Controlada	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Problemas Tecnológicos da Fusão Controlada	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Combustível Nuclear	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Extração de Combustível Nuclear	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Conversão, Enriquecimento e Fabricação de Combustível Nuclear	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Reprocessamento de Combustível Nuclear	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Rejeitos de Combustível Nuclear	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tecnologia dos Reatores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Núcleo do Reator	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais Nucleares e Blindagem de Reatores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Transferência de Calor em Reatores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Geração e Integração Com Sistemas Elétricos em Reatores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Para Operação e Controle de Reatores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Seguranca, Localização e Licênciamento de Reatores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aspectos Econômicos de Reatores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Transportes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Planejamento de Transportes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Planejamento e Organização do Sistema de Transporte	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Economia dos Transportes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Veículos e Equipamentos de Controle	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Vias de Transporte	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Veículos de Transportes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estação de Transporte	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Equipamentos Auxiliares e Controles	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Operações de Transportes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia de Tráfego	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Capacidade de Vias de Transporte	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Operação de Sistemas de Transporte	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Naval e Oceânica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Hidrodinâmica de Navios e Sistemas Oceânicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Resistência Hidrodinâmica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Propulsão de Navios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estruturas Navais e Oceânicas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Análise Teórica e Experimental de Estrutura	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Dinâmica Estrutural Naval e Oceânica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Síntese Estrutural Naval e Oceânica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Máquinas Marítimas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Análise de Sistemas Propulsores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Controle e Automação de Sistemas Propulsores	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Equipamentos Auxiliares do Sistema Propulsivo	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Motor de Propulsão	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Projeto de Navios e de Sistemas Oceânicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Projetos de Navios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Projetos de Sistemas Oceânicos Fixos e Semi-Fixos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Projetos de Embarcações Não-Convencionais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Construção Naval e de Sistemas Oceânicas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Métodos de Fabricação de Navios e Sistemas Oceânicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Soldagem de Estruturas Navais e Oceânicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Custos de Construção Naval	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Normatização e Certificação de Qualidade de Navios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Aeroespacial	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aerodinâmica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aerodinâmica de Aeronaves Espaciais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aerodinâmica dos Processos Geofísicos e Interplanetarios	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Dinâmica de Vôo	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Trajetorias e Orbitas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estabilidade e Controle	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Estruturas Aeroespaciais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aeroelasticidade	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Fadiga	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Projeto de Estruturas Aeroespaciais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Materiais e Processos para Engenharia Aeronáutica e Aeroespacial	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Propulsão Aeroespacial	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Combustão e Escoamento com Reações Químicas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Propulsão de Foguetes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Máquinas de Fluxo	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Motores Alternativos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Sistemas Aeroespaciais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Aviões	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Foguetes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Helicópteros	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Hovercraft	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Satélites e Outros Dispositivos Aeroespaciais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Normatização e Certificação de Qualidade de Aeronaves e Componentes	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Manutenção de Sistemas Aeroespaciais	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Biomédica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Bioengenharia	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Processamento de Sinais Biológicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Modelagem de Fenômenos Biológicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Modelagem de Sistemas Biológicos	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Engenharia Médica	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Biomateriais e Materiais Biocompatíveis	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Transdutores para Aplicações Biomédicas	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Odontológica e Médico-Hospitalar	', 'status' => '1', 'big_area_id' => '5',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Próteses	', 'status' => '1', 'big_area_id' => '5',]);

        // CIÊNCIAS DA SAUDE

        \App\Entities\Area::create(['name' => '	Ciências da Saúde	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Medicina	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Clínica Médica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Angiologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Dermatologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Alergologia e Imunologia Clínica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cancerologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Hematologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Endocrinologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Neurologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Pediatria	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Doenças Infecciosas e Parasitárias	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cardiologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Gastroenterologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Pneumologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Nefrologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Reumatologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Ginecologia e Obstetrícia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Fisiatria	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Oftalmologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Ortopedia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Plástica e Restauradora	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Otorrinolaringológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Oftalmológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Cardiovascular	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Toráxica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Gastroenterologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Pediátrica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Neurocirurgia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Urológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Proctológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Ortopédica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Traumatológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Anestesiologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Experimental	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Saúde Materno-Infantil	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Psiquiatria	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Anatomia Patológica e Patologia Clínica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Radiologia Médica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Medicina Legal e Deontologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Odontologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Clínica Odontológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Cirurgia Buco-Maxilo-Facial	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Ortodontia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Odontopediatria	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Periodontia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Endodontia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Radiologia Odontológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Odontologia Social e Preventiva	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Materiais Odontológicos	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Farmácia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Farmacotecnia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Farmacognosia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Análise Toxicológica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Análise e Controle e Medicamentos	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Bromatologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Enfermagem	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Enfermagem Médico-Cirúrgica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Enfermagem Obstétrica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Enfermagem Pediátrica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Enfermagem Psiquiátrica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Enfermagem de Doenças Contagiosas	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Enfermagem de Saúde Pública	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Nutrição	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Bioquímica da Nutrição	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Dietética	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Análise Nutricional de População	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Desnutrição e Desenvolvimento Fisiológico	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Saúde Coletiva	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Epidemiologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Saúde Publica	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Medicina Preventiva	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Fonoaudiologia	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Fisioterapia e Terapia Ocupacional	', 'status' => '1', 'big_area_id' => '6',]);
        \App\Entities\Area::create(['name' => '	Educação Física	', 'status' => '1', 'big_area_id' => '6',]);

        //Ling., Letras e Artes

        \App\Entities\Area::create(['name' => '	Lingüística, Letras e Artes	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Lingüística	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Teoria e Análise Lingüística	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Fisiologia da Linguagem	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Lingüística Histórica	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Sociolingüística e Dialetologia	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Psicolingüística	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Lingüística Aplicada	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Letras	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Língua Portuguesa	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Línguas Estrangeiras Modernas	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Línguas Clássicas	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Línguas Indígenas	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Teoria Literária	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Literatura Brasileira	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Outras Literaturas Vernáculas	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Literaturas Estrangeiras Modernas	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Literaturas Clássicas	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Literatura Comparada	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Artes	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Fundamentos e Crítica das Artes	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Teoria da Arte	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	História da Arte	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Crítica da Arte	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Artes Plásticas	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Pintura	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Desenho	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Gravura	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Escultura	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Cerâmica	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Tecelagem	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Música	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Regência	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Instrumentação Musical	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Composição Musical	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Canto	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Dança	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Execução da Dança	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Coreografia	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Teatro	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Dramaturgia	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Direção Teatral	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Cenografia	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Interpretação Teatral	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Ópera	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Fotografia	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Cinema	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Administração e Produção de Filmes	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Roteiro e Direção Cinematográficos	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Técnicas de Registro e Processamento de Filmes	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Interpretação Cinematográfica	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Artes do Vídeo	', 'status' => '1', 'big_area_id' => '7',]);
        \App\Entities\Area::create(['name' => '	Educação Artística	', 'status' => '1', 'big_area_id' => '7',]);

        // SOCIAIS APLICADAS

        \App\Entities\Area::create(['name' => '	Ciências Sociais Aplicadas	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria do Direito	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral do Direito	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral do Processo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria do Estado	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	História do Direito	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Filosofia do Direito	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Lógica Jurídica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Sociologia Jurídica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Antropologia Jurídica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Público	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Tributário	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Penal	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Processual Penal	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Processual Civil	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Constitucional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Administrativo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Internacional Público	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Privado	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Civil	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Comercial	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito do Trabalho	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direito Internacional Privado	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Direitos Especiais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração de Empresas	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração da Produção	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração Financeira	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Mercadologia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Negócios Internacionais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração de Recursos Humanos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração Pública	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Contabilidade e Financas Públicas	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Organizações Públicas	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Política e Planejamento Governamentais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração de Pessoal	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração de Setores Específicos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Ciências Contábeis	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria Econômica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Geral	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral da Economia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	História do Pensamento Econômico	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	História Econômica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Sistemas Econômicos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Métodos Quantitativos em Economia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Métodos e Modelos Matemáticos, Econométricos e Estatísticos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Estatística Sócio-Econômica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Contabilidade Nacional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Matemática	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Monetária e Fiscal	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria Monetária e Financeira	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Instituições Monetárias e Financeiras do Brasil	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Financas Públicas Internas	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Política Fiscal do Brasil	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Crescimento, Flutuações e Planejamento Econômico	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Crescimento e Desenvolvimento Econômico	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria e Política de Planejamento Econômico	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Flutuações Cíclicas e Projeções Econômicas	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Inflação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Internacional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria do Comércio Internacional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Relações do Comércio; Política Comercial; Integração Econômica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Balanço de Pagamentos; Financas Internacionais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Investimentos Internacionais e Ajuda Externa	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia dos Recursos Humanos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Treinamento e Alocação de Mão-de-Obra; Oferta de Mão-de-Obra e Força de Trabalho	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Mercado de Trabalho; Política do Governo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Sindicatos, Dissídios Coletivos, Relações de Emprego (Empregador/Empregado)	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Capital Humano	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Demografia Econômica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Industrial	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Organização Industrial e Estudos Industriais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Mudança Tecnologica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia do Bem-Estar Social	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia dos Programas de Bem-Estar Social	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia do Consumidor	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Regional e Urbana	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Urbana	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Renda e Tributação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economias Agrária e dos Recursos Naturais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Agrária	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia dos Recursos Naturais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Arquitetura e Urbanismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Fundamentos de Arquitetura e Urbanismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	História da Arquitetura e Urbanismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria da Arquitetura	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	História do Urbanismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria do Urbanismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Projeto de Arquitetuta e Urbanismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Planejamento e Projetos da Edificação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Planejamento e Projeto do Espaço Urbano	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Planejamento e Projeto do Equipamento	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Tecnologia de Arquitetura e Urbanismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Adequação Ambiental	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Paisagismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Desenvolvimento Histórico do Paisagismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Conceituação de Paisagismo e Metodologia do Paisagismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Estudos de Organização do Espaço Exterior	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Projetos de Espaços Livres Urbanos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Planejamento Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Fundamentos do Planejamento Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria do Planejamento Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria da Urbanização	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Política Urbana	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	História Urbana	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Métodos e Técnicas do Planejamento Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Informação, Cadastro e Mapeamento	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Técnica de Previsão Urbana e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Técnicas de Análise e Avaliação Urbana e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Técnicas de Planejamento e Projeto Urbanos e Regionais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviços Urbanos e Regionais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Administração Municipal e Urbana	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Estudos da Habitação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Aspectos Sociais do Planejamento Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Aspectos Econômicos do Planejamento Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Aspectos Físico-Ambientais do Planejamento Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviços Comunitários	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Infra-Estruturas Urbanas e Regionais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Transporte e Tráfego Urbano e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Legislação Urbana e Regional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Demografia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Distribuição Espacial	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Distribuição Espacial Geral	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Distribuição Espacial Urbana	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Distribuição Espacial Rural	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Tendência Populacional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Tendências Passadas	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Taxas e Estimativas Correntes	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Projeções	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Componentes da Dinâmica Demográfica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Fecundidade	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Mortalidade	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Migração	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Nupcialidade e Família	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Casamento e Divórcio	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Família e Reprodução	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Demografia Histórica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Distribuição Espacial	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Natalidade, Mortalidade, Migração	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Nupcialidade e Família	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Métodos e Técnicas de Demografia Histórica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Política Pública e População	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Política Populacional	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Políticas de Redistribuição de População	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Políticas de Planejamento Familiar	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Fontes de Dados Demográficos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Ciência da Informação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria da Informação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria Geral da Informação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Processos da Comunicação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Representação da Informação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Biblioteconomia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria da Classificação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Métodos Quantitativos. Bibliometria	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Técnicas de Recuperação de Informação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Processos de Disseminação da Informação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Arquivologia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Organização de Arquivos	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Museologia	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Comunicação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria da Comunicação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Jornalismo e Editoração	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Teoria e Ética do Jornalismo	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Organização Editorial de Jornais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Organização Comercial de Jornais	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Jornalismo Especializado (Comunitário, Rural, Empresarial, Científico)	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Rádio e Televisão	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Radiodifusão	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Videodifusão	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Relações Públicas e Propaganda	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Comunicação Visual	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviço Social	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Fundamentos do Serviço Social	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviço Social Aplicado	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviço Social do Trabalho	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviço Social da Educação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviço Social do Menor	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviço Social da Saúde	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Serviço Social da Habitação	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Economia Doméstica	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Desenho Industrial	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Programação Visual	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Desenho de Produto	', 'status' => '1', 'big_area_id' => '8',]);
        \App\Entities\Area::create(['name' => '	Turismo	', 'status' => '1', 'big_area_id' => '8',]);

        // OUTRAS

        \App\Entities\Area::create(['name' => '	Bioética	', 'status' => '1', 'big_area_id' => '9',]);
        \App\Entities\Area::create(['name' => '	Ciências Ambientais	', 'status' => '1', 'big_area_id' => '9',]);
        \App\Entities\Area::create(['name' => '	Defesa	', 'status' => '1', 'big_area_id' => '9',]);
        \App\Entities\Area::create(['name' => '	Divulgação Científica	', 'status' => '1', 'big_area_id' => '9',]);

        // EDITAIS
        \App\Entities\Publish::create([
            'title' => 'Edital 1',
            'description' => 'Descrição do Edital 1',
            'date_closure' => '2019-11-30',
            'link' => 'http://www.ifto.edu.br/edital/01',
        ]);
        \App\Entities\Publish::create([
            'title' => 'Edital 2',
            'description' => 'Descrição do Edital 2',
            'date_closure' => '2019-11-30',
            'link' => 'http://www.ifto.edu.br/edital/02',
        ]);
        \App\Entities\Publish::create([
            'title' => 'Edital 3',
            'description' => 'Descrição do Edital 3',
            'date_closure' => '2019-11-30',
            'link' => 'http://www.ifto.edu.br/edital/03',
        ]);
        \App\Entities\Publish::create([
            'title' => 'Edital 4',
            'description' => 'Descrição do Edital 4',
            'date_closure' => '2018-01-30',
            'link' => 'http://www.ifto.edu.br/edital/04',
        ]);
        \App\Entities\Publish::create([
            'title' => 'Edital 5',
            'description' => 'Descrição do Edital 5',
            'date_closure' => '2018-01-30',
            'link' => 'http://www.ifto.edu.br/edital/05',
        ]);
        \App\Entities\Publish::create([
            'title' => 'Edital 6',
            'description' => 'Descrição do Edital 6',
            'date_closure' => '2018-01-30',
            'link' => 'http://www.ifto.edu.br/edital/06',
        ]);
        \App\Entities\Publish::create([
            'title' => 'Edital 7',
            'description' => 'Descrição do Edital 7',
            'date_closure' => '2018-01-30',
            'link' => 'http://www.ifto.edu.br/edital/07',
        ]);
        \App\Entities\Publish::create([
            'title' => 'Edital 8',
            'description' => 'Descrição do Edital 8',
            'date_closure' => '2018-01-30',
            'link' => 'http://www.ifto.edu.br/edital/08',
        ]);


    }
}
