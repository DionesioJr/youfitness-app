    <div class="page-header">
        <div class="row">
            <div class="col-lg-11">
                <h3><?php echo $data['title'] ?></h3>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">
                <a href="<?php echo BASE_URL; ?>/aluno/visualizar/?id=<?php echo $_GET['aluno_id']; ?>" type="button" class="btn btn-secondary">Voltar</a>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newExercicio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newExercicioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newExercicioLabel">Adicionar Novo Exercício</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <fieldset>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="">Exercício</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Repetição</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Carga</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>

                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Adicionar</button>
                </div>

            </div>
        </div>
    </div>

    <div class=" bs-docs-section">

        <div class="row">
            <div class="col-lg-12">

                <div class="bs-component">

                    <form action="<?php echo $data['action']; ?>" method="POST">

                        <fieldset>
                            <div class="form-row">

                                <div class="form-group col-md-8">
                                    <label for="Nome Completo">Nome to treino</label>
                                    <input type="text" class="form-control" name="nome" required>
                                    <input type="hidden" class="form-control" name="alunos_id" value="<?php echo $_GET['aluno_id']; ?>" required>
                                    <div class=""><br>

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newExercicio">
                                            Adicionar exercicios
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="bs-docs-section">

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="bs-component">

                                        <table class="table ">

                                            <tbody>
                                                <tr style="height: 60px;">

                                                    <td>
                                                        <label>Exercício 1</label>
                                                    </td>
                                                    <td>3 x 15</td>
                                                    <td>20 kG</td>
                                                    <td width="10px">
                                                        <a href="#" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#excluir-modal"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                                <tr style="height: 60px;">
                                                    <td>
                                                        <label>Exercício 1</label>
                                                    </td>
                                                    <td>3 x 15</td>
                                                    <td>20 kG</td>
                                                    <td width="10px">
                                                        <a href="#" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#excluir-modal"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-warning"><?php echo $data['button_submit'] ?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>