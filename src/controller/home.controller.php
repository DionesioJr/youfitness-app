<?php
class Home
{

    static public function index()
    {
        $data = $_SESSION;
        _Application::applicationView('aluno/aluno', $data);
    }
}
