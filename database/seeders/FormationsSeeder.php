<?php

namespace Database\Seeders;

use App\Models\Formation;
use App\Models\User;
use Illuminate\Database\Seeder;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Formation::exists()) {
            return;
        }

        $user = User::firstWhere('email', 'jeremy.thiou@gmail.com');

        Formation::create([
            'user_id' => $user->id,
            'name' => 'Baccalauréat - Scientifique (Option: ISN)',
            'link' => 'http://www.lyc-doisneau-corbeil.ac-versailles.fr/',
            'location' => 'Lycée Robert Doisneau',
            'from' => '2012-09-01',
            'to' => '2015-07-01',
            'description' => "J'ai choisi l'option Informatique et Sciences du Numérique (ISN) pour mon Baccalauréat Scientifique. Cette option, qui est une introduction à l'informatique, m'a beaucoup plu. J'ai donc décidé de m'orienter vers une formation DUT Informatique après l'obtention de mon diplôme.",
            'locality' => 'Corbeil-Essonnes',
            'country' => 'France',
        ]);

        Formation::create([
            'user_id' => $user->id,
            'name' => 'Diplôme Universitaire de Technologie - Informatique',
            'link' => 'https://www.iutsf.u-pec.fr/',
            'location' => 'UPEC - IUT Sénart/Fontainebleau',
            'from' => '2015-09-01',
            'to' => '2018-07-01',
            'description' => "Formation sur la conception, le développement et l'administration des sites web, des logiciels et des systèmes d'information correspondant aux besoins des utilisateurs. La formation comprend aussi des cours sur la gestion et l'économie d'entreprise.",
            'locality' => 'Fontainebleau',
            'country' => 'France',
        ]);
    }
}
