<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>UTCTRABAJO</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="styles.css" rel="stylesheet">
  <link rel="stylesheet" href="instyle.css">
  <script>

    $(document).ready(function(){

         $("#myCarousel").carousel();

    });

    </script>


  </script>
</head>

<body>
      <div id="navbar" class="navbar navbar-inverse navbar-fixed-top">
        <div class="clearfix"></div>
        <div class="collapse navbar-collapse">
          <ul class="nav nav-stacked" id="menu-bar">
            <li><a href="#"><span class="glyphicon glyphicon-home"> HOME</span></a></li>
            <li class="panel dropdown">
              <a data-toggle="collapse" data-parent="#menu-bar" href="#collapseOne">
                  <span class="glyphicon glyphicon-user"> INTEGRANTES</span>
                </a>
              <ul id="collapseOne" class="panel-collapse collapse">
                <li><a href="#">Edwin Casa</a></li>
                <li><a href="#">Jonathan Loja</a></li>
                <li><a href="#">Diego Chiluisa</a></li>
                <li><a href="#">Vanessa Vela</a></li>
                <li><a href="#">Jenny Tumbaco</a></li>
                <li><a href="#">Cristina Robles</a></li>
                <li><a href="#">Verónica Llumiquinga</a></li>
                <li><a href="#">Ana Almache</a></li>
                <li><a href="#">Aimacaña Klever</a></li>
                <li><a href="#">Molina Stalin</a></li>
                <li><a href="#">Díaz Jenny</a></li>
                <li><a href="#">Juan Topa</a></li>
                <li><a href="#">Jessica Caiza</a></li>
              </ul>
            </li>     
            <li><a href="http://www.utc.edu.ec/"><span class="glyphicon glyphicon-book"> UTC</span></a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
  <div class="content">
    <div style="height: 40px;width: 100%;background: black;">
    </div>
    <br>
    <center>
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel" style="width: 90%;height: 400px;">

        <!-- Carousel indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1"></li>

            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>   

        <!-- Carousel items -->

        <div class="carousel-inner">

            <div class="item active">

                <img src="http://radioutc.com/wp-content/uploads/bfi_thumb/edificio-copia-31nzkinfsmd75e6eg3s934.png" alt="First Slide" style="width: 100%;height: 100%;">

            </div>

            <div class="item">

                <img src="https://proyectosbeta.net/wp-content/uploads/2018/01/github-logo.png" alt="Second Slide" style="width: 100%;height: 100%;">

            </div>

            <div class="item">

                <img src="http://design.jboss.org/openshiftio/brand/logo/vector/OSIO_logo_color_rgb_black.svg" alt="Third Slide"style="width: 100%;height: 100%;">

            </div>

        </div>

        <!-- Carousel nav -->

        <a class="carousel-control left" href="#myCarousel" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>

        </a>

        <a class="carousel-control right" href="#myCarousel" data-slide="next">

            <span class="glyphicon glyphicon-chevron-right"></span>

        </a>

    </div>
  	<header>
		<div class="contenedor" id="uno">
			<a href="http://academico.utc.edu.ec/LogIn.aspx?ReturnUrl=%2fEstudiantes%2fEstudiantesHome.aspx%3fid%3dSING&id=SING"><img class="icon" src="pictures/icon1.png"></a>
			<p class="texto">Sistema</p>
		</div>

		<div class="contenedor" id="dos">
		    <a href="http://avirtuales.utc.edu.ec/"><img class="icon" src=" "></a>
			<p class="texto">Aula Virtual</p>
		</div>

		<div class="contenedor" id="tres">
			<a href="http://www.utc.edu.ec/bibliotecav"><img class="icon" src=" "></a>
			<p class="texto">Biblioteca Virtual</p>
		</div>
	</header>
  </center>
  <div style="height: 40px;width: 100%;background: black;"></div>
  </div>
  <script type="text/javascript">
    (function($) {
        var $window = $(window),
            $html = $('#menu-bar');

        $window.resize(function resize(){
            if ($window.width() < 768) {
                return $html.removeClass('nav-stacked');
            }
            $html.addClass('nav-stacked');
        }).trigger('resize');
    })(jQuery);
  </script>
</body>
</html>