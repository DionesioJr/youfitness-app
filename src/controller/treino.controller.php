<?php
class Treino
{

    public function aluno()
    {
        $data = $_SESSION;

        $id = $data['user']['id'];

        $result = Alunos::show($id);

        if (empty($result)) {
            Alert::error("Não foi encontrado ficha para este aluno!");
            redirect('aluno');
        }

        $data['treinos'] = Treinos::showAluno($id);

        $data['aluno'] = Alunos::show($id);



        _Application::applicationView('aluno/ficha', $data);
    }

    public function ficha()
    {
        $data = $_SESSION;

        $id = $_GET['id'];

        $data['treinos'] = Treinos::show($id);
        $data['exercicios'] = Exercicios::showTreino($id);

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

        // treino
        $data['nome'] = trim($_POST['nome']) ?? '';
        $data['alunos_id'] = trim($_POST['alunos_id']) ?? '';
        $treino_id = Treinos::store($data);

        if (empty($treino_id)) {
            Alert::error("Falha ao criar treino!");
        }

        // exercicios

        $data = [];
        $exercicio = $_POST['exercicio'];
        $repeticao = $_POST['repeticao'];
        $peso = $_POST['peso'];


        foreach ($exercicio as $key => $value) {
            $data['treinos_id'] = $treino_id;
            $data['nome'] = $exercicio[$key];
            $data['repeticao'] = $repeticao[$key];
            $data['peso'] = $peso[$key];

            $result = Exercicios::store($data);
            $data = [];
        }


        if (empty($result)) {
            Alert::error("Falha ao adicionar os exercícios!");
        }




        Alert::success("Treino criado com sucesso!");

        redirectBack();
    }

    public function excluir()
    {
        $id = trim($_GET['id']);
        if (empty($id)) {
            redirectBack();
            return false;
        }

        $result = Treinos::destroy($id, $_SESSION['user']['id']);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar o treino!");
        } else {
            Alert::success("Treino apagado com sucesso!");
        }

        redirectBack();
    }
}
