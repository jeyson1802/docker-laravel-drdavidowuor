<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro Conferencia</title>
</head>
<body>
    <p>Hola! {{ $conferencia->nombres }} {{ $conferencia->apellidos }}</p>
    <p>Sus datos han sido registrados para la conferencia con éxito.</p>
    <img src="{{ $message->embed(public_path() . '/images/email-conferencia.png') }}" />
</body>
</html>