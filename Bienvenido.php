<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            background-color: #c90000;
            width: 100%;
            max-width: 650px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-top: 8px solid #5a0000;
        }
        .header-escuela {
            margin-bottom: 25px;
        }
        .header-escuela h1 {
            font-size: 1.6rem;
            color: #000000;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .logo-container {
            margin: 20px 0;
        }
        .logo-container img {
            max-width: 150px;
            height: auto;
            border-radius: 8px;
        }
        .bienvenida {
            background-color: #000000;
            color: #000000;
            padding: 15px;
            border-radius: 8px;
            font-size: 1.4rem;
            font-weight: bold;
            margin: 25px 0;
            border-left: 5px solid #880000;
        }
        .datos-tarea {
            text-align: left;
            background-color: #bb0000;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #680000;
            margin-top: 20px;
        }
        .dato-grupo {
            margin-bottom: 12px;
            font-size: 1.05rem;
            color: #000000;
        }
        .dato-grupo:last-child {
            margin-bottom: 0;
        }
        .label {
            font-weight: 600;
            color: #ff0000;
            display: inline-block;
            width: 160px;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.9rem;
            color: #000000;
        }
        .bienvenida{
            color: #9c0000;
        }
    </style>
</head>
<body>


<?php
    $escuela = "cbtis217";
    $alumno = "Juan Miguel Villagómez";
    $tarea = "Práctica 1: Introducción a PHP y Servidores Web";
    $fecha = date("d / m / Y"); 
    $logo_url = "https://placeholder.com"; 
?>


<div class="container">

    <div class="header-escuela">
        <h1><?php echo $escuela; ?></h1>
    </div>


    <div class="logo-container">
        <img src="<?php echo $logo_url; ?>" alt="Logo de la Escuela">
    </div>


    <div class="bienvenida">
        <?php echo "¡Bienvenido al Sistema de Entregas!"; ?>
    </div>


    <div class="datos-tarea">
        <div class="dato-grupo">
            <span class="label">Nombre del Alumno:</span> 
            <?php echo $alumno; ?>
        </div>
        <div class="dato-grupo">
            <span class="label">Nombre de la Tarea:</span> 
            <strong><?php echo $tarea; ?></strong>
        </div>
        <div class="dato-grupo">
            <span class="label">Fecha de Entrega:</span> 
            <?php echo $fecha; ?>
        </div>
    </div>


    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> - Todos los derechos reservados.</p>
    </div>
</div>


</body>
</html>