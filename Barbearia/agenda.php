<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menino Pimposo | Agenda</title>
        
        <link rel="stylesheet" href="assets/css/reset.css">
        
        <link rel="stylesheet" href="assets/css/cabecalho.css">
        <link rel="stylesheet" href="assets/css/rodape.css">
        <link rel="stylesheet" href="assets/css/agendaCSS.css">

    </head>
    <body>
        <header>
            <div class="logo"><a href="index.php"><img src="assets/img/boy.png" width="50px" height="50px"><h1>MENINO PIMPOSO</h1></a></div>
            <nav class="navegador">
                <ul class="navegador-links">
                    <li>
                        <a href="index.php" target="_blanc">Home</a>
                    </li>
                    <li>
                        <a href="servicos.html" target="_blanc">Serviços</a>
                    </li>
                    <li>
                        <a href="contatos.php" target="_blanc">Contatos</a>
                    </li>
                    <li>
                        <a href="cadastro.php" target="_blanc">Cadastro</a>
                    </li>
                    <li>
                        <a href="agenda.php" target="_blanc">Agendamento</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-facebook-square fa-lg"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-instagram fa-lg"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <h2 class="titulo-pagina">RESERVE UM HORÁRIO</h2>
        <div class="formulario">
            <form>
                <fildset>
                    <legend>Agendamento</legend>
                    <label for="nome" class="input-titulo">Nome do cliente</label><br>
                    <input type="text" id="nome" name="nome" placeholder="nome do cliente"><br><br>
                    <label for="telefone" class="input-titulo">Telefone</label><br>
                    <input type="tel" id="telefone" name="telefone" placeholder="00 00000-0000"><br><br>
                    <label for="email" class="input-titulo">E-mail</label><br>
                    <input type="email" id="email" name="email" placeholder="exemplo@gmail.com"><br><br>
                    <label for="func" class="input-titulo">Nome do funcionário</label><br>
                    <select id="func" name="func">
                        <option value="func">Escolha o funcionário</option>    
                        <option value="func">Chico Alicate</option>
                        <option value="func">Aranha</option>
                        <option value="func">Zé Martelo</option>
                        <option value="func">Morsa</option>
                        <option value="func">Pedro Machado</option>
                        <option value="func">Tonho Couve-flor</option>
                        <option value="func">Cabeçudo</option>
                        <option value="func">Zé bom de perna</option>
                        <option value="func">Cilindro</option>
                        <option value="func">Homem-Montanha</option>
                        <option value="func">Fantasma</option>
                        <option value="func">Sombra</option>
                        <option value="func">Borracha</option>
                        <option value="func">Tenório Tesoura</option>
                    </select><br><br>
                    <div id="serv">
                        <h3 class="input-titulo">Serviços</h3>
                        <input type="checkbox" id="cabelo" name="cabelo" value="cabelo" class="checkmark">
                        <label for="cabelo">Cabelo</label><br>
                        <input type="checkbox" id="barba" name="barba" value="barba" class="checkmark">
                        <label for="barba">Barba</label><br>
                        <input type="checkbox" id="bigode" name="bigode" value="bigode" class="checkmark">
                        <label for="bigode">Bigode</label><br>
                        <input type="checkbox" id="sobrancelha" name="sobrancelha" value="sobrancelha" class="checkmark">
                        <label for="sobrancelha">Sobrancelha</label><br>
                        <input type="checkbox" id="cavanhaque" name="cavanhaque" value="cavanhaque" class="checkmark">
                        <label for="cavanhaque">Cavanhaque</label>  
                    </div><br><br>
                    <label for="data" class="input-titulo">Data de agendamento</label><br>
                    <input type="date" id="data" name="data"><br><br>
                    <label for="time" class="input-titulo">Horário</label><br>
                    <input type="time" id="time" name="time"><br><br>
                    <div class="botoes-formulario">
                        <input class="enviar botao" type="submit" value="Enviar">
                        <input class="apagar botao" type="reset" value="Apagar">
                    </div>
                </fildset>
            </form>
        </div>
        <footer>
            <div class="conteudo-rodape">
                <div class="rodape-texto">
                    Menino pimposo barbearia
                    <span>@2022</span>
                </div>
                
                <div class="rodape-links">
                    <a href=""><i class="fa-brands fa-facebook-square fa-lg"></i></a>
                    <a href=""><i class="fa-brands fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </footer>



        <?php
        // put your code here
        ?>
        
        <!--Icons-->
        <script src="https://kit.fontawesome.com/b8158c0067.js" crossorigin="anonymous"></script>

        <script>
            var form = document.getElementById("nome").clientWidth;
            form += 2;
            var largura = form + "px";
            document.getElementById("func").style.width = largura;
        </script>
    </body>
</html>
