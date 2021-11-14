<?php

$vaiGramatina = "Vai Jums ir iesniegta nodokļu grāmatiņa?"

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css"> 
    <title>Algas kalkulators</title>
    </head>
        <body>
            <div class="wrapper">
                 <div>             
                    <form method="post">
                        
                        <div class="slideContainer">
                            <h3 class="menesalga">Bruto mēnešalga jeb alga pirms nodokļu nomaksas: </h3>
                            <input type="range" min="1" max="2000" value="1" class="slider" id="myRange">
                            <p>Bruto: <span id="value"></span> EUR</p>
                        </div>
                        
                        <div class="gramatina">
                            <h3><?php echo $vaiGramatina; ?></h3>
                            <div class="no">
                                <input type="radio"  value="no" name="gramatina" id="no" class="no">
                                <label for="no" class="no">Nav</label><br/>
                            </div>
                            <input type="radio" value="yes" name="gramatina" id="yes">
                            <label for="yes">Ir</label><br>
                        </div>                
                        
                        <button type="button" class="btn" name="submit" id="submit">Aprēķināt</button>    
                    
                    </form> 
                </div>
                <h2>Neto mēnešalga jeb alga pēc nodokļu nomaksas ir <span id="neto" class="neto"></span></h2>
            </div>
        </div>    
    </body>
    <script src="/js/app.js"></script>
</html>
