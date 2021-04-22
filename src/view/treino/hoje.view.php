<div class="page-header">
    <div class="row">
        <div class="col">
            <h3>Treino de Hoje</h3>
        </div>
        <div class="row justify-content-end">
            <div class="col">
                <button type="button" class="btn btn-warning" onclick="startTimer();">Iniciar Treino</button>
            </div>
        </div>
    </div>
</div>

<div class="bs-docs-section">

    <div class="row">
        <div class="col-sm-12 text-center">
            <div>

                <h3 class="display-3" id="time_real">00:00:00</h3>
                <input type="hidden" name="time" id="time" value="">
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
                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label" for="customCheck1">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>

                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                                    <label class="custom-control-label" for="customCheck2">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>

                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" checked="">
                                    <label class="custom-control-label" for="customCheck3">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>

                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" checked="">
                                    <label class="custom-control-label" for="customCheck4">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>

                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>

                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>

                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>

                        <tr style="height: 60px;">
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8">Exercício 1</label>
                                </div>
                            </th>
                            <td>3 x 15</td>
                            <td>20 kG</td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-warning btn-lg btn-block">Finalizar Treino</button>
            </div>
        </div>

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    function startTimer() {
        var startTimestamp = moment().startOf("day");
        setInterval(function() {
            startTimestamp.add(1, 'second');
            document.getElementById('time_real').innerHTML =
                startTimestamp.format('HH:mm:ss');
        }, 1000);
    }
</script>