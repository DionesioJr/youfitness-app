<?php
class Treino
{

    public function index()
    {
        $data = $_SESSION;
        _Application::applicationView('treino/treino', $data);
    }

    public function hoje()
    {
        $data = $_SESSION;
        _Application::applicationView('treino/hoje', $data);
    }

    public function ficha()
    {
        $data = $_SESSION;
        _Application::applicationView('treino/ficha', $data);
    }

    public function cadastro()
    {
        $data = $_SESSION;
        $data['title'] = "Novo Treino";
        $data['button_submit'] = "Cadastrar novo treino";
        $data['action'] = BASE_URL . '/treino/save';
        _Application::applicationView('treino/form', $data);
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
        $data['nome'] = trim($_POST['nome']) ?? '';
        $data['alunos_id'] = trim($_POST['alunos_id']) ?? '';

        $result = Treinos::store($data);

        if (empty($result)) {
            Alert::error("Falha ao criar treino!");
        } else {
            Alert::success("Treino criado com sucesso!");
        }

        redirectBack();
    }
}
