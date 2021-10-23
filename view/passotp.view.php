<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de Seguridad</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <div class="form-div sc">
            <h1 class="sc__title">Código de Seguridad</h1>
            <p class="sc__text">El código ha sido enviado a:<br><span>alexander@mail.com</span></p>

            <form action="#" class="form" enctype="multipart/form-data" method="POST">
            <!-- Code -->       
                <div class="sc-input-div">     
                    <input type="number" maxlength="1" class="input-code" autocomplete="off" required>
                    <input type="number" maxlength="1" class="input-code" autocomplete="off" required>
                    <input type="number" maxlength="1" class="input-code" autocomplete="off" required>
                    <input type="number" maxlength="1" class="input-code" autocomplete="off" required>
                </div>

            <!-- Submit -->
                <input type="submit" class="btn-submit btn-sc" value="Verificar">

                <?php if(!empty($error)) : ?>
            <!-- If error -->
                    <div class="error sc-error">
                        <ul>
                            <?php echo $error; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <p class="text-form no-sent">¿No has recibido el código? <a href="login.php">Reenviar</a>.</p>
            </form>
        </div>
    </div>
</body>
</html>
