<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entre em contato!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/meu.css">
</head>

<body>
    <?php include_once '../includes/inc_header.php'; ?>
        <div class = "row">
            <div class="col-md-12 col-lg-12">
                <article>
                    <h3>FALE CONOSCO</h3>
                    <p>Preencha o formulário abaixo e nossa equipe entrará em contato com você.</p>
                        <p>*Campos de preenchimento obrigatório<p>
                    <form action="#" method="post">
                        <label for="nome">Nome*:</label>
                            <input type="text" id="nome" name="nome" required>

                            <br>
                            <br>

                        <label for="email">E-mail*:</label>
                            <input type="email" id="email" name="email" required>

                        <label for="telefone">Telefone*:</label>
                            <input type="tel" id="telefone" name="telefone">

                            <br>
                            <br>

                        <label for="cpf">CPF*:</label>
                            <input type="text" id="cpf" name="cpf" required>

                        <label for="data_nascimento">Data de Nascimento*:</label>
                            <input type="date" id="data_nascimento" name="data_nascimento" required>

                            <br>
                            <br>

                        <label for="assunto">Assunto:</label>
                            <textarea id="assunto" name="assunto" rows="4" required></textarea>

                        <input type="submit" value="Enviar">
                    </form>
                    </div>
                </article>
            </div>
        </div>
        <footer class="text-center">
        <br><small>Copystart Joel Teixeira Junior - RA: 2650832313001 - Todos os Direitos estão Reservados.</small>
    </footer>
</body>

</html>