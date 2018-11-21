<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp4 - Partie4</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp4 - Partie4</h1>
            <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
            <ul>
                <li><b>Le premier nombre est plus grand</b> si le premier nombre est plus grand que le deuxième</li>
                <li><b>Le premier nombre est plus petit</b> si le premier nombre est plus petit que le deuxième</li>
                <li><b>Les deux nombres sont identiques</b> si les deux nombres sont égaux</li>
            </ul>
            </p>
        </div>   
        <div class="container"> 
        <?php
          $nb1 = rand(1,20);
          $nb2 = rand(1,20);
          echo 'nb1= '.$nb1.' et nb2= '.$nb2.' donc ';
          function compare($nb1, $nb2){
              if ($nb1>$nb2){
                  echo 'le premier nombre est plus grand';
              }else{
                  if($nb1<$nb2){
                      echo 'le premier nombre est plus petit';
                  }else{
                      echo 'les deux nombres sont identiques';
              }
              }
          }
          echo compare($nb1, $nb2);
          ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
