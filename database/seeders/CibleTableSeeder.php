<?php
namespace Database\Seeders;

use App\Models\Cible;
use Illuminate\Database\Seeder;
//use App\Cible;
class CibleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cible = new Cible();
        $cible->name='Chef de Projet';
        $cible->published = 1;
        $cible->formation_id = 1;
        if (!$cible->save()){
            $this->$this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $cible->name);
        }

        $cible = new Cible();
        $cible->name='Gérant / DG';
        $cible->formation_id = 1;
        $cible->published = 1;
        $cible->generateReference();
        $cible->generateAlias($cible->name);
        if (!$cible->save()){
            $this->$this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $cible->name);
        }
        $cible = new Cible();
        $cible->name='Directeur de Projets';
        $cible->formation_id = 1;
        $cible->published = 1;
        $cible->generateReference();
        $cible->generateAlias($cible->name);
        if (!$cible->save()){
            $this->$this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $cible->name);
        }
        $cible = new Cible();
        $cible->name='Manager';
        $cible->formation_id = 1;
        $cible->published = 1;
        $cible->generateReference();
        $cible->generateAlias($cible->name);
        if (!$cible->save()){
            $this->$this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $cible->name);
        }
    }
}
