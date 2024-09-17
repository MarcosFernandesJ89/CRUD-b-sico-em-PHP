<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Times</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Cadastro de Times</h1>
        </header>
        <main>
            <section class="form-section">
                <form action="processa_time.php" method="post">
                    <label for="nome">Nome do Time:</label>
                    <input type="text" id="nome" name="nome" required>
                    <button type="submit" class="button button-primary">Cadastrar</button>
                </form>
            </section>
            <section class="list-section">
                <h2>Times Cadastrados</h2>
                <ul>
                    <?php
                    include 'config.php';
                    $sql = "SELECT * FROM times";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li>{$row['nome']}<a href='editar_time.php?id={$row['id']}' class='button button-secondary'>Editar</a> | <a href='excluir_time.php?id={$row['id']}' class='button button-danger'>Excluir</a></li>";
                        }
                    } else {
                        echo "<li>Nenhum time cadastrado</li>";
                    }
                    $conn->close();
                    ?>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>
