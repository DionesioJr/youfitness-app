<?php
class Login
{
    static public function index()
    {

        if (self::isLogged() == true) {
            redirect('dashboard');
        }
        new LoadingView('autenticacao/login');
    }


    static public function logout()
    {
        session_destroy();
        redirect('login');
        return false;
    }


    public function create()
    {
        if (!empty($_POST)) {
            $this->newAccount($_POST);
        }
        $email = '';
        if (isset($_GET['email'])) {
            $email = trim($_GET['email']);
        }
        $data['email'] = $email;

        new LoadingView('autenticacao/cadastro', $data);
    }


    public function recuperar()
    {
        new LoadingView('autenticacao/restaurar');
    }



    static public function isLogged()
    {
        if (isset($_SESSION['login'])  || !empty($_SESSION['login'])) {
            return true;
        } else {
            return false;
        }
    }


    static public function autenticacao($email = false, $password = false)
    {

        if (empty($email) || empty($password)) {
            $email = !empty($_POST['email']) ? trim($_POST['email']) : '';
            $email = strtolower($email);

            $password = !empty($_POST['password']) ? trim($_POST['password']) : '';
        }



        if ($email == 'dionesiojr@gmail.com') {

            $_SESSION['login'] = true;
            $_SESSION['account'] = 1;
            $_SESSION['token'] = 1;

            redirect('aluno');
        } else {
            Alert::info("Falha no Login, verifique sua conta!");
            redirect('login');
        }
    }
}
