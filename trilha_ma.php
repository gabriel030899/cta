<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mundo CTA Digital</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style_trilha.css">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="foguetediv">
            <img id="foguete" src="assets/img/foguete.png" alt="Foguete">
            <button id="buttonup" class="controller" type="button"><img src="assets/img/dirarrow.png" alt="^"></button>
            <button id="buttondown" class="controller" type="button"><img src="assets/img/dirarrow.png" alt="v"></button>
        </div>
        
        <div class="iconeshome">
            <a href="pilares.php"><img id="backicon" src="assets/img/back.png" width="64px" height="64px" alt="Voltar"></a>
            <a href=""><img id="homeicon" src="assets/img/home.png" width="64px" height="64px" alt="Home"></a>
        </div>

       <div id="trilha">
            <div class="iconesp7" id="passo7">
                <div class="textp7" >
                    <h2>Passo 7:</h2>
                    <ul id="ferramentasp7">
                        <li><a href="">No Touch</a></li>
                    </ul>
                </div>
                <img src="assets/img/planeta7.png" width="256px" height="auto" alt="Passo 7">
            </div>
            
            <div class="iconesp6" id="passo6">
                <img src="assets/img/planeta6.png" width="256px" height="auto" alt="Passo 6">
                <div class="textp6" >
                    <h2>Passo 6:</h2>
                    <ul id="ferramentasp6">
                        <li><a href="">Manual do Operador</a></li>
                    </ul>
                </div>
            </div>

            <div class="iconesp5" id="passo5">
                <div class="textp5" >
                    <h2>Passo 5:</h2>
                    <ul id="ferramentasp5">
                        <li><a href="">Rota Otimizada</a></li>
                    </ul>
                </div>
                <img src="assets/img/planeta5.png" width="256px" height="auto" alt="Passo 5">
            </div>

            <div class="iconesp4" id="passo4">
                <img src="assets/img/planeta4.png" width="300px" height="auto" alt="Passo 4">
                <div class="textp4" >
                    <h2>Passo 4:</h2>
                    <ul id="ferramentasp4">
                        <li><a href="">Mapa visual de Perdas - Nível 2</a></li>
                        <li><a href="" id="wpapasso">WPA</a></li>
                    </ul>
                </div>
            </div>

            <div class="iconesp3" id="passo3">
                <div class="textp3" >
                    <h2>Passo 3:</h2>
                    <ul id="ferramentasp3">
                        <li><a href="">Funil de Transferência</a></li>
                    </ul>
                </div>
                <img src="assets/img/planeta3.png" width="256px" height="auto" alt="Passo 3">
            </div>

            <div class="iconesp2" id="passo2">
                <img src="assets/img/planeta2.png" width="256px" height="auto" alt="Passo 2">
                <div class="textp2" >
                    <h2>Passo 2:</h2>
                    <ul id="ferramentasp2">
                        <li><a href="">Controle Visual</a></li>
                        <li><a href="" id="plilpasso">PLIL - Lubrificação</a></li>
                    </ul>
                </div>
            </div>

            <div class="iconesp1" id="passo1">
                <div class="textp1" >
                    <h2>Passo 1:</h2>
                    <ul id="ferramentasp1">
                        <li><a href="">5S</a></li>
                        <li><a href="">Princípio de Funcionamento</a></li>
                        <li><a href="">Etiquetagem</a></li>
                        <li><a href="">PLIL-Limpeza e Inspeção</a></li>
                        <li><a href="">Eliminação de Fontes de Sujeira e Local de Difícil Acesso</a></li>
                        <li><a href="">Centerline</a></li>
                        <li><a href="" id="mvppasso">Mapa Visual de Perdas</a></li>
                    </ul>
                </div>
                <img id="planeta1" src="assets/img/planeta.png" width="256px" height="auto" alt="Passo 1">
            </div>
            
       </div>
       <div class="trilhatop">
           <div class="trilhainfo">
                <div class="trilhatitulo">
                    <h3>Trilha de Manutenção Autônoma</h3>
                </div>
                <div class="trilhasubtitulo">
                    <p>Conheça melhor a trilha de Manutenção Autônoma:</p>
                </div>
                <div class="trilhavideo">

                    

                    <video width="900" height="307" controls autoplay>

                    <source src="assets/movies/ma_movie.mp4" type="video/mp4">
  
                    Your browser does not support the video tag.
                   
                </video>

                </div>
                <div class="trilhabotao">
                    <a href="#passo1"><button type="button" onclick="openUniverse()">Clique aqui e comece sua Jornada!</button></a>
                </div>
            </div>
        </div>
    </div>
    
        <!-- Footer-->
        <!--<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy;  2021</div></footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="js/script_trilha.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
