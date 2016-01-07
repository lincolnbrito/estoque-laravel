<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::insert('insert into produtos (nome, quantidade, valor, descricao)
			values(?, ?, ?, ?)',
		array('Geladeira', 2, 900.00, 'Side by Side com gelo na porta'));

		DB::insert('insert into produtos (nome, quantidade, valor, descricao)
			values(?, ?, ?, ?)',
			array('Fogão', 5, 950.00, 'Painel automático e forno elétrico'));

		DB::insert('insert into produtos (nome, quantidade, valor, descricao)
			values(?, ?, ?, ?)',
			array('Microondas', 1, 520.00, 'Manda SMS quando termina de esquentar'));
	}

}
