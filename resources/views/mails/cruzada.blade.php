<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro cruzada</title>
</head>
<body>
    <p>Hola! {{ $cruzada->nombres }} {{ $cruzada->apellidos }}</p>
    <p>Sus datos han sido registrados para la cruzada con éxito.</p>
    <img src="{{ $message->embed(public_path() . '/images/email-cruzada.png') }}" />
</body>
</html>