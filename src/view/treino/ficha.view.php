<div class="page-header">
    <div class="row">
        <div class="col">
            <h3><?php echo $data['treinos']['nome']; ?></h3>
        </div>
        <div class="row justify-content-end">
            <div class="col">
                <a href="javascript:history.back()" type="button" class="btn btn-warning">Voltar</a>
            </div>
        </div>
    </div>
</div>

<div class="bs-docs-section">

    <div class="row">
        <div class="col-lg-12">

            <div class="bs-component">

                <table class="table ">

                    <tbody>

                        <?php

                        foreach ($data['exercicios'] as $key => $value) {

                        ?>
                            <tr style="height: 60px;">
                                <th><?php echo $value['nome'] ?></th>
                                <td><?php echo $value['repeticao'] ?></td>
                                <td><?php echo $value['peso'] ?> kg</td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
                <!-- <button type="button" class="btn btn-warning btn-lg btn-block">Finalizar Treino</button> -->
            </div>
        </div>

    </div>
</div>