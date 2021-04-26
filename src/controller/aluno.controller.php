<?php
class Aluno
{


    public function index()
    {
        $data = $_SESSION;
        $data['alunos'] = Alunos::index();

        if ($_SESSION['user']['tipo'] == 1) {
            redirect('atreino/hoje');
        }

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


        $data['aluno']['id'] = '';
        $data['aluno']['nome'] = '';
        $data['aluno']['idade'] = '';
        $data['aluno']['peso'] = '';
        $data['aluno']['altura'] = '';
        $data['aluno']['sexo'] = '';
        $data['aluno']['email'] = '';
        $data['aluno']['senha'] = '';
        $data['aluno']['tipo'] = '';
        $data['aluno']['status'] = '';

        _Application::applicationView('aluno/form', $data);
    }

    public function editar()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;

        $data['aluno']['id'] = '';
        $data['aluno']['nome'] = '';
        $data['aluno']['idade'] = '';
        $data['aluno']['peso'] = '';
        $data['aluno']['altura'] = '';
        $data['aluno']['sexo'] = '';
        $data['aluno']['email'] = '';
        $data['aluno']['senha'] = '';
        $data['aluno']['tipo'] = '';
        $data['aluno']['status'] = '';
        $data['aluno'] = Alunos::show($id);

        $data['title'] = "Editar aluno";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/aluno/edit';
        _Application::applicationView('aluno/form', $data);
    }

    public function save()
    {
        $data['nome'] = trim($_POST['nome']) ?? '';
        $data['idade'] = trim($_POST['idade']) ?? '';
        $data['peso'] = trim($_POST['peso']) ?? '';
        $data['altura'] = trim($_POST['altura']) ?? '';
        $data['sexo'] = trim($_POST['sexo']) ?? '';
        $data['email'] = trim($_POST['email']) ?? '';
        $data['senha'] = md5(trim($_POST['senha'])) ?? '';
        $data['tipo'] = trim($_POST['tipo']) ?? '';
        $data['status'] = trim($_POST['status']) ?? '';

        $result = Alunos::store($data);

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
        }

        redirect('aluno');
    }

    public function update()
    {
        $data['nome'] = trim($_POST['nome']) ?? '';
        $data['idade'] = trim($_POST['idade']) ?? '';
        $data['peso'] = trim($_POST['peso']) ?? '';
        $data['altura'] = trim($_POST['altura']) ?? '';
        $data['sexo'] = trim($_POST['sexo']) ?? '';
        $data['email'] = trim($_POST['email']) ?? '';
        $data['senha'] = md5(trim($_POST['senha'])) ?? '';
        $data['tipo'] = trim($_POST['tipo']) ?? '';
        $data['status'] = trim($_POST['status']) ?? '';

        $result = Alunos::store($data);

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
        }

        redirect('aluno');
    }

    public function excluir()
    {
        $id = trim($_GET['id']);
        $result = Alunos::destroy($id);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar a conta!");
        } else {
            Alert::success("Usuario apagado com sucesso!");
        }

        redirect('aluno');
    }


    public function visualizar()
    {

        $id = trim($_GET['id']);
        $result = Alunos::show($id);

        // if (empty($result)) {
        //     Alert::error("Falha ao tentar apagar a conta!");
        // } else {
        //     Alert::success("Usuario apagado com sucesso!");
        // }

        redirect('aluno');
    }
}
