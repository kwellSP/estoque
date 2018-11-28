<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos (nome,quantidade,valor,descricao) 
        values(?,?,?,?)',array('Geladeira',1,10.00,'Side by Side com gela na porta'));
        
        DB::insert('insert into produtos (nome,quantidade,valor,descricao) 
        values(?,?,?,?)',array('Fogão',1,10.00,'Painel Automático e Forno Elétrico'));
        
        DB::insert('insert into produtos (nome,quantidade,valor,descricao) 
        values(?,?,?,?)',array('Microondas',1,10.00,'Manda SMS quando termina de esquentar'));
        
        
    }
}
