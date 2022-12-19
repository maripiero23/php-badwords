<?php

$paragrafo = $_POST["paragrafo"];

$parola = $_POST["parola"];

$paragrafoCensured = str_replace($parola, "****", $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Introduzion PHP</title>
</head>
<body>
    <main class="container">
        <div class="row justify-content-center my-3">
            <div class="col-6 justify-content-center">
                <h1 class="text-center my-3">Lettura dati:</h1>
                
                <p>il testo è: <?php echo $paragrafo;?></p>
                <p>La parola da censurare è: <?php echo $paragrafoCensured;?></p>
                <p>Il paragrafo non cesurato è lungo: <?php echo strlen($paragrafo);?> parole</p>
                <p>Il paragrafo cesurato è lungo: <?php echo strlen($paragrafoCensured);?>parole</p>
                
            </main>
            

            </div>
        </div>
        
</body>
</html>





































<div class="container">
    

</div>




