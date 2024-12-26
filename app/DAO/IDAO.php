<?php

namespace App\DAO;

interface IDAO
{

    public function save($entidade);
    public function update($entidade);
    public function delete($id);
    public function getById($id);
    public function getAll();

}