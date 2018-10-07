<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>CONTACTO</title>
</head>
<body>
    <p>Nombres: {{ $contacto->nombres }}</p>
    <p>Correo: {{ $contacto->correo }}</p>
    <p>Asunto: {{ $contacto->asunto }}</p>
    <p>mensaje: {{ $contacto->mensaje }}</p>
</body>
</html>