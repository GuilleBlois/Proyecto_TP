<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>¡Activa tu Cuenta AHORA!</h2>

        <div>
            Gracias por crear una cuenta en Tie Party.
            Por favor haz click en el link de abajo para activar tu cuenta...
            <a href="{{ URL::to('register/verify/' . $confirmation_code) }}">Activar</a>.<br/>
        </div>

    </body>
</html>