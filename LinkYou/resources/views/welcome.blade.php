<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LinkYou</title>

        <!-- Icono -->
        <link rel="icon" href="https://image.flaticon.com/icons/svg/121/121156.svg" type="image/x-icon">

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      
        
      
         <!-- Styles -->
        <style>
            html, body{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            }

           
        

            .full-height {
                height: 11vh;
            }

            .flex-center {
               
                display: flex;
                justify-content: center;
                border-color: transparent;
                margin-bottom: 0;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
            }

            .texto-encima{
                position: absolute;
                top: 240px;
                right: 10px;
}
            .carousel-caption{
                position: absolute;
                top: 50%;
                left: 50%;
                 transform: translate(-50%, -50%);
                 color:white;
           }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
        
            .carousel{
                position:absolute;
                top:0;
            }


            .links > a {
                color:black;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>



    
        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-right links ml-auto">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
       
       

       
        <div id="demo" class="carousel slide" data-ride="carousel">


        
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>

                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active"  width="1366" height="657" >
                    <img   class="d-block w-1000"   width="1366"  height="657"  src="https://images.unsplash.com/photo-1510070112810-d4e9a46d9e91?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1920&h=1080&fit=crop&ixid=eyJhcHBfaWQiOjF9" alt="Presentacion">
                    <div class="carousel-caption d-none d-md-block">
                      <big><h1><br><br><br><strong> &nbsp; LinkYou!</strong></h1></big>
                       <p> <h4>Jobs Positions Right Here</h4></p>
                     </div>
                   </div>
                  <div class="carousel-item">
                    <img class="d-block w-10000 "  width="1366" height="657"  src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Cierre de trato laboral">
                    <div class="carousel-caption d-none d-md-block">
                     &nbsp; <h1  style="color: black;"> <strong> &nbsp;Un mundo de Oportunidades</strong></h1>
                  <p> <h4  style="color: black;">El espacio mas amplio de alternativas y nuevas experiencias , empresas buscando talentos justo como tu para elevar sus negocios.</h4></p>
                </div>
                </div>
                  <div class="carousel-item">
                    <img   class="d-block w-1000"   width="1366"  height="657"  src="https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Comentarios">
                    <div class="carousel-caption d-none d-md-block " >
                    <h1  style="color: black;" >  <strong> &nbsp;Variedad</strong></h1>
                        <h4>Numerosas vacantes disponibles en diferentes areas, es tiempo de desarrollar tus habilidades y alcanzar tus metas.</h4>
                        <br>
                        <P   style="color: purple;" ALIGN="right"> <q>Tanta diversidad aumenta tus probabilidades...Lorena Vasquez</q></p>
                        <P  style="color: purple;" ALIGN="left"><q>El mejor sitio web donde encontrar personal altamente calificado...<strong>Juan Perez</strong></q></p>           
                         <br>
                        <h5  style="color: black;"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Es el momento de  unirte a la red mas grande del empleos!"</i></h5>
                    </div>
                </div>
               
                  <div class="carousel-item">
                    <img class="d-block w-10000 " align="left" width="1366" height="657"  src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Candidatos">
                    <div class="texto-encima" align="left">
                     &nbsp; <h1  style="color: black;"> <strong> &nbsp; &nbsp; &nbsp;Un banco de candidatos</strong></h1>
                  <p> <h4  style="color: black;"><em>Navega entre los miles perfiles que llegan a dairio.</em></h4></p>
                
                </div> 
                </div>    
                </div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              
              </div>
    



            <!--<div class="content">
                <div class="title m-b-md">
                         LinkYou
                   
                </div>
                <h5>Jobs Positions Just For Fou</h5>
                
                <div-->
  
              

              
            
      
    
    


            
    
    
        </body>
</html>
