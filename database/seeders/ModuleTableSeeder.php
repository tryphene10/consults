<?php
namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MP 101
        $module = new module();
        $module->name = 'Les normes internationales en matière de management de projet';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }

        $module = new module();
        $module->name = 'Cadre du management de projet/programmes Selon le PMI';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }

        $module = new module();
        $module->name = 'Les 5 groupes de processus du management de projet / programmes';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Les 10 Domaines de connaissance et leur mise en œuvre opérationnelle';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Management de l\'intégration et du contenu d’un projet';
        $module->published = 1;
        $module->formation_id=2;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Planification et Management des délais du projet';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Management des coûts du projet';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Management des risques';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Suivi et évaluation dans les projets';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Management des communications et gestion des parties prenantes';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Management des équipes projets';
        $module->published = 1;
        $module->formation_id=1;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }

        $module = new module();
        $module->name = 'Management des communications et gestion des parties prenantes';
        $module->published = 1;
        $module->formation_id=2;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }
        $module = new module();
        $module->name = 'Management des équipes projets';
        $module->published = 1;
        $module->formation_id=2;
        $module->generateReference();
        $module->generateAlias($module->name);
        if(!$module->save()){
            $this->command->info("Fail Seeded module save:par chèque ");
        }else{
            $this->command->info("Seeded payement method: ". $module->name);
        }


    }
}
