<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastCar</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <style>
        #video-container {
            width: 80%;
            margin: 20px auto;
            overflow: hidden;
        }

        video {
            width: 50%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        #bienvenido {
            text-align: center;
            font-size: 46px;
            font-weight: bold;
        }

        #texto-bienvenida {
            text-align: justify;
            font-size: 24px;
            margin-top: 20px;
            line-height: 1.5;
            padding: 0 20px; 
            margin-left: 200px;
            margin-right: 200px;
            color:black;
        }
    </style>
</head>
<body>
    <?php include("header.php");?>

    <div id="video-container">
        <video controls autoplay muted loop>
            <source src="assets/images/featured-cars/carvideo.mp4" type="video/mp4">
            Tu navegador no admite el elemento de video.
        </video>
    </div>

    <p id="bienvenido">Bienvenido a Autostock</p>

    
    <p id="texto-bienvenida">
        Explora nuestra selección de autos de alta calidad y encuentra tu próximo vehículo. En Autostock, nos apasiona ofrecerte las mejores opciones para que encuentres el coche de tus sueños. Nuestro equipo de expertos en automóviles ha seleccionado cuidadosamente cada vehículo en nuestro inventario para garantizar que cumpla con los más altos estándares de calidad y confiabilidad. Ya sea que estés buscando un sedán elegante, un SUV espacioso o un deportivo emocionante, estamos aquí para ayudarte a encontrarlo.
        <br><br>
        Además de nuestra amplia variedad de autos, también ofrecemos servicios de financiamiento flexibles y opciones de garantía para que puedas conducir con total tranquilidad. Explora nuestro catálogo en línea o visítanos en nuestra ubicación física para ver los autos en persona. ¡Te damos la bienvenida a la familia Autostock!
    </p>

    <?php include('footer.php') ?>
</body>
</html>