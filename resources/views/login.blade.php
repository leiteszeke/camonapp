<!doctype html>
<html lang="EN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    </head>
    <body>
        <form method="post" id="loginForm">
            <div>
                <input type="email" name="email" id="email" placeholder="hola@correo.com" />
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="contraseña" />
            </div>
            <div>
                <button type="submit">Ingresar</button>
            </div>
        </form>
        <script type="text/javascript" src="{{ URL::asset('js/axios.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/pages/login.js') }}"></script>
    </body>
</html>
