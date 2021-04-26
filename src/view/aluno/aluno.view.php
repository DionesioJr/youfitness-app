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
                            <th scope="col" width="8%">Tipo</th>
                            <th width="15%"></th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        foreach ($data['alunos'] as $key => $value) {

                            // validando o status

                            if ($value['status'] == 1) {
                                $value['status_name'] = "Ativo";
                            }
                            if ($value['status'] == 2) {
                                $value['status_name'] = "Pendente";
                            }
                            if ($value['status'] == 0) {
                                $value['status_name'] = "Inativo";
                            }

                            // validando o tipo
                            if ($value['tipo'] == 1) {
                                $value['tipo_name'] = "Aluno";
                            }
                            if ($value['tipo'] == 2) {
                                $value['tipo_name'] = "Administrador";
                            }
                        ?>
                            <tr>
                                <td>
                                    <img class="avatar-img rounded-circle" style="height: 40px;" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="...">
                                    <span style="margin-left: 10px;"> <?php echo $value['nome']; ?></span>
                                </td>
                                <td><?php echo $value['idade']; ?></td>
                                <td><span class="badge badge-success"><?php echo $value['status_name']; ?></span></td>
                                <td><span class="badge badge-info"><?php echo $value['tipo_name']; ?></span></td>
                                <td class="text-right">
                                    <a href="<?php echo BASE_URL; ?>/aluno/visualizar/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-external-link-alt"></i></a>
                                    <a href="<?php echo BASE_URL; ?>/aluno/editar/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i></a>
                                    <a href="#" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#excluir-modal"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>



                        <?php

                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="excluir-modal" tabindex="-1" role="dialog" aria-labelledby="excluir-modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Você quer deletar este aluno ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="col-sm-12 text-center">

                            <p>Atenção! Ao excluir todos os dados serão apagados.</p>

                            <br />
                            <img src="<?php echo BASE_URL; ?>/assets/img/illustration/undraw_warning_cyit.svg" width="200px" class="img-responsive" alt="">
                            <br />
                            <br />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <a href="<?php echo BASE_URL; ?>/aluno/excluir/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-danger">Sim, deletar aluno</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>