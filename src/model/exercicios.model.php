<?php

class Exercicios
{

    public function __construct()
    {
    }

    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from exercicios");


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
        $query = $DB->query("SELECT * from exercicios where id = $id");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }

    static public function showTreino($id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from exercicios where treinos_id = $id");


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
        $query = $DB->query("INSERT INTO `exercicios` (`nome`, `peso`, `repeticao`) 
        VALUES ('{$data['nome']}', '{$data['peso']}', '{$data['repeticao']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `exercicios` SET `nome` = '{$data['nome']}', `peso` = '{$data['peso']}'
        WHERE (`treinos_id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function destroy($id)
    {
        global $DB;
        $query = $DB->query("DELETE from exercicios where id = $id");

        if (empty($query)) {
            return false;
        }
        return true;
    }
}
