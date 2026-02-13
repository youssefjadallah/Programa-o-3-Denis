<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["deletar"])) {
        // Deleta o usuário
        $sqlDelete = "DELETE FROM usuarios";
        $conn->query($sqlDelete);
    } else {
        // Limpa a tabela (para permitir apenas 1 usuário)
        $conn->query("DELETE FROM usuarios");

        // Insere o novo usuário
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
        $conn->query($sql);
    }
}

// Pega o usuário atual (se existir)
$result = $conn->query("SELECT * FROM usuarios LIMIT 1");
$usuario = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro de Usuário</h2>
<a href="index.php">Voltar para a Página Inicial</a>
<br><br>

<?php if ($usuario) { ?>
    <h3>Usuário cadastrado:</h3>
    <p><b>ID:</b> <?php echo $usuario["id"]; ?></p>
    <p><b>Nome:</b> <?php echo $usuario["nome"]; ?></p>
    <p><b>Email:</b> <?php echo $usuario["email"]; ?></p>

    <!-- Botão de deletar -->
    <form method="POST">
        <button type="submit" name="deletar">Deletar usuário</button>
    </form>

<?php } else { ?>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
<?php } ?>

</body>
</html>
