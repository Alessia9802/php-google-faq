<?php

$header = "Privacy & Termini"; 
$menu = ["Introduzione", "Norme sulla privacy", "Termini di servizio", "Tecnologie", "Domande frequenti"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin:0;
            padding:0;
        }
       .incipit{
           padding: 1rem 0 0 1rem;
           display:flex;
           align-items: center;
       } 
       .logo{
           width: 100px;
       }
       .menu{
           padding-left: 1rem;
           display:flex;
           border-bottom: 2px solid #D3D3D3;
       }
       .menu_item{
           padding: .8rem 1rem;
       }
       .blue{
           color:#0086F8;
           border-bottom: 3px solid #0086F8;
       }
    </style>
</head>
<body>
    <!-- site header -->
    <div id="site_header">
        <div class="incipit">
            <div>
            <?php echo "<img src='./assets/img/width.png'/ > "  ?>
        </div>
        <div class="privacy">
             <?php echo $header ?>
        </div>
        </div>
        
        <div class="menu">
            <div class="menu_item">
                <?php echo($menu[0]); ?>
            </div>
            <div class="menu_item">
                  <?php echo($menu[1]); ?>
            </div>
            <div class="menu_item">
                <?php echo($menu[2]); ?>
            </div>
            <div class="menu_item">
                 <?php echo($menu[3]); ?>
            </div>
            <div class="menu_item blue">
                <?php echo($menu[4]); ?>
            </div>
        </div>
       
    </div>
    <!-- site main -->
    <div id="site_main"></div>
    <!-- site footer -->
    <div id="site_footer"></div>

</body>
</html>