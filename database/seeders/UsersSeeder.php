<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::exists()) {
            return;
        }

        User::create([
            'first_name' => 'Jérémy',
            'last_name' => 'Thiou',
            'email' => 'jeremy.thiou@gmail.com',
            'password' => bcrypt('jeremy'),
            'birthdate' => Carbon::parse('27.07.1997'),
            'locality' => 'Lausanne',
            'county' => 'VD',
            'country' => 'Suisse',
            'about' => "Je suis capable de développer des applications web <strong>Laravel</strong> et <strong>VueJS</strong>. La bonne structuration et l'ordre dans mon code sont des points importants pour moi. J'aime passer du temps à optimiser mes applications afin de livrer des projets d'excellente qualité.",
        ]);
    }
}
