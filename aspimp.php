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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body onlo id="page-top">
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8" id="titlediv">
                        <h1 class="text-white mb-4">ASMPIMP E LPD</h1>
                    </div>
                </div>
            <style>

            #about{
                padding: 0;
                height: 85vh;
            }
            #titlediv{
                height: 120px;
                margin: 0 0 20px 0;
                width: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid white;
                border-top: 0;
                border-right: 0;
                border-left: 0;
            }
            .pilaresformat{
                display: flex;
                justify-content:center;
                align-items:center;
                width: 700px;
                height: 200px;
                padding:10px;
                margin-bottom: 10px;
            }
            #mae-pilares {
                display:flex;
                width:100%;
                justify-content:center;
                align-items:center;
                margin-bottom: 60px;
            }
            #carouselExampleControls{
                margin-top:30px;
            }
            #video {
                align-items: center;
                justify-content: center;
            }
            #video video{
                width: 1100px;
            }
            #questionarioButton {
                
                align-items: center;
                justify-content: center;
            }
            #projects{
                padding: 0;
                height: 15vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #btnSpeak{
                height: 70px;
                background:rgb(177, 177, 177);
                pointer-events: none;
                border-color: rgb(177, 177, 177);
                -webkit-transition-duration: 0.8s; /* Safari */
                
                
            }

            #btnSpeak a {

                text-decoration: none;
                color: whitesmoke;
            }






            </style>
                <div id="mae-pilares">
                    <div id="video">
                        <video id="meuVideo" controls>
                            <source src="assets/movies/aspimp.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                        </video>
                    </div>                
                 </div>                
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <center>
                    <div id="questionarioButton">
         <button id="btnSpeak" class="btn btn-primary" > <a  href="#about">  <img src="assets/img/question_white.png" width="30px" height="30px">  Responder Questionário </a>  </button> 
                    </div>  
                </center>
                </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy;  2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <script>

        
        
        var meuVideo = document.querySelector('#meuVideo');

    
        var runningFun =  setInterval(function(){ 

            var timeNow = meuVideo.currentTime;
            var durationVideo = meuVideo.duration;
            var timeFinish = durationVideo-15;


            if (timeNow >= timeFinish ) {

                document.querySelector("#btnSpeak").style.backgroundColor = "rgb(67, 67, 221)";
                document.querySelector("#btnSpeak").style.pointerEvents = "auto";
                clearInterval(runningFun);
               
            }


         }, 1000);
        
       


        
         </script>

      
    </body>
</html>
