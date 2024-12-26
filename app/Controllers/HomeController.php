<?php

namespace App\Controllers;

use App\DAO\SkillDAO;
use App\DAO\ProjectDAO;

class HomeController
{

    public function index ()
    {
        $skillDAO = new SkillDAO();
        $skills = $skillDAO->getAll();

        $projectDAO = new ProjectDAO();
        $projects = $projectDAO->get(3);

        return view('home', [
            "skills" => $skills,
            "projects" => $projects
        ]);
    }

}