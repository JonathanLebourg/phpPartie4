<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp7 - Partie4</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp7 - Partie4</h1>
            <p>Faire une fonction qui prend deux paramètres : <b>l'âge et le genre d'une personne</b>. Le genre peut être :
              <ul>
                  <li>Hommme</li>
                  <li>Femme</li>
              </ul>
              La fonction doit renvoyer en fonction des paramètres :
              <ul>
                  <li><b>Vous êtes un homme et vous êtes majeur</b></li>
                  <li><b>Vous êtes un homme et vous êtes mineur</b></li>
                  <li><b>Vous êtes une femme et vous êtes majeur</b></li>
                  <li><b>Vous êtes une femme et vous êtes mineur</b></li>
              </ul>
              Gérer tous les cas.
            </p>
        </div>
        <div class="container"> 
        <?php
            function majority($age, $gender){
                if ($gender == 'Homme'){
                    if($age >= 18){
                        return 'Vous êtes un homme et vous êtes majeur';
                    } else {
                        return 'Vous êtes un homme et vous êtes mineur';
                    }
                } else {
                    if($age >= 18){
                        return 'Vous êtes un femme et vous êtes majeure';
                    } else {
                        return 'Vous êtes un femme et vous êtes mineure';
                    }    
                }
            }
            
           echo majority(29, 'Femme');
          ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>