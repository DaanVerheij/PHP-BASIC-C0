<?php  
    require 'database.php';

    $leeftijd = 19;
?>
<html>
<head>
</head>
<body>



    <div id="isMeerderJarig">
        <?php
            if($leeftijd >= 18 ){
                echo "Je bent 18 jaar of ouder!";
            }
          
        ?>
    </div>

</body>