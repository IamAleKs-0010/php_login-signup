<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar tu Nombre de Usuario o Contraseña</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <div class="form-div forget">
            <h1 class="forget__title">¿Contraseña olvidada?</h1>
            <p class="forget__text">¡No hay problema! Simplemente ingrese su correo electrónico y le enviaremos un código para restablecer su contraseña.</p>
            
            <form action="#" class="form" enctype="multipart/form-data" method="POST">
            <!-- Email -->            
                <label for="email" class="label-name"><i class="fas fa-envelope icon icon-email"></i><input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required class="input btn-required" autofocus></label>
                
                <?php if(!empty($error)) : ?>
            <!-- If error -->
                    <div class="error">
                        <ul>
                            <?php echo $error; ?>
                        </ul>
                    </div>
                <?php endif; ?>

            <!-- Submit -->
                <input type="submit" class="btn-submit btn-forget" value="ENVIAR CÓDIGO">
                <p class="text-form have-account">¿Lo recordaste? <a href="login.php">Iniciar Sesión</a>.</p>
            </form>
        </div>
    </div>
</body>
</html>