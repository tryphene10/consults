<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Objectif;
class ObjectifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objectif = new Objectif();
        $objectif->name = 'D’utiliser les outils et techniques efficaces de démarrage, de planification, de coûtenance, d’exécution, de suivi-évaluation, clôture des projets techniques avec succès';
        $objectif->published = 1;
        $objectif->formation_id = 1;
        $objectif->generateReference();
        $objectif->generateAlias($objectif->name);
        if(!$objectif->save()){
            $this->command->info("Fail Seeded objectif save:erreur ");
        }else{
            $this->command->info("Seeded objectif: ". $objectif->name);
        }
        $objectif = new Objectif();
        $objectif->name = 'Contribuer à l’optimisation des performances atteintes par les projets techniques/industriels de leurs organisations,';
        $objectif->formation_id = 1;
        $objectif->published = 1;
        $objectif->generateReference();
        $objectif->generateAlias($objectif->name);
        if(!$objectif->save()){
            $this->command->info("Fail Seeded objectif save:erreur ");
        }else{
            $this->command->info("Seeded objectif: ". $objectif->name);
        }
    }
}
