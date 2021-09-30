<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $user = User::find(1);

        $formations = $user->formations()
            ->visible()
            ->orderBy('from', 'DESC')
            ->get();

        $professional_experiences = $user->professionalExperiences()
            ->visible()
            ->orderBy('from', 'DESC')
            ->get();

        $abilities = $user->abilities()
            ->visible()
            ->orderBy('rate', 'DESC')
            ->orderBy('language', 'ASC')
            ->get();

        $languages = $user->languages()
            ->visible()
            ->orderBy('rate', 'DESC')
            ->orderBy('language', 'ASC')
            ->get();

        $tools = $user->tools()
            ->visible()
            ->orderBy('rate', 'DESC')
            ->orderBy('tool', 'ASC')
            ->get();

        return view('home')->with([
            'user' => $user,
            'formations' => $formations,
            'professional_experiences' => $professional_experiences,
            'abilities' => $abilities,
            'languages' => $languages,
            'tools' => $tools,
        ]);
    }
}
