<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;0,800;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-group">
            <h1 class="title">Regístrate</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="form" enctype="multipart/form-data">
            <!-- Username -->
                <label for="user"><input type="text" name="user" id="user" autocomplete="off" placeholder="Usuario" required class="btn-required" value="<?php if($submit != true && isset($user)){ echo $user; }?>"></label>

            <!-- Email -->
                <label for="email"><input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required value="<?php if($submit != true && isset($email)){ echo $email; }?>"></label>

            <!-- Password -->
                <label for="password"><input type="password" name="password" id="password" autocomplete="off" placeholder="Contraseña" required></label>

            <!-- Password Confirm -->
                <label for="passwordConfirm"><input type="password" name="password_confirm" id="passwordConfirm" autocomplete="off" placeholder="Confirmar contraseña" required></label>

            <!-- If error -->
                <?php if(!empty($error)) : ?>
                    <div class="error">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
            
            <!-- Submit -->
                <input type="submit" class="btn-submit" value="Registrarme">
                <p class="subtext">¿Ya tienes una cuenta? <a href="login.php" class="form--link">Iniciar Sesión</a>.</p>
            </form>
        </div>
    </div>
</body>
</html>