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

        return view('home')->with([
            'user' => $user,
            'formations' => $formations,
            'professional_experiences' => $professional_experiences,
        ]);
    }
}
