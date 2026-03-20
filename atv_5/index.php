<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LP3 Aula 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <h1>LP3 Aula 6</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Sistema de Pedidos com Adicionais</h1>
        <form action="recebeDados.php" method="post">

          <div class="mb-3">
            <label for="Nome" class="form-label">Nome</label>
            <input type="text" name="Nome" class="form-control" id="Nome" aria-describedby="s">
            <div id="txtNome" class="form-text">coloque seu nome</div>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="adicionais[]" value="Bacon" id="bacon">
            <label class="form-check-label" for="bacon">Bacon</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="adicionais[]" value="Cheddar Cremoso" id="cheddar">
            <label class="form-check-label" for="cheddar">Cheddar Cremoso</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="adicionais[]" value="Cebola Caramelizada" id="cebola">
            <label class="form-check-label" for="cebola">Cebola Caramelizada</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="adicionais[]" value="Hambúrguer Extra" id="extra">
            <label class="form-check-label" for="extra">Hambúrguer Extra</label>
          </div>

          <button type="submit" class="btn btn-success">Enviar</button>
          <button type="reset" class="btn btn-warning">limpar campos</button>

        </form>
      </div>

      <div class="col-md-6">
        <h1>Gerador de Tabuada</h1>
        <form action="Tabuada.php" method="get">

          <div class="mb-3">
            <label for="numero" class="form-label">Digite um número (1 a 50)</label>
            <input type="number" name="numero" step="any" class="form-control" id="numero" min="1" max="50" required>
            <div class="form-text">Será gerada a tabuada deste número</div>
          </div>

          <button type="submit" class="btn btn-primary">Gerar Tabuada</button>
          <button type="reset" class="btn btn-warning">Limpar</button>

        </form>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</body>
</html>