<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteContato = new SiteContato();
        $siteContato->nome = 'Sistema SG';
        $siteContato->telefone = '(11) 91234-5689)';
        $siteContato->email = 'contato@sg.com.br';
        $siteContato->motivo_contato = 1;
        $siteContato->mensagem = 'Seja bem vindo ao sistema Super Gestão';
        $siteContato->save();
    }
}
