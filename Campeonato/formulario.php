<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Inscrição campeonato</title>
</head>

<body>
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
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
}

body{
    background-color: #000c1b;
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
.text-valorant h1{
    padding-top: 1.3em;
    text-align: center;
    color: white;
}
.img{
    padding: 22px;
    text-align: center;
}
.texto{
color: white;
margin-left: 20%;
margin-right: 20%;
font-family: var(--font2);
}
.texto h2{
    font-size: 2.2em;
    padding-bottom: 22px;
    text-align: center;
}
.text-formato h2{
    font-size: 2.2em;
    padding-top: 22px;
    text-align: center;
    color: white;
}
.text-formato{
    display: inline-block;
    margin: 5%;
}
.text-card-h3{
    font-family: var(--font1);
    font-weight: bolder;
    font-size: 1.5em;
}
.card{
    display: inline-block;
    width: 30%;
    padding: 20px;
    margin: 1%;
    border: 1px solid #f74f4f; /* #f74f4f*/
    cursor: pointer;
}
.card p{
    color: silver;
}
.card h3{
padding-bottom: 13px;
color: #ece6e5;
text-align: center;
}
.card img{
    margin-left: 43%;
}

.container{
    margin:  auto;
    width: 900px;
    margin-top: 20px;
    padding: 10px;
    text-align: center;
}
.colunas{
    width: 300px;
    height: 400px;
    background-color: #011022;
    float: left;
    margin-bottom: 100px;
    box-sizing: border-box;
    padding:10px;
    border-radius: 10px;
    border: 1px solid #f74f4f;
}
.colunas a li{
    border-radius:10px;
}
section{
    width: 500px;
    height: 400px;
    margin-left: 10px;
    float: left;
    background-color: #011022;
    margin-bottom: 100px;
    box-sizing: border-box;
    padding-left:10px;
    border-radius: 10px;
    border: 1px solid #f74f4f;
}
section h1{
    text-align: center;
    font-size: 1.8em;
    font-family: var(--font3);
    color: #ece6e5
}
ul.menu li{
    width: 250px;
    height: 50px;
    line-height: 50px;
    background-color: #777;
    color: #ece6e5;
    margin-top: 5px;
    box-sizing: border-box;
    padding-left:10px;
    margin-left: 20px;
}
.btn{
    width: 100px;
    height: 30px;
    border: 1px solid #ddd;
    background-color: gray;
    color: #ece6e5;
    cursor: pointer;
    border-radius: 10px;
}
.btn:hover{
    background-color: #626262;
    transition: 0.2s;
}
.campo{
    width: 300px;
    height: 30px;
    border: 1px solid #ccc;
    margin-top: 5px;
    margin-bottom: 10px;    
    color: black;
    border-radius: 5px;
}
#sair{
    width: 150px;
    height: 50px;
    line-height: 50px;
    background-color: #777;
    margin-top: 100px;
    margin-left: 60px;
    box-sizing: border-box;
    padding-left:10px;
    color: #ece6e5
}
@media screen and (max-width: 500px) and (min-width: 250px){
    .nav{
        display: none;
    }
    .card{
       flex-direction: column;
       display: flex;
       width: 100%;
       margin-left: 77%;
    }
    .card img{
        width: 0 auto;
    }
    .texto p{
        width: 200%;
        text-aling: center;
        margin-left: 60%;

    }
    .texto h2{
        margin-left: 100%;
        margin-bottom: 20%;
        display: flex;

    }
    .text-formato h2{
        margin-left: 100%;
        margin-bottom: 20%;
        display: flex;
    }
    .text-valorant{
        margin-left: 80%;
        margin-bottom: 20%;
        display: flex;
    }
    .img{
        margin-left: 8%;
    }
    .container{
        margin-left: 10%;
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
        display: flex;
        margin-left: 40%;
        width: 20%;
        margin-bottom: 10%;
    }
    .container{
        margin-left: 2%;
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
        display: flex;
        width: 20%;
        margin-left: 40%;
        margin-bottom: 10%;
    }
    .container{
        margin-left: 7%;
    }
}


</style>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="logo imperial" width="110px" height="110px">
        </div>
        <nav class="nav">
                <a href="index.php">Home</a>
                <a href="index.php#evento">Championships</a>
        </nav>
    </header>
    <div class="text-valorant">
        <h1>VALORANT <br> CHAMPIONSHIP</h1>
    </div>
    <article>
        <div class="img">
            <img src="img/valorant.jpg" alt="imagem valorant" width="800px" height="500px">
        </div>
        <div class="texto">
            <h2>CONHEÇA O CAMPEONATO</h2>
            <p>
                O campeonato irá contar com 62 times com uma taxa de inscrição de $50,00 reais, ele contara com diversas premiações como o campeão ira ganhar $1,000 reias e ainda tera direito a vaga na proxima edição do campeonato, e o vice-campeão tambem tera esse direito a vaga e ainda ganhara mais $500,00 reais, o MVP (Jogador Mais Valioso) $200,00 reais, teremos a seleção do campeonato que os jogadores dos times que passaram para os playoffs iram votar em 5 playes.
            </p>  
        </div>

        <div class="text-formato">
            <h2>FORMATO</h2>
            <div class="card">
                <h3 class="text-card-h3" style="margin-top: 60px;">MAPAS</h3>
                <img src="img/fixar-mapa.png" alt="imagem mapa" width="50px">
                <p>Ascent - Bind - Haven - Icebox - Breeze Fracture - Pearl  </p>
                </div>
            <div class="card">
                <h3 class="text-card-h3" style="margin-top:60px;">CALENDARIO</h3>
                <img src="img/calendario.png" alt="imagem calendario" width="50px">
                <p>Inicio inscrições 15 de novembro de 2022 : Termino 23 novembro de 2022</p>
                <p>Inicio campeonato 4 de dezembro de 2022 : Termino 21 de dezembro de 2022</p> 
            </div>
                <div class="card" >
                <h3 class="text-card-h3">FASE 1</h3>
                <img src="img/campeonato.png" alt="imagem trofeu">
                <p>A fase 1 ocorrerá com um mata mata até sobrar 8 times MD1.</p>
                <h3 class="text-card-h3">PLAYOFFS</h3>
                <p>Os 8 times restantes se enfrentaram em um mata mata mais uma vez só que nessa vez será uma chave de eliminação dupla MD3</p>
                <h3 class="text-card-h3">FINAL</h3>
                <p>Os finalistas disputaram uma MD5 para ser campeão, o time que foi para a final invicta tera a vantagem de poder banir 2 mapas e dar o firt pick.</p>
                </div>
        </div>
    </article>

    <div class="container">
            <div class="colunas">
                <ul class="menu">
                    <a href="formulario.php">
                        <li>Cadastro</li>
                    </a>
                    <a href="#">
                        <li>Times Inscritos</li>
                    </a>
                    <a href="#">
                        <li>Pagamento</li>
                    </a>
                    <a href="#">
                        <li>Regras do campeonato</li>
                    </a>
                    <a href="#">
                        <li id="sair">Sair</li>
                    </a>
                </ul>
            </div>
            <section>
                <h1>Inscrição de Times</h1>
                <hr> <br> <br>

                <form method="POST"  action="processa.php">
                    <br>
                    <input placeholder="   Nome do Time" type="text" name="nome" class="campo" required ><br>
                    <br>
                    <input placeholder="   Nome do Representante" type="text" name="nick" class="campo" required ><br>
                    <br>
                    <input placeholder="   E-mail" type="email" name="email" class="campo" required>
                    <br></br>
                    <input type="submit" value="Enviar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                </form>
            </section>
        </div>
</body>
</html>