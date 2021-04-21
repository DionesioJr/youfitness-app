<?php

class Alunos
{

    public function __construct()
    {
        // $this->item_type = new Ticket();
        // $this->item_model = new TicketModel();
    }

    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from alunos");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return $row;
    }

    static public function show($id)
    {
    }

    static public function store($data)
    {
        "INSERT INTO `youfitness`.`alunos` (`nome`, `idade`, `peso`, `altura`, `sexo`, `email`, `senha`, `tipo`) VALUES ('Dionésio Guerra', '27', '77', '180', '1', 'dionesiojr@gmail.com', '', '1');";
    }

    static public function update($data)
    {
    }

    static public function destroy($id)
    {
    }
}
