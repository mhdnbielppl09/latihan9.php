<?php 
   
    require_once 'class_motor.php';

 
    $beat = new motor();
    $supra = new motor();
    $vario = new motor();
    $scoopy = new motor();



    // call member class
    $beat->set_name('beat');
    $beat->set_color('black');
    $supra->set_name('supra');
    $supra->set_color('red');
    $vario->set_name('vario');
    $vario->set_color('white');
    $scoopy->set_name('scoopy');
    $scoopy->set_color('blue');




    echo 'merk motor '.$beat->get_name().' warna '.$beat->get_color();
    echo '<br/>merk motor '.$supra->get_name().' warna '.$supra->get_color();
    echo '<br/>merk motor '.$vario->get_name().' warna '.$vario->get_color();
    echo '<br/>merk motor '.$scoopy->get_name().' warna '.$scoopy->get_color();

?>