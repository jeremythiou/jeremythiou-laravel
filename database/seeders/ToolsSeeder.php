<?php

namespace Database\Seeders;

use App\Models\Tool;
use App\Models\User;
use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Tool::exists()) {
            return;
        }

        $user = User::firstWhere('email', 'jeremy.thiou@gmail.com');

        $tools = collect([
            ["git", 5],
            ["Livewire", 5],
            ["Microsoft Office", 5],
            ["Nova", 5],
            ["npm", 5],
            ["Trello", 5],
            ["Tailwind", 5],
            ["UNIX/Linux, Ubuntu, Debian", 5],
            ["Windows (Vista, 7, 8, 10)", 5],
            ["Composer", 4],
            ["Docker", 4],
            ["Filament", 4],
            ["Grafana", 4],
            ["Photoshop", 4],
            ["Premier Pro", 4],
            ["Sony Vegas Pro", 4],
            ["Unity", 4],
            ["VIM", 4],
            ["VS Code", 4],
            ["SCRUM", 3],
            ["Sentry", 3],
            ["Sketch", 3],
            ["Android", 2],
            ["Modélisation UML", 2],
        ]);

        $tools->each(
            fn ($tool) => Tool::create([
                'user_id' => $user->id,
                'tool' => $tool[0],
                'rate' => $tool[1],
            ])
        );
    }
}
