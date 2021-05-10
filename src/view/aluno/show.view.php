<div class="page-header">
    <div class="row">
        <div class="col">
            <h3><?php echo $data['aluno']['nome']; ?></h3>
        </div>
    </div>
</div>

<br>
<hr>
<br>

<fieldset>
    <legend>Dados do aluno</legend>
    <br>
</fieldset>
<br>
<hr>
<br>


<fieldset>
    <div class="row">
        <div class="col-md-10">
            <h4>Ficha de treinos</h4>
        </div>
        <div class="row justify-content-end">
            <div class="col">
                <a href="<?php echo BASE_URL; ?>/treino/cadastro/?aluno_id=<?php echo $data['aluno']['id']; ?>" type="button" class="btn btn-warning"> Adicionar Treino</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">

            <div class="bs-component">

                <!-- <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start  active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Membros Inferiores</h5>
                            <small>Até 25 de abril de 2021</small> 
                        </div>
                    </a>
                </div>
                <br> -->

                <?php
                foreach ($data['treinos'] as $key => $value) {
                ?>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?php echo $value['nome']; ?></h5>
                            </div>
                        </a>
                    </div> <br>

                <?php
                }
                ?>

            </div>
        </div>

    </div>
</fieldset>