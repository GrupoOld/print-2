<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu no Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/meu.css">
</head>
<section  style="background-color: #EAB4F0;" >
    <div class="container">
        <div class= "row"> 
            <div class="col-sm-2 col-md-2 col-lg-2">
                <img src="../images/logo_cffa2.svg" alt="Logotipo das Criaturas Fofas e Fedorentas do Abismo" width="100" height="100">
            </div>
            <div class="col-sm-10 col-md-10 col-lg-10">
                 <h1 class="titulo_tur text-center">Turismo São Roque</h1>
            </div>
        </div>
    </div>
</section>
<?php include_once '../includes/inc_header.php'; ?>
<main style="background-color: #F0E0B2;">
<?php include_once '../includes/inc_headerluc.php'; ?>
     <article  style="background-color: #F0E0B2;">
        <div class="container text-center">
            <div class="row-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <br>
                    <img src="../images/portal_pontostur.jpg" class="img-fluid" alt="foto portal">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                 <h3><br>PONTOS TURISTICOS</h3><br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="paragrafo_tur">São Roque é uma cidade localizada a 60 km de São Paulo que possui belas paisagens e vários pontos turísticos com gastronomia diversificada e rede hoteleira de alta qualidade. O acesso  a cidade é através de duas grandes rodovias, Castelo Branco e Raposo Tavares.
                    O clima serrano e o a natureza abundante da Mata Atlântica é o cenário perfeito para lazer, entretenimento, comidas típicas e um bom vinho.
                    Os turistas podem conhecer a cultura, os costumes locais, passear e fazer compras no centro de São Roque e vivenciar o clima de uma cidade pacata do interior paulista.
                    Vale destacar o enoturismo que é uma atividade turística, que leva o visitante à apreciação e degustação dos vinhos regionais, conhecimento das tradições e cultura dos produtores.
                    </p>

                </div>
            </div>
        </div>
        
    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                         <img src="../images/roteiro_home.jpg" class="img-fluid" alt="foto portal do roteiro do vinho">
                        
                         <p>O Roteiro do Vinho é uma viagem mágica a um ambiente montanhoso repleto de pontos a serem visitados como vinícolas, restaurantes, pesqueiro, fazendinhas e locais aconchegantes para passar com amigos e família.</p>
                </div>       
                <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="../images/castelo_home.jpg" class="img-fluid" alt="foto do castelo">
                        
                        <p>O Castelo é um novo empreendimento na cidade, o qual remete a épocas medievais e com certeza vale a pena conhecer e viver uma experiência digna dos Cavaleiros da Távola Redonda e uma volta ao tempo para os fãs de Game of Thrones.</p>
                </div>       
                <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="../images/catarina_home.jpg" class="img-fluid" alt="foto Catarina Outlet">
                        
                        <p>O Shopping Catarina Fashion Outlet reúne as melhores marcas nacionais e internacionais em um só local com preços de outlet. Ele possui 300 lojas, praça de alimentação e um cinema a ser inaugurado breve.</p>
                </div>             
                
            </div>
        </div>
    </article>
    
    <footer class="text-center">
        <?php include_once '../includes/inc_footerluc.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</main>

</html>