<?php
class Aluno
{

    public function index()
    {
        $data = $_SESSION;
        $data['alunos'] = Alunos::index();

        if (empty($data['alunos'])) {
            _Application::applicationView('aluno/empty', $data);
        } else {
            _Application::applicationView('aluno/aluno', $data);
        }
    }

    public function cadastro()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastro de Aluno";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/aluno/save';
        _Application::applicationView('aluno/form', $data);
    }

    public function editar()
    {
        $data = $_SESSION;
        $data['title'] = "Editar aluno";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/aluno/edit';
        _Application::applicationView('aluno/form', $data);
    }

    public function save()
    {
        redirect('aluno');
    }
}
