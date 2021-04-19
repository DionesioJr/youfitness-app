    <div class="page-header">
        <div class="row">
            <div class="col-lg-11">
                <h3><?php echo $data['title'] ?></h3>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">
                <a href="<?php echo BASE_URL; ?>/aluno" type="button" class="btn btn-secondary">Voltar</a>
            </div>

        </div>
    </div>

    <div class=" bs-docs-section">

        <div class="row">
            <div class="col-lg-12">

                <div class="bs-component">


                    <form action="<?php echo $data['action']; ?>" method="post">

                        <h4>Dados Pessoais</h4>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="Nome Completo">Nome Completo</label>
                                <input type="text" class="form-control" id="" placeholder="João Alves">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Nome Completo">Idade</label>
                                <input type="number" class="form-control" id="" placeholder="18">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Nome Completo">Peso</label>
                                <input type="number" class="form-control" id="" placeholder="70">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Nome Completo">Altura</label>
                                <input type="number" class="form-control" id="" placeholder="188">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEstado">Sexo</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <br>
                        <h4>Dados da Conta</h4>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Senha</label>
                                <input type="password" class="form-control" id="" placeholder="Senha">
                            </div>
                        </div>

                        <br>
                        <br>
                        <h4>Endereço</h4>
                        <hr>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo $data['button_submit'] ?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>