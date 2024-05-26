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
            width: 100%; 
            height: auto; 
        }

        
        #bienvenido {
            text-align: center; 
            font-size: 46px; 
            font-weight: bold; 
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

    <?php include('footer.php') ?>
</body>
</html>
