<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-group">
            <h1 class="title">Iniciar Sesión</h1>
            <form method="POST" action="#" class="form" enctype="multipart/form-data">
            <!-- Username -->
                <label for="user"><input type="text" name="user" id="user" autocomplete="off" placeholder="Usuario" required class="btn-required"></label>

            <!-- Password -->
                <label for="password"><input type="password" name="password" id="password" autocomplete="off" placeholder="Contraseña" required></label>


            <!-- Submit -->
                <input type="submit" class="btn-submit" value="Iniciar Sesión">
                <p class="subtext">¿No tienes cuenta? <a href="" class="form--link">Regístrate Aquí</a>.</p>

            </form>
        </div>
    </div>
</body>
</html>