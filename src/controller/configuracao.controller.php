<?php
class Configuracao
{

    public function index()
    {
        $this->conta();
    }

    public function plano()
    {
        $data = $_SESSION;
        _Application::applicationView('configuracao/plano', $data);
    }
}
