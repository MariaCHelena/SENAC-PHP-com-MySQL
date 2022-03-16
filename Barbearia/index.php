<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Menino Pimposo</title>
        
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/homeCSS.css">
        <link rel="stylesheet" href="assets/css/cabecalho.css">
        <link rel="stylesheet" href="assets/css/rodape.css">
        <link rel="stylesheet" href="assets/css/responsivo.css">
        
        
        <link rel="stylesheet" href="assets/css/bootstrap-5.1.3-dist/css/bootstrap-grid.css">
    </head>
    <body>
        <header id = "cabecalho">
            <div class="logo logo-size"><a href="index.php"><img src="assets/img/boy.png" width="50px" height="50px"><h1>MENINO PIMPOSO</h1></a></div>
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
        
        <div class="principal" id="principal">
        </div>

        <div class="centered welcome">
            <small class="small-top">MENINO PIMPOSO</small>
            BEM-VINDOS
            <small class="small-bottom">BARBEARIA</small>
        </div>   

        <div class="rest"></div>

        <div class="row">
            <div class="conteudo-texto">
                <img src="assets\img\img-index-circle (1).jpg" alt="imagem barbearia" class="conteudo-imagem"><br><br>
                <h3>TITULO 1</h3><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quisquam rerum amet et, maxime accusamus mollitia porro nesciunt reiciendis debitis ad expedita modi illum distinctio consequatur ipsum? Libero, nemo aut.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quo impedit asperiores odit libero ea accusamus nostrum, vel voluptas, doloribus ullam soluta ipsum repellendus tenetur laborum ipsam eaque error quisquam.</p><br>
            </div>

            <div class="conteudo-texto">
                <img src="assets\img\img-index-circle (2).jpg" alt="imagem barbearia"  class="conteudo-imagem"><br><br>
                <h3>TITULO 2</h3><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur non explicabo quos porro, repellendus numquam laborum perferendis odit culpa, eveniet nobis hic doloremque laudantium? Cum sunt reiciendis dolor impedit nesciunt?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aperiam reprehenderit velit, doloribus recusandae sit dignissimos porro blanditiis laborum explicabo ea animi iure cupiditate, facere omnis facilis beatae! Saepe, debitis?</p><br>
            </div>
            
            <div class="conteudo-texto">
                <img src="assets\img\img-index-circle (3).jpg" alt="imagem barbearia"  class="conteudo-imagem"><br><br>
                <h3>TITULO 3</h3><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, enim hic, aspernatur expedita tempora fuga recusandae accusamus ipsum qui rem explicabo aliquam nihil, quis totam quaerat consectetur nobis nulla id?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos modi quia repudiandae iusto. Sit, quibusdam deleniti, corporis obcaecati eius id at aliquid, consectetur natus veniam quisquam tenetur beatae fuga quidem.</p><br>
            </div>
        </div>

        <div class="rest"></div>

        <div class="conteudo">
            <div class="wrapper left fotos">
                <img src="assets/img/Barber-pic (1).jpg" alt="Foto da barbearia" class="imagem-grid" style="justify-self: end;">
                <img src="assets/img/Barber-pic (2).jpg" alt="Foto da barbearia" class="imagem-grid">
                <img src="assets/img/Barber-pic (3).jpg" alt="Foto da barbearia" class="imagem-grid"  style="justify-self: end;">
                <img src="assets/img/Barber-pic (4).jpg" alt="Foto da barbearia" class="imagem-grid">
            </div>

            <div class="wrapper right horarios">
                <h3>BARBEARIA MENINO PIMPOSO</h3>
                <span>HORÁRIOS DE FUNCIONAMENTO</span>
                <div class="wrapper-texto">
                    <p>Segunda a Sexta .................... 8h às 18h</p>
                    <p>Sábado, domingo e feriados ............ 10h </p>
                </div>
                
                <span>LOCALIZAÇÃO</span>
                <div class="wrapper-texto">
                    <a href="https://www.google.com/maps/place/Barbearia+Dom+Ribeiro/@-15.7883176,-47.9409155,15z/data=!4m5!3m4!1s0x0:0x7bdd7121e34b4b21!8m2!3d-15.7883176!4d-47.9409155" target="_blanc"><p>SRES Cruzeiro Center Bloco A Loja 121 - Cruzeiro Velho, Brasília - DF, 70640-515</p><a>
                </div>
                <div class="botoes">
                    <span class="botao">AGENDE<br> UM HORÁRIO</span>
                </div>
            </div>
        </div>

        <?php
        ?>
        

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

        <!--Icons-->
        <script src="https://kit.fontawesome.com/b8158c0067.js" crossorigin="anonymous"></script>

        <script>
            var client = Math.max(document.documentElement.clientHeight);
            var cabecalho = Math.max(document.getElementById("cabecalho").clientHeight);
            var altura = client - cabecalho;
            altura = altura + "px"; //O JavaScript só altera o valor da propriedade se ela estiver escrita com "px" no final
            window.document.getElementById("principal").style.height = altura;
        </script>
    </body>
</html>
