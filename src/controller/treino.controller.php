<?php
class Treino
{

    public function index()
    {
        $data = $_SESSION;
        _Application::applicationView('treino/treino', $data);
    }

    public function ficha()
    {
        $data = $_SESSION;
        _Application::applicationView('treino/ficha', $data);
    }

    public function cadastro()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastro de Aluno";
        $data['button_submit'] = "Cadastrar novo aluno";
        $data['action'] = BASE_URL . '/aluno/save';
        _Application::applicationView('aluno/form', $data);
    }

    public function editar()
    {
        $data = $_SESSION;
        $data['title'] = "Editar aluno";
        $data['button_submit'] = "Cadastrar novo aluno";
        $data['action'] = BASE_URL . '/aluno/edit';
        _Application::applicationView('aluno/form', $data);
    }

    public function save()
    {
        redirect('aluno');
    }
}
