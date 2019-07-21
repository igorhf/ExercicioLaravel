<?php

use Illuminate\Database\Seeder;

class clienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$dados = [
    		'nome'=>'igorhf',
    		'idade'=>'0000-1111'
    	];
        DB::table('clientes')->insert($dados);
        
    }
}
