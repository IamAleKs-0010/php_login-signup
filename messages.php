<?php

 # REGISTER
    define('FIELDS_MISSING', 'Por favor rellena todos los datos correctamente.');

  // Password
    define('PASSWORD_NOT_MATCH', 'Las constraseñas no coinciden.');
    define('SHORT_PASSWORD', 'La contreña debe contener mínimo 8 caracteres.');
    define('SYMBOLS_NOT_ALLOWED_PASS', 'Solo se admiten letras, números, guiones bajos y parentesis en la contraseña. Por favor, inténtalo de nuevo.');

  // User    
    define('USER_AND_EMAIL_ALREADY_EXISTS', 'El usuario y/o correo electrónico ya está en uso.');
    define('INCORRECT_USER', 'El usuario debe tener entre 3 y 16 caracteres.');
    define('SYMBOLS_NOT_ALLOWED', 'Solo se admiten letras, números, guiones y parentesis. Por favor, inténtalo de nuevo sin símbolos.');

  // Email
    define('INVALID_EMAIL', 'Por favor ingresa un correo válido.');
    
  // Error
    define('USER_REGISTRATION_FAIL', 'Registro de usuario fallido.');
    
  // Successful      
    define('USER_REGISTRATION_SUCCESS', 'Registro de usuario se ha realizado correctamente.');


 # LOGIN
    define('LOGIN_FIELDS_MISSING', 'Escriba su correo electrónico y su contraseña.');
    define('LOGIN_FAIL','Correo electrónico y/o Contraseña no coinciden.');


 # PASSWORD CHANGES
    define('MAIL_DOES_NOT_EXIST', 'No existe un usuario con ese correo electrónico.');
    define('PASSWORD_CHANGE_SUCCESS', 'Contraseña cambiada con éxito.');
    
  // Recovery Code    
    define('INVALID_CODE', 'Por favor ingresa el código correctamente.');
    define('INCORRECT_CODE', 'El código que ingresaste es incorrecto, por favor inténtalo de nuevo.');

    
 # FILES
    define('ERROR_UPLOADING_FILE', 'El archivo no es una imagen o el archivo es muy pesado.');
    define('MUST_UPLOAD_FILE', 'Debes seleccionar un archivo.');

?>