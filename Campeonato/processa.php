<?php 
include_once("conexao.php");

$nome = $_POST["nome"];
$nick = $_POST["nick"];
$email = $_POST["email"];

$sql = "insert into timescadastrados (nome,nick,email) values ('$nome', '$nick','$email')";
$salvar = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Inscrição campeonato</title>
</head>
<style>
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




.container{
    margin:  auto;
    width: 900px;
    margin-top: 20px;
    padding: 10px;
    text-align: center;
    margin-top: 210px
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


</style>
<body>
   

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
                    <a href="index.php">
                        <li id="sair">Sair</li>
                    </a>
                </ul>
            </div>
            <section>
                <h1>Inscrição de Times</h1>
                <hr> <br> <br>

                <?php 
                
                if ($linhas == 1){
                    echo "<h1 size='0.7em' color='white'>Inscrição feita! </h1>";
                }else{
                    echo " <h1 color: 'white'>Seu email ou nick ja esta cadastrado!</h1>";
                }
                
                ?>
            </section>
        </div>
</body>
</html>