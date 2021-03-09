<?php header('Content-Type: text/html; charset=utf-8'); 
  session_start();
  include ("../../Comunes/Funciones_php/F_ConectarDB.php");
  include ("../../Comunes/Funciones_php/F_LeerNivel.php");
  include ("../../Comunes/Funciones_php/F_PeriodoActual.php");
  include ("../../Comunes/Funciones_php/F_PeriodoAnterior.php");

  
?>
<!DOCTYPE html> 
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/f902505a24.js" crossorigin="anonymous"></script>
  
  <title>Home</title>

  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <?php include 'background.php'; //Incluye los colores del background ?>
    <style type="text/css">
     section {
  /*background-color: #ffffff;*/
   <?php echo $color; ?>
}
   </style>
   
</head>
<body>
  <?php
/* 1 -> OBTENIENDO EL CONTENIDO  (API openweather)*/
$json_file = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Orizaba, MX&APPID=6a27f9128bbe0feb3d6d36825de8681d&lang=es');
$vars = json_decode($json_file);
$cond = $vars->main;
$temp_c = $cond->temp - 273.15;
$temp_f = 1.8 * ($cond->temp - 273.15) + 32;
$desc = $vars->weather[0]->description;
if ($desc == 'nubes') {
  $clima = 'Nublado <i class="fas fa-cloud fa-2x">';
}else
$clima = $desc;
// echo $clima;

?>
  <section class="header3 counters conferencem4_header3 cid-sr0PI8LOc5" id="header3-8">
	

	

	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-5 title__block">


<!-- 			POR SI QUIEREN ALGUN VIDEO VA?	<div class="mbr-figure">
					<div class="mbr-media show-modal align-center" data-modal=".modalWindow">
						<div class="anim">
							<span class="mbr-iconfont mobi-mbri-play mobi-mbri"></span>
						</div>
					</div>
					<p class="popup__text mbr-bold mbr-fonts-style display-4">Play Promo</p>
					<div class="modalWindow" style="display: none;">
						<div class="modalWindow-container">
							<div class="modalWindow-video-container">
								<div class="modalWindow-video">
									<iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://www.youtube.com/watch?v=36YgDDJ7XSc"></iframe>
								</div>
								<a class="close" role="button" data-dismiss="modal">
									<span aria-hidden="true" class="mbri-close mbr-iconfont closeModal"></span>
									<span class="sr-only">Close</span>
								</a>
							</div>
						</div>
					</div>
				</div> -->

				<p class="mbr-bold" style="font-size: 350%; <?php echo $fuente; ?>"> <?php  echo $greetings; ?> </p> <h1 class="mbr-section-title mbr-bold mbr-fonts-style display-1">Gente UniVO</h1><!--  Por si quieren alguna descripción o texto
				<p class="mbr-text mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipisicing
					elit. Temporibus quos harum nulla nesciunt aspernatur, magni quia praesentium id velit, autem labore
					amet ipsa et beatae sit error neque tempora voluptates.</p> -->
          <div class="mbr-section-btn"><a class="btn btn-secondary display-4" href="assets/cumples/marzo.pdf" target="_blank">¿Y Tú ya los felicitaste? (Cumpleaños)
            <i class="fas fa-gift fa-lg"></i></a></div>
                          <br>
                          <a style="font-size: 20px;" href="../Legislacion.php">Legislación <i class="far fa-file-alt"></i></a> <br>
                          <a style="font-size: 20px;" href="#">Modelo Educativo <i class="fas fa-file-import"></i></a>

				  <div class="widget text-white">
          <div class="row">
            <div class="widget__item push__left col-lg-6 col-md-1 col-6 " style="color: #FF6666;">
              <span class="widget__count mbr-bold mbr-fonts-style count display-5"><?php echo $temp_c; ?> </span>
              <!-- <span class="mbr-iconfont mbrib-update" style="font-size: 39px;"></span> -->
              <i class="fas fa-temperature-low fa-2x"></i>  <?php echo $clima; ?> </i>  

              <p class="widget__text mbr-semibold mbr-fonts-style display-4">Orizaba. Ver. </p>
            </div>

            <!-- Otro Widget  <div class="widget__item push__left col-lg-4 col-md-3 col-6 ">
              <span class="mbr-iconfont mbrib-idea" style="font-size: 39px;"></span>
              <span class="widget__count mbr-bold mbr-fonts-style count display-5">13</span>
              <p class="widget__text mbr-semibold mbr-fonts-style display-4">Ex minima porro adipisci quidem</p>
            </div> -->

          </div>
        </div>


			</div>

			<div class="col-lg-1 d-none d-lg-block">
        
      </div>
			<div class="col-lg-6">
				<div class="image">
					<img src="https://i.imgur.com/THR0qPM.jpg" alt="" title="">
				</div>
			
			</div>
		</div>
	</div>
</section>



<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/playervimeo/vimeo_player.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  
</body>
</html>