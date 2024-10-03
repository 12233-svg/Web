
<html>
    
    
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Imagen en HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
            padding: 20px;
            float: left; /*
        }
        img {
            max-width: 100%; /* Asegura que la imagen no desborde el contenedor */
            height: auto;    /* Mantiene la proporción de la imagen */
            border-radius: 8px; /* Bordes redondeados */
        }
    </style>
</head>
<body>

    
    <img src="img1.png" alt="Descripción de la imagen">  

    

</body>

    
    
    
    
    
    
</html>











<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tracking_number = htmlspecialchars($_POST['tracking_number']);

    // Simulación de datos de rastreo (en un caso real, aquí deberías consultar a una base de datos o API)
    $tracking_data = [
        "10012250030" => [
            "status" => "Su envio se encuentra en movimiento en Ruta y estara muy pronto en su destino",
            "estimated_delivery" => "03 de octubre de 2024 Hora 05:22",
        ],
        "654321" => [
            "status" => "Entregado",
            "delivery_date" => "03 de octubre de 2024 Hora : 05:22",
        ],
    ];

    // Verificar si el número de seguimiento existe
    if (array_key_exists($tracking_number, $tracking_data)) {
        $status = $tracking_data[$tracking_number]['status'];
        $estimated_delivery = $tracking_data[$tracking_number]['estimated_delivery'] ?? '';
        $delivery_date = $tracking_data[$tracking_number]['delivery_date'] ?? '';
    } else {
        $status = "Número de seguimiento no encontrado.";
        $estimated_delivery = '';
        $delivery_date = '';
    }
} else {
    // Redirigir si no se accede al script a través del formulario
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Rastreo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        p {
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Resultados de Rastreo</h1>
    <p><strong>Número de seguimiento:</strong> <?php echo $tracking_number; ?></p>
    <p><strong>Estado:</strong> <?php echo $status; ?></p>
    <?php if ($estimated_delivery): ?>
        <p><strong>Fecha estimada de entrega:</strong> <?php echo $estimated_delivery; ?></p>
    <?php endif; ?>
    <?php if ($delivery_date): ?>
        <p><strong>Fecha de entrega:</strong> <?php echo $delivery_date; ?></p>
    <?php endif; ?>
    <a href="index.html">Volver</a>
</div>

</body>





  


















</html>