<?php

namespace App\Controllers;

use App\DAO\SkillDAO;

class HomeController
{

    public function index ()
    {
        $skillDAO = new SkillDAO();
        $skills = $skillDAO->getAll();

        return view('home', [
            "skills" => $skills
        ]);
    }

}