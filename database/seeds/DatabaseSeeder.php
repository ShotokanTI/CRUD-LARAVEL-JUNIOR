<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
		// Estados
        $this->call([EstadosTableSeeder::class]);

        // Cidades
        $this->call('CidadesAcreSeeder');
        $this->call('CidadesAlagoasSeeder');
        $this->call('CidadesAmapaSeeder');
        $this->call('CidadesAmazonasSeeder');
        $this->call('CidadesBahiaSeeder');
        $this->call('CidadesCearaSeeder');
        $this->call('CidadesDistritoFederalSeeder');
        $this->call('CidadesEspiritoSantoSeeder');
        $this->call('CidadesGoiasSeeder');
        $this->call('CidadesMaranhaoSeeder');
        $this->call('CidadesMatoGrossoSeeder');
        $this->call('CidadesMatoGrossoDoSulSeeder');
        $this->call('CidadesMinasGeraisSeeder');
        $this->call('CidadesParaSeeder');
        $this->call('CidadesParaibaSeeder');
        $this->call('CidadesParanaSeeder');
        $this->call('CidadesPernambucoSeeder');
        $this->call('CidadesPiauiSeeder');
        $this->call('CidadesRioDeJaneiroSeeder');
        $this->call('CidadesRioGrandeDoNorteSeeder');
        $this->call('CidadesRioGrandeDoSulSeeder');
        $this->call('CidadesRondoniaSeeder');
        $this->call('CidadesRoraimaSeeder');
        $this->call('CidadesSantaCatarinaSeeder');
        $this->call('CidadesSaoPauloSeeder');
        $this->call('CidadesSergipeSeeder');
        $this->call('CidadesTocantinsSeeder');
    }
}
