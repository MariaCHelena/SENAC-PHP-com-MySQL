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
                        <a href="agenda.php" target="_blanc">Agenda</a>
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
        <div>AGENDA</div>
        <div>CADASTRO</div>
        <div>
            <h2>RESERVE UM HORÁRIO</h2>

            <form>
                <label for="nome">Nome do cliente</label><br>
                <input type="text" id="nome" name="nome" placeholder="nome do cliente"><br>
                <label for="telefone">Telefone</label><br>
                <input type="tel" id="telefone" name="telefone" placeholder="00 00000-0000"><br>
                <label for="email">E-mail</label><br>
                <input type="email" id="email" name="email" placeholder="exemplo@gmail.com"><br>
                <label for="func">Nome do funcionário</label><br>
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
                </select><br>
                <label for="serv">Serviço</label><br>
                <select id="serv" name="serv"> <!-- Adicionar uma maneira de conseguir escolher mais de um serviço, com checkbox, por exemplo -->
                    <option value="serv">Escolha o serviço</option>
                    <option value="serv">Cabelo</option>
                    <option value="serv">Barba</option>
                    <option value="serv">Bigode</option>
                    <option value="serv">Sobrancelha</option>
                    <option value="serv">Cavanhaque</option>    
                </select><br>
                <label for="data">Data de agendamento</label><br>
                <input type="date" id="data" name="data"><br>
                <label for="time">Horário</label><br>
                <input type="time" id="time" name="time"><br><br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Apagar">
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
    </body>
</html>
