<?php

use Illuminate\Database\Seeder;

class OrcamentoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Orcamento', 10)->create();
    }
}
