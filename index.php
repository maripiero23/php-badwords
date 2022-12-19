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
        <h1 class="my-2 text-center">PHP</h1>

        <h3 class="text-center my-3 text-primary">Esercizio introduttivo al PHP</h3>

        <div class="row justify-content-center">
            <div class="col-6">
            <form action="info.php" method="POST" class="mt-3">
                <div class="mb-3">
                    <label class="form-label">Paragrafo</label>
                    <input type="text" class="form-control" name="paragrafo" placeholder="Scrivi qualcosa">
                </div>

                <div class="mb-3">
                    <label class="form-label">Parola da censurare</label>
                    <input type="text" class="form-control" name="parola" placeholder="cosa vuoi nascondere?">
                </div>

                <div class="justify-content-center">

                    <button type="submit" class="btn btn-primary justify-content-center">INVIO</button>
                </div>
            </form>
            </div>
        </div>

    </main>
    
</body>
</html>