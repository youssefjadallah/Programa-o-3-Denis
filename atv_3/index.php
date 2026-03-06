<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LP3 Aula 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <h1>LP3 Aula 6</h1>
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h1>Calcular IMC</h1>

        <form action="IMC.php" method="post">

          <div class="mb-3">
            <label for="peso" class="form-label">Peso (kg)</label>
            <input type="number" step="0.01" class="form-control" id="peso" name="txtpeso">
            <div class="form-text">Digite seu peso</div>
          </div>

          <div class="mb-3">
            <label for="altura" class="form-label">Altura (m)</label>
            <input type="number" step="0.01" class="form-control" id="altura" name="txtaltura">
            <div class="form-text">Digite sua altura</div>
          </div>

          <button type="submit" class="btn btn-success">Enviar</button>
          <button type="reset" class="btn btn-warning">Limpar campos</button>

        </form>
      </div>


      <div class="col-md-4">
        <h1>Sistema de Faturamento de Locadora de Veículos</h1>

        <form action="Faturamento.php" method="post">

          <div class="mb-3">
            <label for="dias" class="form-label">Quantidade de dias</label>
            <input type="number" class="form-control" id="dias" name="txtdias">
            <div class="form-text">Digite quantos dias o veículo foi alugado</div>
          </div>

          <div class="mb-3">
            <label for="distancia" class="form-label">Distância percorrida (km)</label>
            <input type="number" class="form-control" id="distancia" name="txtdistancia">
            <div class="form-text">Digite quantos km foram percorridos</div>
          </div>


          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="luxo">
            <label class="form-check-label" for="radioDefault1">
              Veículo de luxo
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="popular" checked>
            <label class="form-check-label" for="radioDefault2">
              Veículo popular
            </label>
          </div>

          <button type="submit" class="btn btn-success">Enviar</button>
          <button type="reset" class="btn btn-warning">Limpar campos</button>

        </form>
      </div>


      <div class="col-md-4">
        <h1>Calculadora de Recompensas do Programa Vida Saudável</h1>
        <form action="Saudavel.php" method="post">
          <div class="mb-3">
            <label for="horas" class="form-label">horas</label>
            <input type="number" class="form-control" id="horas" aria-describedby="emailHelp" name="txthoras">
            <div id="txthoras" class="form-text">Horas de atividade fisica realizadas</div>
          </div>

          <button type="submit" class="btn btn-success">Enviar</button>
          <button type="reset" class="btn btn-warning">limpar campos</button>
        </form>
      </div>


    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>