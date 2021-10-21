<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Contraseña</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container">
        <div class="form-div newpass">
            <h1 class="newpass__title">Nueva Contraseña</h1>
            <p class="newpass__text">Escribe una nueva contraseña que no tengas en otro sitio.</p>
            
            <form method="POST" action="#" class="form" enctype="multipart/form-data">
            <!-- Password -->
                <label for="password"><i class="fas fa-lock icon icon-pass"></i><input type="password" name="password" id="password" autocomplete="off" placeholder="Contraseña nueva" required class="input" autofocus></label>

            <!-- Password Confirm -->
                <label for="passwordConfirm"><i class="fas fa-lock icon icon-pass"></i><input type="password" name="passwordConfirm" id="passwordConfirm" autocomplete="off" placeholder="Repite la contraseña" required class="input"></label>

                <?php if(!empty($error)) : ?>
            <!-- If error -->
                    <div class="error">
                        <ul>
                            <?php echo $error; ?>
                        </ul>
                    </div>
                <?php endif; ?>

            <!-- Submit -->
                <input type="submit" class="btn-submit" value="Guardar Cambios">
            </form>
        </div>
    </div>
</body>
</html>