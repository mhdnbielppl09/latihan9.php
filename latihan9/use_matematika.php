<?php 
    require_once 'class_matematika.php';

    matematika::$counter++;
    matematika::$counter++;
    matematika::naikanCounter();
    echo 'Counter Sekarang : '. matematika::$counter;
    echo '<hr/>';

    $x = matematika::tambahkan(10,5);
    echo "4 + 5 = $x";
    echo '<hr/>';

    echo 'nilai PHI : '.matematika::PHI;
    $luas_lingkaran = matematika::luaslingkaran(8);
    echo '<br/>luas lingkaran dengan jari-jari 8 adalah : '. $luas_lingkaran;

    echo '<hr/>';
     $x = matematika::kurangi(35,15);
     echo "35 - 15 = $x";
     echo '<hr/>';
?>