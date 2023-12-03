<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu no Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/meu.css">
</head>

<body>
    <?php include_once './includes/inc_header_index.php'; ?>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <section class="padding">
                    <figure>
                        <img src="https://placekitten.com/303/313" alt="Imagem Via Placekitten">
                        <figcaption><a href="./paginas/historia_geral.php">História</a></figcaption>
                    </figure>
                </section>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <section class="padding">
                    <figure>
                        <img src="https://placekitten.com/303/313" alt="Imagem Via Placekitten">
                        <figcaption><a href="./paginas/pontosturisticos.php">Turismo</a></figcaption>
                    </figure>
                </section>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <section class="padding">
                    <figure>
                        <img src="./images/capaservicos.svg" alt="Imagem Via Placekitten">
                        <figcaption><a href="./paginas/serviços.php">Serviços</a></figcaption>
                    </figure>
                </section>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12 col-md-4 col-lg-4">
                <section class="padding">
                    <figure>
                        <img src="./images/notindex.svg" alt="Uma imagem com várias outras imagens da cidade">
                        <figcaption><a href="./paginas/home_noticias.php">Notícias</a></figcaption>
                    </figure>
                </section>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <section class="padding">
                    <figure>
                        <img src="https://placekitten.com/303/313" alt="Imagem Via Placekitten">
                        <figcaption><a href="paginas/culturaelazer.php">Cultura & Lazer</a></figcaption>
                    </figure>
                </section>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <section class="padding">
                    <figure>
                        <img src="https://placekitten.com/303/313" alt="Imagem Via Placekitten">
                        <figcaption><a href="paginas/quem_somos.php">Quem Somos</a></figcaption>
                    </figure>
                </section>
            </div>
        </div>

    </div>


    <?php include_once './includes/inc_footer_index.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>