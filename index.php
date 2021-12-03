<?php

$header = "Privacy & Termini"; 
$menu = ["Introduzione", "Norme sulla privacy", "Termini di servizio", "Tecnologie", "Domande frequenti"];




$array = [
    [
        "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
    ]
    ];

    /* for ($i = 0; $i < count($array); $i++){
        $element = $array[$i];
        echo $element;
    } */

    echo ($array[0]);

    /* var_dump($array[0]); */

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
           display: flex;
           border-bottom: 2px solid #D3D3D3;
       }
       .menu_item{
           padding: .8rem 1rem;
       }
       .blue{
           color:#0086F8;
           border-bottom: 3px solid #0086F8;
       }

       #site_footer{
           width: 100%;
           height: 100px;
           color: gray;
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
    <div id="site_main">
        <!-- first question -->
    
    </div>
    <!-- site footer -->
    <div id="site_footer"></div>

</body>
</html>