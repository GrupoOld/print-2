<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lazer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/meu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <header class="header_cl">
        <div class="container text-center">
            <div class="row">
                <div class="col-1">
                    <a class="logocompadding" href="../index.php">
                        <img src="../images/logo_cffa2.svg" alt="Logotipo das Criaturas Fofas e Fedorentas do Abismo"
                            width="100" height="100">
                    </a>
                </div>
                <div class="col-11">
                    <h1 class="titulo_cl">LAZER</h1>
                </div>
            </div>
        </div>
        <?php include_once '../includes/inc_header.php'; ?>
        <div class="container text-center">
            <menu class="navbar navbar-expand-lg menu_cl" style="background-color: yellow;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 cl">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="cultura.php">CULTURA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="lazer.php">LAZER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="agenda.php">AGENDA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </menu>
        </div>        
    </header>
    <article>
        <div class="container text-center">
            <div class="col-sm-12 col-md-12 col-lg-12"></div>
            <h3><br>LAZER EM SÃO ROQUE</h3><br>
        </div>
        <div class="container cl">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="container text-center fundobranco">
                        <p>Bem vindos à divisão de Lazer da Prefeitura do Município de São Roque!</p>
                        <p>A Divisão de Lazer da cidade de São Roque, no interior de São Paulo, é um órgão da Prefeitura
                            Municipal responsável por promover e fomentar as atividades de lazer no município. A Divisão
                            é composta por uma equipe de profissionais qualificados, que atuam nas áreas de esporte,
                            recreação e eventos.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 fundobranco">
                    <h3>Centro de Lazer Bandeirantes</h3>
                    <p>Localizado a 5 minutos do centro de São Roque, esse espaço é considerado o local ideal para toda
                        a família se divertir.</p>
                    <img src="../images/brinquedosbandeirantes.jpg" class="mx-auto d-block"
                        alt="Fotos de brinquedos coloridos em um local com grama e ao fundo uma rua tranquila">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 fundobranco">
                    <h3>Praça Largo dos Mendes</h3>
                    <p>Localizada no centro de São Roque, o Largo dos Mendes recebeu esse nome em homenagem a família
                        Mendes, tradicional da cidade de São Roque. Excelente lugar para relaxar com a família abriga um
                        relógio de sol, além de bancos, academia ao ar livre e playground.</p>
                    <img src="../images/brinquedosmendes.jpg" class="mx-auto d-block"
                        alt="Fotos de brinquedos coloridos em um local com chão concretado e ao fundo um quiosque">
                </div>
            </div>
        </div>
    </article>
    <footer class="text-center footer_cl">
        <div class="container">
            <div class="row">
                <section class="col-6 col-sm-6 col-md-1 col-lg-1">
                    <h1><a href="www.instagram.com.br"><span class="bi bi-instagram"></span></a></h1>
                </section>
                <section class="col-6 col-sm-6 col-md-1 col-lg-1">
                    <h1><a href="www.youtube.com.br"><span class="bi bi-youtube"></span></a></h1>
                </section>
                <section class="col-6 col-sm-6 col-md-1 col-lg-1">
                    <h1><a href="www.twitter.com.br"><span class="bi bi-twitter"></span></a></h1>
                </section>
                <section class="col-6 col-sm-6 col-md-1 col-lg-1">
                    <h1><a href="www.facebook.com.br"><span class="bi bi-facebook"></span></a></h1>
                </section>
                <div class="col-8 col-sm-7 col-md-6 col-lg-6">
                    <small>Todos Direitos Reservados:</small>
                    <br><small>Gleiton Correia Fernandes - RA: 2650832313036</small>
                    <br><small>Guilherme Filipini - RA: 2650832313008</small>
                    <br><small>Joel Teixeira Jr - RA: 2650832313001</small>
                    <br><small>Lucia Midori Nishimori - RA: 2650832313035</small>
                </div>
                <div class="col-4 col-sm-5 col-md-2 col-lg-2">
                    <div class="logocompadding">
                        <a class="navbar-brand" href="../index.php">
                            <img src="../images/logo_cffa2.svg"
                                alt="Logotipo das Criaturas Fofas e Fedorentas do Abismo" width="100" height="100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>