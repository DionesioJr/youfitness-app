<?php

class Alunos
{

    public function __construct()
    {
        // $this->item_type = new Ticket();
        // $this->item_model = new TicketModel();
    }

    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from alunos");


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
        $query = $DB->query("SELECT * from alunos where id = $id");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }

    static public function store($data)
    {
        global $DB;
        $query = $DB->query("INSERT INTO `alunos` (`nome`, `idade`, `peso`, `altura`, `sexo`, `email`, `senha`, `tipo`, `status`) 
        VALUES ('{$data['nome']}', '{$data['idade']}', '{$data['peso']}', '{$data['altura']}', '{$data['sexo']}', '{$data['email']}', '{$data['senha']}', '{$data['tipo']}', '{$data['status']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `alunos` SET `nome` = '{$data['nome']}', `idade` = '{$data['idade']}', `peso` = '{$data['peso']}', `altura` = '{$data['altura']}', `sexo` = '{$data['sexo']}', `email` = '{$data['email']}', `senha` = '{$data['senha']}', `tipo` = '{$data['tipo']}', `status` = '{$data['status']}' 
        WHERE (`id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function destroy($id)
    {
        global $DB;
        $query = $DB->query("DELETE from alunos where id = $id");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function login($email, $password)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from alunos where email = '{$email}' AND senha = '{$password}'");

        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }
}
