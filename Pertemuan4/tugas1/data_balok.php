<?php 
		require_once 'class_balok.php';


          $balok1 = new Balok(29, 16, 7);
          $balok2 = new Balok(12, 5, 9);
          $balok3 = new Balok(14, 9, 11);
          $balok4 = new Balok(15, 10, 17);
          

          echo "Balok 1: <br>";
          echo "Luas = " . $balok1->getluas() . "<br>";
          echo "Keliling = " . $balok1->getkeliling() . "<br>";
          echo "Volume = " . $balok1->getvolume() . "<br><br>";
          
          echo "Balok 2: <br>";
          echo "Luas = " . $balok2->getluas() . "<br>";
          echo "Keliling = " . $balok2->getkeliling() . "<br>";
          echo "Volume = " . $balok2->getvolume() . "<br><br>";
          
          echo "Balok 3: <br>";
          echo "Luas = " . $balok3->getluas() . "<br>";
          echo "Keliling = " . $balok3->getkeliling() . "<br>";
          echo "Volume = " . $balok3->getvolume() . "<br><br>";
          
          echo "Balok 4: <br>";
          echo "Luas = " . $balok4->getluas() . "<br>";
          echo "Keliling = " . $balok4->getkeliling() . "<br><br>";
          echo "Volume = " . $balok4->getvolume() . "<br><br>";

?>

