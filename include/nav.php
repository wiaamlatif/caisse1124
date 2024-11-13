<?php
      $urlHost = "http://localhost:8000";

      $textNav = array(
                        0 => "Home",
                        1 => "Categories",
                        2 => "Products",
                        3 => "Connexion",
                        4 => "Deconnexion",
      );

      $urlNav = array(
                       0 => "/index.php",
                       1 => "/front/category/index.php",
                       2 => "/front/product/index.php",
                       3 => "/include/connexion.php",
                       4 => "/include/deconnexion.php",
      ); 

      // echo $_SERVER['PHP_SELF'];

      $clickedNav=0;     
      for ($i=0; $i < count($urlNav) ; $i++) { 
        $coloredNav[$i]="";
        if($_SERVER['PHP_SELF']===$urlNav[$i]){
            $clickedNav=$i;
        }
      }

      $coloredNav[$clickedNav]="bg-primary text-white active";
      
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">

  <div class="container-fluid">

      <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link <?=$coloredNav[0]?>" href="<?= $urlHost.$urlNav[0]?>"><?=$textNav[0]?></a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?=$coloredNav[1]?>" href="<?= $urlHost.$urlNav[1]?>"><?=$textNav[1]?></a>
            </li>

            <li class="nav-item">
            <a class="nav-link <?=$coloredNav[2]?>"     href="<?= $urlHost.$urlNav[2]?>"><?=$textNav[2]?></a>
            </li>

            <li class="nav-item">
            <a class="nav-link <?=$coloredNav[3]?>"      href="<?= $urlHost.$urlNav[3]?>"><?=$textNav[3]?></a>
            </li>

            <li class="nav-item">
            <a class="nav-link <?=$coloredNav[4]?>"     href="<?= $urlHost.$urlNav[4]?>"><?=$textNav[4]?></a>
            </li>

      </ul>
 
  </div>
</nav>