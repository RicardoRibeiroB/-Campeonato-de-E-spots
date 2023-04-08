<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>IMPERIAL</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@100&family=Roboto:ital,wght@1,300&family=Zen+Antique&display=swap');

:root{
--cor1: #000c1b;
--cor2: #003651;
--cor3: #006993;
--cor4: #00a6e0;
--cor5: #00eeff;
--font1: 'Barlow', sans-serif;
--font2: 'Roboto', sans-serif;
--font3: 'Zen Antique', serif;
}
*{
    margin:0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}
body{
    background-color: var(--cor1);
    box-sizing: border-box;
}
header{ 
    display: flex;
    justify-content: center;
    align-items: center;
}
.logo{
    flex: 20%;
    margin-left: 50px;
}
.nav{
    flex: 70%;
    text-align: right;
    padding: 20px;
}

.nav a{
    padding: 15px;
    padding-right: 25px;
    color: white;
    text-decoration: none;
    font-family: var(--font2);
    font-size: 1.4em;

}

.nav a:hover{
    background: var(--cor3);
    transition: 0.2s;
}


.slide-principal .slider{
    transform: scale(0.9);
    transition: 0.3s;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
}

.descicao{
    text-align: center;
    font-size: 2em;
    color: white;
    MARGIN-LEFT: 5%;
}

.slide-principal .slider.slick-center{
    transform: scale(1);
}

.eventos h1{
    padding-top: 143px;
    padding-bottom: 23px; 
    color: var(--cor4);
    text-align: center;
}
.card{
    border: solid 1px var(--cor3);
    display: inline-block;
    padding: 20px;
    width: 20%;
    margin: 1%;
    text-align: center;
    border-radius: 10px;
    cursor: pointer;
}
.card img{
    width: 200px;
    height: 150px;
    border: solid 1px black;
}
.card h2{
    color: white;
    text-align: center;
    margin: 20px;
}
.card p{
    color: #ece6e5;
    text-align: center;
}

article{
    padding: 50px;
}
article h1{
    text-align: center;
    font-size: 2.3em;
    font-weight: bold;
}


/* Botao */

button.slick-prev{
    font-size: 0px;
    border: none;
    height: 255px;
    width: 255px;
    z-index: 9;
    background: transparent;
    position: absolute;
    top: 40%;
    left: 3%;
    /*background-image: url(../img/setat.png);*/
}

button.slick-next{
    font-size: 0px;
    border: none;
    height: 255px;
    width: 255px;
    z-index: 9;
    background: transparent;
    position: absolute;
    top: 40%;
    /*background-image: url(../img/setaf.png);*/
    right: 3%;
}

.slick-list{
    width: 100%!important;
}

.slick-initialized{
    overflow: hidden;
}

.slick-dots li button{
    font-size: 0px;
    border: 2px solid #ffffff;
}
.slick-dots{
    margin: 0 auto;
    width: 50%;
    position: relative;
    left: 23%;
    top: -20%;
}

.slick-dots li {
    display: inline-block;
}
.sobre{
    margin-left: 25%;
    /*border: solid 1px var(--cor4);*/
    text-align: center;
    color: #ece6e5;
    font-size: 1.5em;
    width: 50%;
    color:  #006993;
}

.sobre h2{
    margin-bottom: 10px;
    margin-top: 50px;
    font-size: 2.5em;
    color: #ece6e5;
}
.sobre img{
    width: 50%;
}

@media screen and (max-width: 500px) and (min-width: 250px){
    .nav{
        display: none;
    }
    .card{
       flex-direction: column;
       display: flex;
       width: 75%;
       margin-left: 17%;
    }
    .card img{
        width: 0 auto;
    }
}
@media screen and (max-width: 850px) and (min-width: 450px){
    .nav{
        display: none;
    }
    .card{
       flex-direction: column;
       display: flex;
       width: 75%;
       margin-left: 17%;
    }
    .card img{
        margin-left: 33%;
    }
}
@media screen and (max-width: 1350px) and (min-width: 900px){
    .nav{
        display: none;
    }
    .card{
       flex-direction: column;
       display: flex;
       width: 75%;
       margin-left: 17%;
    }
    .card img{
        width: 0 auto;
        margin-left: 34%;
    }
}
</style>
<body>
    <!-- header -->

        <header>
            <div class="logo">
                <img src="img/logo.png" alt="Imperials" width="80px" height="80px">
            </div>
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="#evento">Championships</a>
                <a href="#sobre">Sobre</a>
            </div>
        </header>  

    <!-- main -->
    
    <main>
        <div class="slide-principal">
            <img data-name="Counter Strike: Global Offensive" class="slider" src="img/Baixar-CSGO-download.jpg">
            <img data-name="Call of Duty Warzone" class="slider" src="img/cod.jpg">
            <img data-name="Mobile Legends" class="slider" src="img/lendasb.jpg">
            <img data-name="Rainbow Six Siege" class="slider" src="img/rainbows.png">
            <img  data-name="Valorant"  class="slider" id="vava" src="img/val.jfif">
            <img data-name="League of Legends: Wild Rift" class="slider" src="img/wrR.jpg">
        </div>
    
            <a href="formulario.php">
                <div id="watch-name" class="descicao">
                </div>
            </a>
       
        </div>
        <div class="eventos" id="evento">
            <h1>PROXIMOS CAMPEONATOS:</h1> 
        </div>
        <div class="card" style="margin-left: 17%;">
            <img src="img/Baixar-CSGO-download.jpg" alt="csgo">
            <div class="card-text">
                <h2>COUNTER STRIKE: GLOBAL OFENCIVE</h2>
                <p>IMPERIAL CHALLENGER <br> <br> Inicio 03 de Janeiro de 2023 <br> Termino 10 de Janeiro de 2023 <br>Taxa de inscrição: R$ 20,00</p>
            </div>
        </div>
        <div class="card">
            <img src="img/valorant.jpg" alt="Valorant" style="margin-top: 25px;">
            <div class="card-text">
                <h2 >VALORANT</h2>
                <p>CHALLENGER MAIN <br> <br> Inicio 14 de Fevereiro de 2023 <br> Termino 28 de Fevereiro de 2023 <br>Taxa de inscrição: R$ 30,00</p>
         </div>
        </div>
        
        </div>
        <div class="card">
            <img src="img/COD_Warzone.jpg" alt="COD Warzone" style="margin-top: 25px;">
            <div class="card-text">
                <h2>CALL OF DUTTY WARZONE</h2>
                <p>IMPERIAL CHALLENGER <br> <br> Inicio 01 de Março de 2023 <br> Termino 10 de Março de 2023 <br>Taxa de inscrição: R$ 25,00</p>
         </div>
    
        </div>
        <div class="sobre" id="sobre">
            <h2>Sobre Nós</h2>
            <img src="img/logo.png"><p>A Imperial é uma empresa que organiza pequenos e grandes campeonatos de e-sports totalmente online e direto da sua casa. Campeonatos anuais e mensais são organizados e divulgados em nosso site. Já premiamos mais de 4 mil reais em gift cards e créditos nos jogos participantes! Venha você também participar da jogada.</p>
            <p><br> Criada em 2018, a Imperial continua sendo uma das melhores e mais badaladas empresas de campeonato de games da América. A empresa foi idealizada por Josenildo Pires no auge da sua carreira de programador. A Imperial organiza até hoje eventos por todo o Brasil, unindo e entretendo amantes de games de todas as partes.</p>
        </div>
         
       
        

    <!-- footer -->
        <footer>           
        <p>Imperials  &copy; todos os direitos reservados</p>
     </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="script/main.js"></script>
        </body>
</html>