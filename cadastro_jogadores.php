<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogadores</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Cadastro de Jogadores</h1>
        </header>
        <main>
            <section class="form-section">
                <form action="processa_jogador.php" method="post">
                    <label for="nome">Nome do Jogador:</label>
                    <input type="text" id="nome" name="nome" required>
                    
                    <label for="time">Time:</label>
                    <select id="time" name="time_id" required>
                        <?php
                        include 'config.php';
                        $sql = "SELECT * FROM times";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['id']}'>{$row['nome']}</option>";
                            }
                        }
                        $conn->close();
                        ?>
                    </select>
                    
                    <button type="submit" class="button button-primary">Cadastrar</button>
                </form>
            </section>
            <section class="list-section">
                <h2>Jogadores Cadastrados</h2>
                <ul>
                    <?php
                    include 'config.php';
                    $sql = "SELECT jogadores.*, times.nome as time_nome FROM jogadores LEFT JOIN times ON jogadores.time_id = times.id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li>{$row['nome']} - Time: {$row['time_nome']} <a href='editar_jogador.php?id={$row['id']}' class='button button-secondary'>Editar</a> | <a href='excluir_jogador.php?id={$row['id']}' class='button button-danger'>Excluir</a></li>";
                        }
                    } else {
                        echo "<li>Nenhum jogador cadastrado</li>";
                    }
                    $conn->close();
                    ?>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>
