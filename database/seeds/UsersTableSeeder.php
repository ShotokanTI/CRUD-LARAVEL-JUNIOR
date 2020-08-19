<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contrato')->insert([
            'cnpj' => '95.819.744/0001-49',
            'razao_social' => 'Matheus e Ian Publicidade e Propaganda Ltda',
            'nome_fantasia' => 'Publicidade e Propaganda Ltda',
            'email' => 'matheusbny@hotmail.com',
            'in_User' => 'primeiro usuario',
            'logomarca' => 'oi.jpg',
            'status' => '0',
        ]);
    }
}
