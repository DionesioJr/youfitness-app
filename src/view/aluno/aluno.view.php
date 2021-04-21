<div class="page-header">
    <div class="row">
        <div class="col">
            <h3>Alunos</h3>
        </div>
        <div class="row justify-content-end">
            <div class="col">
                <a href="<?php echo BASE_URL; ?>/aluno/cadastro" type="button" class="btn btn-warning">Adicionar</a>
            </div>
        </div>
    </div>
</div>

<div class="bs-docs-section">

    <div class="row">
        <div class="col-lg-12">

            <div class="bs-component">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope=" col" width="15%">Idade</th>
                            <th scope="col" width="8%">Status</th>
                            <th width="15%"></th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        foreach ($data['alunos'] as $key => $value) {
                        ?>
                            <tr>
                                <td>
                                    <img class="avatar-img rounded-circle" style="height: 40px;" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="...">
                                    <span style="margin-left: 10px;"> <?php echo $value['nome']; ?></span>
                                </td>
                                <td><?php echo $value['idade']; ?></td>
                                <td><span class="badge badge-success"><?php echo $value['status']; ?></span></td>
                                <td class="text-right">
                                    <a href="<?php echo BASE_URL; ?>/aluno/visualizar/<?php echo $value['id']; ?>" type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-external-link-alt"></i></a>
                                    <a href="<?php echo BASE_URL; ?>/aluno/editar/<?php echo $value['id']; ?>" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i></a>
                                    <a href="<?php echo BASE_URL; ?>/aluno/excluir/<?php echo $value['id']; ?>" type="button" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>

                        <?php

                        }

                        ?>




                    </tbody>
                </table>



            </div>
        </div>

    </div>
</div>