<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
        <style>
            #botão{
                width: 80px;
                height: 55px;
                float: right;
                border: 4px ;
                border-radius: 7px;
            }
            #meio{
               width: 70%;
               height: 400px;
               background-color: tomato;
               padding: 60px;
               background-position: center;
            }
            body{
               background-image: url(imagens/carousel.png);
               background-repeat: no-repeat;
               background-size: 100%;
               
            }
            #texto{
               background-color: lightskyblue;
               color: black;
               background-size: 100% 100%;
            }
            #rodapé{
               background-color: rgb(34, 34, 34);
            }
            #texto2{
               color: rgb(145, 141, 141);
               display: inline;
               text-align: center;
            }
            #imagens{
               height: 25pt;
               width: 35px;
               display: inline-block;
            }
            #garantias{
               background-color: rgb(54, 148, 151);
               text-align: center;
               color: rgb(19, 19, 19);
               padding-left: 20px;
            }
            #garantias2{
               text-align: left;
               padding-left: 230px;
            }
            #gif{
               width: 750px;
               height: 250pt;
               padding: 20px;
            }
            #texto3{
                background-color: rgb(54, 148, 151);
                color: rgb(19, 19, 19);
                text-align: center;
            }
            #texto4{
                background-color: lightskyblue;
            }
            #texto5{
                background-color: lightskyblue;
                padding-left: 60px;
            }
            #requisitos{
                padding-left: 230px;
            }
            #garantias3{
                padding-left: 450px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><h2>Celestial</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Download</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="história.html" tabindex="-1" aria-disabled="true">História</a>
                </li>  
                <li class="nav-item">
                <a class="nav-link" href="Creditos.html" tabindex="-1" aria-disabled="true">Créditos</a>
                </li>       
                <li class="nav-item">
                    <a class="nav-link" href="dologout.php" tabindex="-1" aria-disabled="true">Sair</a>
                  </li>      
            </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="container">

            <div id="carouselsite" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                   <li data-target="carouselsite" data-slide-to="0" class="active"></li>
                   <li data-target="carouselsite" data-slide-to="1"></li>
                   <li data-target="carouselsite" data-slide-to="2"></li>
               </ol> 
              <div class="carousel-inner">
        
                <div class="carousel-item active">
                  <img src="imagens/cidade abandonada.gif" class="d-block w-90" height="400px" width="1200">
                </div>

                <div class="carousel-item">
                    <img src="imagens/site futuro.jpg" class="d-block w-90" height="400px" width="1200">
                  </div>

                  <div class="carousel-item">
                    <img src="imagens/carousel3.gif" class="d-block w-90" height="400px" width="1200">
                  </div>
              </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div id="texto" class="mx-auto">
            <div class="container mx-auto pt-50 px-50">
                <br>
                <h1 class="text-lg text-center font-bold mb-4">
                    Bem-vindo ao Celestial, um RPG gratuito em desenvolvimento!
                </h1>
                <br>
                <h5>Celestial é o mais novo RPG em desenvolvimento no Brasil. Com uma equipe profissional e totalmente brasileira, tem como intuito trazer os elementos de RPG raiz, buscando fãs de games retros de volta a atualidade. Nosso jogo está vindo para o mercado inspirado em grandes franquias, como: Pokemon, Super Mario e Diablo. No momento estamos na fase de planejamento, porém nossa expectativa é de lançar o jogo até 2022. Dentro do jogo teremos várias quests, monstros, árvores de skills, diversos equipamentos e mundos para serem explorados. O diferencial do nosso RPG é o sistema de falas em 3º pessoa, temos a idéia de aproximar cada vez mais o personagem customizavel com o jogador que está do outro lado da tela.</h5>
                <br>
            </div>
        </div>
        <div id="garantias" class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <br>
                    <h3 id="garantias3"><p>Garantias do Jogo</p></h3>
                    <br>
                    <h4 id="garantias2">
                        -- 8 Horas de jogo<br>
                        -- Experiência única<br>
                        -- História emocionante<br>
                        -- Roda em qualquer pc<br>
                        -- Bem optimizado<br>
                        -- Gráficos 2D<br>
                        -- Vários tipos de customização
                    </h4>
                </div>
                <div class="col-7">                    
                    <img id="gif" src="imagens/garantias.gif">                   
                </div>
            </div>
        </div>        
        <div id="texto5" class="container-fluid">
            <div class="row">
                <div id="requisitos" class="col-6">
                <br>
                <h4> &#160; Requisitos Mínimos do Sistema:</h4>
                <br>
                <h5>
                    - Sistema operacional: Windows XP SP2, Vista ou 7;<br>
                    - Processador: Core 2 Duo 2,4 GHz ou Althon X2 2,7 GHz;<br>
                    - Memória RAM: 2 GB;<br>
                    - Placa de vídeo: ATI Radeon 3870 ou Nvidia GeForce 8800 GT;<br>
                    - Armazenamento: 10 GB no disco rígido;<br>
                    - Placa de som: compatível com DirectX.</h5>
                    <br>
                </div>
                <div id="requisitos" class="col-5">
                <br>
                <h4> &#160; Requisitos Recomendados do Sistema:</h4>
                <br>
                <h5>
                    - Processador de 3 GHz dual-core;<br>
                    - 4 GB de Memória RAM;<br>
                    - 16 GB de memória disponível no disco rígido;<br>
                    - Nvidia GeForce 8800/AMD Radeon HD 5670;<br>
                    - Suporte para DirectX v9.</h5>
                    <br>
                </div>
            </div>
        </div>
        <footer id="rodapé">
            <div class="container">
                <div class="row">
                    <div id="texto2" class="col-4">
                        <br>
                        <h4 class="text-lg text-center font-bold mb-2">Localização</h4><br>
                        <h6>R. Blumenau, 2600 - América, Joinville - SC</h6>
                    </div>
                    <div id="texto2" class="col-4">
                        <Br>
                        <h4 class="text-lg text-center font-bold mb-2">Páginas Web</h4><br>
                        <A href="https://discord.gg/wWFxGxRr"><img id="imagens" src="imagens/disk.png"></A>
                        <A href="https://twitter.com/PlayersLonely"><img id="imagens" src="imagens/tt.png"></A>
                        <img id="imagens" src="imagens/insta.png">
                    </div>
                    <div id="texto2" class="col-4">
                        <br>
                        <h4 class="text-lg text-center font-bold mb-2">Sobre nós</h4>
                        <h6>desenvolvedores altamente profissionais, jogadores de lol e roblox. Se você tem alguma sugestão para nós, entre em contato conosco via gmail: thelonelyplayers1@gmail.com</h6>
                    </div>
                </div>
            </div>
            <br>
        </footer>
        



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
