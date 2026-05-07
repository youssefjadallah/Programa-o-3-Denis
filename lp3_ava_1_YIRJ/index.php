<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">



            <form action="respQ1.php" method="POST" class="col-4">
                <h2>avaliação - Questão 1</h2>

                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="txtNome" name="campoNome" required>
                </div>

                <div class="mb-3">
                    <label for="txtEmail" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="txtEmail" name="campoEmail" required>
                </div>

                <div class="mb-3">
                    <label for="Perfil">Perfil do participante: </label>
                    <select class="form-select" id="CboCliente" name="Perfil" required>
                        <option value="">Selecione uma opção</option>
                        <option value="Estudante">Estudante</option>
                        <option value="Professor">Professor</option>
                        <option value="Competidor">Competidor</option>
                    </select>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" value="p">
                    <label class="form-check-label" for="radioDefault1">
                        p
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" value="m">
                    <label class="form-check-label" for="radioDefault2">
                        m
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" value="g">
                    <label class="form-check-label" for="radioDefault2">
                        g
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" value="gg" checked>
                    <label class="form-check-label" for="radioDefault3">
                        gg
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="desenvolvimento com laravel" id="adc-1" name="Workshops[]">
                    <label class="form-check-label" for="adc-1">
                        desenvolvimento com laravel
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Estilização em bootstrap" id="adc-3" name="Workshops[]">
                    <label class="form-check-label" for="adc-3">
                        Estilização em bootstrap
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Lógica com javascript" id="adc-4" name="Workshops[]">
                    <label class="form-check-label" for="adc-4">
                        Lógica com javascript
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="História da computação" id="adc-2" name="Workshops[]">
                    <label class="form-check-label" for="adc-2">
                        História da computação
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>
            </form>





            <form action="respQ2.php" method="GET" class="col-4">
                <h2>Avaliação - Questão 2</h2>
                <p>Informe o nome  da figura:</p>
                <div class="mb-3">
                    <label for="txtNumero" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="txtNumero" name="campofigura">
                </div>
                <button type="submit" class="btn btn-success">Pesquisar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>
            </form>




        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>