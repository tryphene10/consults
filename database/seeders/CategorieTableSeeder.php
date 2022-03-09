<?php
namespace Database\Seeders;
use App\Models\Categorie;
use Illuminate\Database\Seeder;
//use App\Models\;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = new Categorie();
        $categorie->name = 'MANAGEMENT DES PROJETS';
        $categorie->image = 'success/public/images/mp.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'MANAGEMENT – LEADERSHIP – TEAM BUILDING – EFFICACITE PROFESSIONNELLE';
        $categorie->image = 'success/public/images/teambuilding.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'COMMERCIALES ET MARKETING';
        $categorie->image = 'success/public/images/marketing.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'GESTION DES RESSOURCES HUMAINES';
        $categorie->image = 'success/public/images/grh.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'COMMUNICATION';
        $categorie->image = 'success/public/images/communication.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'QUALITE';
        $categorie->image = 'success/public/images/qua.png';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'SECURITE, ENVIRONNEMENT, QUALITE DE VIE';
        $categorie->image = 'success/public/images/sen.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = ' DEVELOPPEMENT DURABLE';
        $categorie->image = 'success/public/images/dd.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'FORESTERIE ET GESTION DURABLE DES FORETS';
        $categorie->image = 'success/public/images/gdf.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }


        $categorie = new Categorie();
        $categorie->name = 'SECURITE DES HOMMES DES BIENS ET SITES SENSIBLES';
        $categorie->image = 'success/public/images/securite.png';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'PROGRAMME INTERNATIONAL DE RENFORCEMENT DES CAPACITES COMMUNALES ET LOCALES EN AFRIQUE CENTRALE (PIRCCLAC)';
        $categorie->image = 'success/public/images/pircclac.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

        $categorie = new Categorie();
        $categorie->name = 'SOLAIRES ET PHOTOVOLTAÏQUES';
        $categorie->image = 'success/public/images/dd.jpg';
        $categorie->published = 1;
        $categorie->generateReference();
        $categorie->generateAlias($categorie->name);
        if (!$categorie->save()){
            $this->command->info("Fail Seeded categorie: error ");
        }else{
            $this->command->info("Seeded categorie: ". $categorie->name);
        }

    }
}
