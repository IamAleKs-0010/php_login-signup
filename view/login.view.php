<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;0,800;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="form-div login">
            <h1 class="title">Iniciar Sesión</h1>
            <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form" enctype="multipart/form-data">
            <!-- Username -->
                <label for="user"><input type="text" name="user" id="user" autocomplete="off" placeholder="Usuario" required class="btn-required" value="<?php if($submit != true && isset($user)){ echo $user; } ?>"></label>

            <!-- Password -->
                <label for="password"><input type="password" name="password" id="password" autocomplete="off" placeholder="Contraseña" required></label>

                <?php if(!empty($error)) : ?>
            <!-- If error -->
                    <div class="error">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

            <!-- Submit -->
                <input type="submit" class="btn-submit" value="Iniciar Sesión">
                <p class="text-form lost-pass"><a href="#">¿Olvidaste tu correo o contraseña?</a></p>
                <p class="text-form no-account">¿No tienes una cuenta? <a href="register.php">Regístrate Aquí</a>.</p>
            </form>
        </div>
    </div>
</body>
</html>