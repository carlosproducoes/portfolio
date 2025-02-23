<?php

namespace App\DAO;

use App\Database\Database;
use App\Models\Project;

class ProjectDAO implements IDAO
{

    private $connection;

    public function __construct ()
    {
        $this->connection = Database::getConnection();
    }

    public function save ($entidade)
    {
        $query = "
            INSERT INTO projects
                (name, description, image)
            VALUES
                (?, ?, ?, ?)
        ";

        $name = $entidade->getName();
        $description = $entidade->getDescription();
        $image = $entidade->getImage();

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('sss', $name, $description, $image);
        $stmt->execute();
    }

    public function update ($entidade)
    {
        $query = "
            UPDATE
                projects
            SET
                name = ?,
                description = ?,
                image = ?
            WHERE
                id = ?
        ";

        $id = $entidade->getId();
        $name = $entidade->getName();
        $description = $entidade->getDescription();
        $image = $entidade->getImage();

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('sssi', $name, $description, $image, $id);
        $stmt->execute();
    }

    public function delete ($id)
    {
        $query = "
            DELETE FROM
                projects
            WHERE
                id = ?
        ";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }

    public function get ($quantity) {
        $query = "
            SELECT
                *
            FROM
                projects
            LIMIT
                ?
        ";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $quantity);
        $stmt->execute();
        $searchProjects = $stmt->get_result();
        $projectsData = $searchProjects->fetch_all(MYSQLI_ASSOC);

        $projects = [];

        foreach ($projectsData as $projectData) {
            $project = new Project();

            $project->setId($projectData['id']);
            $project->setName($projectData['name']);
            $project->setDescription($projectData['description']);
            $project->setImage($projectData['image']);

            $projects[] = $project;
        }
        
        return $projects;
    }

    public function getById ($id)
    {
        $query = "
            SELECT
                *
            FROM
                projects
            WHERE
                id = ?
        ";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $searchProject = $stmt->get_result();
        $projectData = $searchProject->fetch_assoc();

        $project = new Project();

        $project->setId($projectData['id']);
        $project->setName($projectData['name']);
        $project->setDescription($projectData['description']);
        $project->setImage($projectData['image']);

        return $project;
    }

    public function getAll ()
    {
        $query = "
            SELECT
                *
            FROM
                projects
        ";

        $searchProjects = $this->connection->query($query);
        $projectsData = $searchProjects->fetch_all(MYSQLI_ASSOC);

        $projects = [];

        foreach ($projectsData as $projectData) {
            $project = new Project();

            $project->setId($projectData['id']);
            $project->setName($projectData['name']);
            $project->setDescription($projectData['description']);
            $project->setImage($projectData['image']);

            $projects[] = $project;
        }
        
        return $projects;
    }
}