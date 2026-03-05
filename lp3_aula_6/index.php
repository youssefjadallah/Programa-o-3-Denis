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
                <h1>Formularios</h1>
                <form action="recebeDados.php" method="post">
  <div class="mb-3">
    <label for="Email" class="form-label">Email hahah</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
    <div id="txtEmail" class="form-text" name="txtEmail">Vamos roubar seu email porfavor coloque.</div>
  </div>

  <div class="mb-3">
    <label for="Nome" class="form-label">Nome hahah</label>
    <input type="text" class="form-control" id="Nome" aria-describedby="s">
    <div id="txtNome" class="form-text" name="txtNome">Vamos roubar seu nome porfavor coloque.</div>
  </div>

  <div class="mb-3">
    <label for="Descrição" class="form-label">Descrição</label>
    <input type="text" class="form-control" id="Descrição" name="txtDesc">
  </div>

  <button type="submit" class="btn btn-success">Enviar</button>
  <button type="reset" class="btn btn-warning">limpar campos</button>

</form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>