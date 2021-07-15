<?php

namespace Database\Seeders;

use App\Models\ProfessionalExperience;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfessionalExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ProfessionalExperience::exists()) {
            return;
        }

        $user = User::firstWhere('email', 'jeremy.thiou@gmail.com');

        ProfessionalExperience::create([
            'user_id' => $user->id,
            'type' => 'Apprentissage',
            'title' => 'Développeur Web',
            'company' => 'Garde Périscolaire',
            'from' => '2016-09-01',
            'to' => '2017-08-01',
            'description' => "<p>Apprentissage de développeur web pendant la deuxième année de DUT Informatique. Développement des projets informatiques de l'entreprise. Refonte totale du site internet de l'entreprise afin d'intégrer la possibilité de se présenter par vidéo sur le site. Pour ce projet, j'ai commencé par penser au design du nouveau site. J'ai ensuite créer une nouvelle base de donnée pour enfin passer au développement Front-end et Back-end du site. </p>"
                . "<p>En plus du développement du nouveau site, j'avais pour tâches la maintenance de l'intranet et de l'emailling. J'ai aussi été amené à restaurer le système du serveur de l'entreprise depuis une image système.</p>",
            'locality' => 'Paris',
            'country' => 'France',
        ]);

        ProfessionalExperience::create([
            'user_id' => $user->id,
            'type' => "Stage de fin d'étude",
            'title' => 'Développeur Web',
            'link' => 'https://www.bureauweb.ch/',
            'company' => 'Bureau Web',
            'from' => '2018-04-01',
            'to' => '2018-06-01',
            'description' => "<p>Stage au sein de l'équipe de développement de sites web. Le but était de participer au développement de plusieurs projets Wordpress sur-mesure. Le développement d'une application Electron en utilisant ReactJS m'a été confié pendant ce stage. Cette application permet de surveiller le bon état d'une liste de 150 sites web.</p>"
                . "<p>Je garde une très bonne expérience de ce stage. À la fin de celui-ci, je suis retourné en France pour valider mon diplôme et quelques mois plus tard, j'ai décidé de postuler dans cette même entreprise pour un poste à temps plein. </p>",
            'locality' => 'Vevey',
            'country' => 'Suisse',
        ]);

        ProfessionalExperience::create([
            'user_id' => $user->id,
            'type' => 'Fulltime',
            'title' => 'Développeur Web',
            'link' => 'https://www.bureauweb.ch/',
            'company' => 'Bureau Web',
            'from' => '2018-11-01',
            'to' => '2019-02-01',
            'description' => "Développeur, membre de l'équipe de développement de l'agence Bureau Web en vue de réaliser des sites internet Wordpress et des applications sur-mesure selon les besoins. Pendant cette collaboration, j'avais pour tâches le développement des parties Front-end et Back-end des projets Wordpress depuis des maquettes Sketch. J'étais aussi amené à faire des reviews et des validations des tâches effectuées par mes collègues développeurs. Je participais aussi au découpage des tâches de certains projets à réaliser.",
            'locality' => 'Vevey',
            'country' => 'Suisse',
        ]);

        ProfessionalExperience::create([
            'user_id' => $user->id,
            'type' => 'Fulltime',
            'title' => 'Développeur Web',
            'link' => 'https://www.devfactory.ch/',
            'company' => 'Devfactory',
            'from' => '2020-10-01',
            'description' => "<p>Développeur web au sein de l'agence Devfactory. Mes principales tâches sont:</p>"
                . "<ul>"
                . "<li>Développement de projets Laravel</li>"
                . "<li>Développement de projets Drupal (7/8/9)</li>"
                . "<li>Création d'applications web et mobiles vue.js</li>"
                . "<li>Création de services backend pour ces applications web</li>"
                . "<li>Maintenances et réparations des projets existants</li>"
                . "</ul>",
            'locality' => 'Lausanne',
            'country' => 'Suisse',
        ]);
    }
}
