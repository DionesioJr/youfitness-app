<?php
class Home
{

    static public function index()
    {

        if ($_SESSION['user']['tipo'] == 1) {
            redirect('treino/hoje');
        }

        redirect('aluno');
    }
}
