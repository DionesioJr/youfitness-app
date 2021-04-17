<?php
class Aluno
{

    public function index()
    {

        $data = $_SESSION;
        _Application::applicationView('aluno/aluno', $data);
        echo "aqui";
    }
}
