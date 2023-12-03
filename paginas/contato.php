<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entre em contato!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/meu.css">
</head>

<body>
    <?php include_once '../includes/inc_header.php'; ?>
        <div class = "container">
        <div class = "row">
            <div class="col-md-12 col-lg-12">
                <article>
                    <h3>FALE CONOSCO</h3>
                    <p>Preencha o formulário abaixo e nossa equipe entrará em contato com você.</p>
                        <p>*Campos de preenchimento obrigatório<p>
                </article>
                    <form action="#" method="post">
                        <label for="nome">Nome Completo*:</label><br>
                            <input type="text" id="nome" name="nome"  class = "form-nome" required>

                            <br>
                            <br>

                        <label for="email">E-mail*:</label><br>
                        <input type="email" id="email" name="email" class = "form-email" required ><br>
                        <label class = "text-telefone" for="telefone">Telefone*:</label><br>
                        <input type="tel" id="telefone" name="telefone" class = "form-telefone" required >
                        
                            <br>
                            <br>
                            
                        <label for="cpf">CPF*:</label><br>
                        <input type="text" id="cpf" name="cpf" class = "form-email" required ><br>
                        <label class = "text-data" for="data_nascimento">Data de Nascimento*:</label><br>
                        <input type="date" id="data_nascimento" name="data_nascimento" class = "form-telefone" required>

                            <br>

                        <label for="assunto">Assunto:</label><br>
                            <textarea id="assunto" name="assunto" rows="10" class = "text-area" required></textarea>

                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
        <?php include_once '../includes/inc_footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>