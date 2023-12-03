<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/meu.css">
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
                    <h1 class="titulo_cl">AGENDA</h1>
                </div>
            </div>
        </div>
        <?php include_once '../includes/inc_header.php'; ?>
        <div class="container text-center">            
            <menu class="navbar navbar-expand-lg menu_cl d-lg-flex" style="background-color: yellow;">                
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
            <h3><br>AGENDA</h3><br>
        </div>
        <div class="container cl">
            <div class="row mx-auto">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <p>Aqui encontrará informações de eventos futuros sobre Cultura e Lazer em São Roque</p>
                    <img src="../images/10conferencia.jpg" class="img-fluid"
                        alt="Arte sobre a décima conferência sobre Cultura"><br><br>
                    <img src="../images/6passeiociclistico.jpg" class="img-fluid"
                        alt="Arte sobre o sexto passeio ciclístico">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <table class="tabela_cl fundo_cl">
                        <tr class="text-center">
                            <th>Dia</th>
                            <th>Hora</th>
                            <th>Local</th>
                            <th>Evento</th>
                        </tr>
                        <tr>
                            <td>18/12/2023</td>
                            <td>18:00h</td>
                            <td>C. E. C. T. BRASITAL</td>
                            <td>10ª conferência Municipal de Cultura</td>
                        </tr>
                        <tr>
                            <td>19/12/2023</td>
                            <td>18:00h</td>
                            <td>C. E. C. T. BRASITAL</td>
                            <td>10ª conferência Municipal de Cultura</td>
                        </tr>
                        <tr>
                            <td>20/12/2023</td>
                            <td>18:00h</td>
                            <td>Largo dos Mendes</td>
                            <td>6º Passeio Ciclistico</td>
                        </tr>
                        <tr>
                            <td>21/12/2023</td>
                            <td>18:00h</td>
                            <td>Largo dos Mendes</td>
                            <td>6º Passeio Ciclistico</td>
                        </tr>
                    </table>
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