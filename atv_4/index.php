<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LP3 Aula 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h1>Sistema de Aprovação Escolar</h1>

        <form action="Escolar.php" method="post">

          <div class="mb-3">
            <label for="Nota1" class="form-label">Nota 1 (0 até 10)</label>
            <input type="number" min="0" max="10" step="0.1" class="form-control" id="Nota1" name="txtNota1">
            <div class="form-text">Digite sua nota</div>
          </div>

          <div class="mb-3">
            <label for="Nota2" class="form-label">Nota 2 (0 até 10)</label>
            <input type="number" min="0" max="10" step="0.1" class="form-control" id="Nota2" name="txtNota2">
            <div class="form-text">Digite sua nota</div>
          </div>

          <div class="mb-3">
            <label for="Nota3" class="form-label">Nota 3 (0 até 10)</label>
            <input type="number" min="0" max="10" step="0.1" class="form-control" id="Nota3" name="txtNota3">
            <div class="form-text">Digite sua nota</div>
          </div>

          <div class="mb-3">
            <label for="frequencia" class="form-label">frequencia (0 até 100)</label>
            <input type="number" min="0" max="100" class="form-control" id="frequencia" name="txtfrequencia">
            <div class="form-text">Digite sua frequencia</div>
          </div>

          <button type="submit" class="btn btn-success">Enviar</button>
          <button type="reset" class="btn btn-warning">Limpar campos</button>

        </form>
      </div>


      <div class="col-md-4">
        <h1>Calculadora de Tarifas de Energia Elétrica</h1>

        <form action="Energia.php" method="post">

          <div class="mb-3">
            <label for="kwh" class="form-label">Quantidade de kWh</label>
            <input type="number" min="0" class="form-control" id="kwh" name="txtkwh">
            <div class="form-text">Digite quantos kwh consumiu no mes</div>
          </div>


          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="residencial">
            <label class="form-check-label" for="radioDefault1">
              Residencial
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="comercial">
            <label class="form-check-label" for="radioDefault2">
              Comercial
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="industrial" checked>
            <label class="form-check-label" for="radioDefault3">
              Industrial
            </label>
          </div>

          <button type="submit" class="btn btn-success">Enviar</button>
          <button type="reset" class="btn btn-warning">Limpar campos</button>

        </form>
      </div>


      <div class="col-md-4">
        <h1>Sistema de Descontos para E-commerce</h1>
        <form action="E-commerce.php" method="post">
          <div class="mb-3">
            <label for="compra" class="form-label">Valor da compra</label>
            <input type="number" min="0" step="0.01" class="form-control" id="compra" name="txtcompra">
            <div class="form-text">Digite o Valor total da compra</div>
          </div>


          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="Comum">
            <label class="form-check-label" for="radioDefault1">
              Cliente Comum
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="VIP">
            <label class="form-check-label" for="radioDefault2">
              Cliente VIP
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioDefault" value="Premium" checked>
            <label class="form-check-label" for="radioDefault3">
              Cliente Premium
            </label>
          </div>

          <button type="submit" class="btn btn-success">Enviar</button>
          <button type="reset" class="btn btn-warning">limpar campos</button>
        </form>
      </div>


    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>