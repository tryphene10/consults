<?php
namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Seeder;
//use App\Formation;
class FormationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formation = new Formation();
        $formation->categorie_id=1;
        $formation->user_id=1;
        $formation->name='Management des projets Techniques et Industriels selon la norme ISO 21500 et les standards du PMI	';
        $formation->reference='MP 101';
        $formation->duree='05';
        $formation->cout=550000;
        $formation->published=1;
        $formation->generateReference();
        $formation->generateAlias($formation->name);
        if (!$formation->save()){
            $this->$this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $formation->name);
        }


        $formation = new Formation();
        $formation->categorie_id=2;
        $formation->user_id=1;
        $formation->name='vcxvxcv des projets Techniques et Industriels selon la norme ISO 21500 et les standards du PMI	';
        $formation->reference='MP 102';
        $formation->duree= '06';
        $formation->cout= 550000;
        $formation->published=1;
        $formation->generateReference();
        $formation->generateAlias($formation->name);
        if (!$formation->save()){
            $this->$this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $formation->name);
        }
    }
}
