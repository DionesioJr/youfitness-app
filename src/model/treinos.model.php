<?php

class Treinos
{

    public function __construct()
    {
    }

    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from treinos");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return $row;
    }

    static public function show($id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from treinos where id = $id");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }

    static public function showAluno($id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from treinos where alunos_id = $id");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return $row;
    }

    static public function store($data)
    {
        global $DB;
        $query = $DB->query("INSERT INTO `treinos` (`nome`, `alunos_id`) 
        VALUES ('{$data['nome']}', '{$data['alunos_id']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `treinos` SET `nome` = '{$data['nome']}', `alunos_id` = '{$data['alunos_id']}'
        WHERE (`id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function destroy($id)
    {
        global $DB;
        $query = $DB->query("DELETE from treinos where id = $id");

        if (empty($query)) {
            return false;
        }
        return true;
    }
}
