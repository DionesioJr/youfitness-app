    <div class="page-header">
        <div class="row">
            <div class="col-lg-11">
                <h3><?php echo $data['title'] ?></h3>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">
                <a href="javascript:history.back()" type="button" class="btn btn-secondary">Voltar</a>
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
                                    <label for="Nome Completo">Nome do treino</label>
                                    <input type="text" class="form-control" name="nome" required>
                                    <input type="hidden" name="alunos_id" value="<?php echo $_GET['aluno_id']; ?>">
                                </div>
                            </div>
                        </fieldset>
                        <hr>

                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="">Exercício</label>
                                    <input type="text" class="form-control" id="exercicio" placeholder="Exercício 1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Repetição</label>
                                    <input type="text" class="form-control" id="repeticao" placeholder="3 x 15">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">peso</label>
                                    <input type="text" class="form-control" id="peso" placeholder="10">
                                </div>
                            </div>


                            <div>
                                <button type="button" class="btn btn-primary" onclick="adicionarExecicio()">
                                    Adicionar exercícios
                                </button>
                            </div>
                        </fieldset>

                        <div class="bs-docs-section">

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="bs-component">

                                        <table class="table">

                                            <tbody id="table-exercicio">

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

    <script>
        function adicionarExecicio() {

            var exercicio = $("#exercicio").val();
            var repeticao = $("#repeticao").val();
            var peso = $("#peso").val();
            var id_tr = Math.floor((Math.random() * 999999) + 1);

            if (exercicio === "" || repeticao === "" || peso === "") {
                alert("Existe campos que precisa se preenchidos");
                return false;
            }

            var input = "<input type=\"hidden\" name=\"exercicio[]\" value=\"" + exercicio + "\">" +
                "<input type=\"hidden\" name=\"repeticao[]\" value=\"" + repeticao + "\">" +
                "<input type=\"hidden\" name=\"peso[]\" value=\"" + peso + "\">" + "";

            var html = "<tr id=\"" + id_tr + "\" style=\"height: 60px;\">" + input +
                "<td><label>" + exercicio + "</label></td>" +
                "<td>" + repeticao + "</td>" +
                "<td>" + peso + " kg</td>" +
                "<td width=\"10 px \"> <a href=\"# \" onclick=\"removerExecicio('" + id_tr + "');\" type = \"button \" class=\"btn btn-outline-danger btn-sm \"><i class=\"far fa-trash-alt \"></i></a></td>" +
                "</tr>";

            $("#table-exercicio").append(html);

        }

        function removerExecicio(id) {
            $("#" + id).remove();
        }
    </script>