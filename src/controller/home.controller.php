<?php
class Home
{

    static public function index()
    {

        if (empty($_SESSION['login'])) {
            return false;
        }

        if ($_SESSION['user']['tipo'] == 1) {
            redirect('treino/aluno');
        } else {
            redirect('aluno');
        }
    }
}
