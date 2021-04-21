    <div class="page-header">
        <div class="row">
            <div class="col-lg-11">
                <h3 id="buttons">Alunos</h3>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">
                <a href="<?php echo BASE_URL; ?>/aluno/cadastro" type="button" class="btn btn-primary">Adicionar</a>
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
                                <th scope="col">Matricula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1092371</td>
                                <td>João Pedro</td>
                                <td>18</td>
                                <td>Ativo</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 25px, 0px);" x-out-of-boundaries="">
                                            <a href="https://hookmedia.com.br/app/profile/configuration/?id=4" target="_blank" class="dropdown-item">
                                                Gerenciar
                                            </a>
                                            <hr>

                                            <a href="https://hookmedia.com.br/app/profile/updatestatus/?status=0&amp;profile_id=4" class="dropdown-item">
                                                Desativar
                                            </a>

                                            <a href="https://hookmedia.com.br/app/profile/updatestatus/?status=1&amp;profile_id=4" class="dropdown-item">
                                                Ativar
                                            </a>

                                        </div>
                                    </div>

                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>