<?php

$paragrafo = $_POST["paragrafo"];

$parola = $_POST["parola"];

$paragrafoCensured = str_replace($parola, "****", $paragrafo);

?>

<h1>Lettura dati:</h1>

<p>il testo è: <?php echo $paragrafo;?></p>
<p>La parola da censurare è: <?php echo $paragrafoCensured;?></p>
<p>Il paragrafo non cesurato è lungo: <?php echo strlen($paragrafo);?> parole</p>
<p>Il paragrafo cesurato è lungo: <?php echo strlen($paragrafoCensured);?>parole</p>



