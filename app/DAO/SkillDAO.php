<?php

namespace App\DAO;

use App\Database\Database;
use App\Models\Skill;

class SkillDAO implements IDAO
{

    private $connection;

    public function __construct ()
    {
        $this->connection = Database::getConnection();
    }

    public function save ($entidade)
    {
        $query = "
            INSERT INTO skills
                (name)
            VALUES
                (?)
        ";

        $name = $entidade->getName();

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('s', $name);
        $stmt->execute();
    }

    public function update ($entidade)
    {
        $query = "
            UPDATE
                skills
            SET
                name = ?
            WHERE
                id = ?
        ";

        $id = $entidade->getId();
        $name = $entidade->getName();

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('si', $name, $id);
        $stmt->execute();
    }

    public function delete ($id)
    {
        $query = "
            DELETE FROM
                skills
            WHERE
                id = ?
        ";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }

    public function getById ($id)
    {
        $query = "
            SELECT
                *
            FROM
                skills
            WHERE
                id = ?
        ";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $searchSkill = $stmt->get_result();
        $skillData = $searchSkill->fetch_assoc();

        $skill = new Skill();

        $skill->setId($skillData['id']);
        $skill->setName($skillData['name']);

        return $skill;
    }

    public function getAll ()
    {
        $query = "
            SELECT
                *
            FROM
                skills
        ";

        $searchSkills = $this->connection->query($query);
        $skillsData = $searchSkills->fetch_all(MYSQLI_ASSOC);

        $skills = [];

        foreach ($skillsData as $skillData) {
            $skill = new Skill();

            $skill->setId($skillData['id']);
            $skill->setName($skillData['name']);

            $skills[] = $skill;
        }
        
        return $skills;
    }
}