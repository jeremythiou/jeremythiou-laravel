<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Language::exists()) {
            return;
        }

        $user = User::firstWhere('email', 'jeremy.thiou@gmail.com');

        $languages = collect([
            ["Fran&#231;ais - Langue maternelle", 5],
            ["Anglais - Niveau C1, TOEIC: 825", 4],
            ["Espagnol - Niveau scolaire", 2],
            ["Polonais - Notions", 1]
        ]);

        $languages->each(fn($language) => Language::create([
                'user_id' => $user->id,
                'language' => $language[0],
                'rate' => $language[1],
            ])
        );
    }
}
