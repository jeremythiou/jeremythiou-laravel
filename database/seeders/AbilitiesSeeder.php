<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\User;
use Illuminate\Database\Seeder;

class AbilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Ability::exists()) {
            return;
        }

        $user = User::firstWhere('email', 'jeremy.thiou@gmail.com');

        $abilities = collect([
            ["JavaScript", 5],
            ["Laravel", 5],
            ["PHP", 5],
            ["Vue.js", 5],
            ["Blade", 5],
            ["Bootstrap", 4],
            ["CI/CD", 4],
            ["Drupal", 4],
            ["JQuery", 4],
            ["MySQL", 4],
            ["ReactJS", 4],
            ["SASS/SCSS", 4],
            ["SCRUM", 4],
            ["Symfony", 4],
            ["TypeScript", 4],
            ["Wordpress", 4],
            ["C#", 3],
            ["Java", 3],
            ["PL/SQL", 3],
            ["XML", 3],
            ["Angular", 2],
            ["BEM", 2],
            ["C", 2]
        ]);

        $abilities->each(
            fn ($ability) => Ability::create([
                'user_id' => $user->id,
                'language' => $ability[0],
                'rate' => $ability[1],
            ])
        );
    }
}
