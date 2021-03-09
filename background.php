 <?php 
date_default_timezone_set("America/Mexico_City");
$hour      = date('H');
// echo $hour;
// $hour = 0;
if ($hour >= 22) {
    $greetings = "¡Buenas Noches! ¿Trabajando Hasta Tarde? ";
   $color = 'background-image: linear-gradient(to bottom, #4b2d73, #505194, #5974b2, #6997cb, #82b9e2, #8dcbec, #9adcf6, #abedff, #a9f2ff, #a8f6fe, #a9fbfd, #abfffa);';
    $fuente = 'color: #F1F1F1;';


}
 elseif ($hour > 19) {
   $greetings = "¡Buenas Noches!";
    $color = 'background-image: linear-gradient(to bottom, #1d2671, #572676, #822675, #a62a6f, #c33764);';
    $fuente = 'color: #ffc371;';

 } elseif ($hour > 11) {
    $greetings = "¡Buenas Tardes!";
   $color = 'background-image: linear-gradient(to right bottom, #a9f1df, #c4e7bb, #e2d8a6, #f9c8a7, #ffbbbb);';


} elseif ($hour > 8) {
   $greetings = '¡Buenos Días! <i style="color: #F8EB25;" class="fas fa-sun"></i>';
    $color= 'background-image: linear-gradient(to left bottom, #bff098, #8cf0b8, #61ebd9, #53e2f2, #6fd6ff);';

}elseif ($hour >= 5){
  $greetings = '¡Buenos Días! <i style="color: #F8EB25;" class="fas fa-sun"></i>';
    // $color= 'background-image: linear-gradient(to left bottom, #ff5f6d, #ff7a65, #ff9362, #ffac66, #ffc371);';
    $color= 'background-image: linear-gradient(to top, #53e2f2, #ebe9a2, #ffd29c, #ffbda8, #ffafbd);';
    $fuente = 'color: #fff;';


} elseif ($hour >= 0) {
  $greetings = "¡Buenos Días! ¿Trabajando Hasta Tarde?";
   $color = 'background-image: linear-gradient(to right bottom, #0f0c29, #131433, #19193e, #1f1e49, #262454, #282656, #2a2858, #2c2a5a, #2a2953, #28274c, #262645, #24243e);';
    $fuente = 'color: #F1F1F1;';

}
?>
