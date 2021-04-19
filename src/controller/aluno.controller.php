<?php
class Aluno
{

    public function index()
    {
        $data = $_SESSION;
        _Application::applicationView('aluno/aluno', $data);
    }

    public function cadastro()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastro de Aluno";
        $data['button_submit'] = "Cadastrar novo aluno";
        $data['action'] = BASE_URL . '/aluno/save';
        _Application::applicationView('aluno/alunoform', $data);
    }

    public function editar()
    {
        $data = $_SESSION;
        $data['title'] = "Editar aluno";
        $data['button_submit'] = "Cadastrar novo aluno";
        $data['action'] = BASE_URL . '/aluno/edit';
        _Application::applicationView('aluno/alunoform', $data);
    }

    public function save()
    {
        redirect('aluno');
    }
}
