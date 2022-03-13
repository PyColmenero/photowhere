<?php
$place_name = $_GET['n'];
$place_country = $_GET['c'];
$place_socialmedia = $_GET['s'];
$place_views = $_GET['v'];
$place_photos = $_GET['p'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            text-align: center;
            margin: 0;
            margin-top: 1rem;
        }

        form {
            padding-top: 1rem;
            width: 90%;
            margin: 0 auto;
        }

        input,
        select {
            width: 100%;
            padding: .5rem;
            margin: 1rem 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: .5rem 0;
        }

        #file {
            background-color: #000010;
            width: 100%;
            padding: 2rem;
            color: whitesmoke;
            display: block;
            box-sizing: border-box;
        }

        .noinput {
            border: 0;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?v=5"></script>

</head>

<body>
    <h1>New Place</h1>
    <form action="./php/new_place.php" method="POST">
        <input type="text" name="namePlace" placeholder="name" autocomplete="off" value='<?php echo $place_name; ?>'>
        <input type="text" name="description" placeholder="description">
        <input type="text" name="latitude" placeholder="latitude" id="lat" class="noinput">
        <input type="text" name="longitude" placeholder="longitude" id="lng" class="noinput">
        <input type="text" name="url" placeholder="GOOGLE MAPS URL" id="url">
        <input type="text" name="countryPlace" placeholder="country" value='<?php echo $place_country; ?>'>
        <input type="text" name="cityPlace" placeholder="city" value="">
        <select name="type" id="types-sl">
            <option value="Acantilado">Acantilado</option>
            <option value="Agua">Agua</option>
            <option value="Abandonado">Abandonado</option>
            <option value="Bar">Bar</option>
            <option value="Basico">Básico</option>
            <option value="Bosque">Bosque</option>
            <option value="Ciudad">Ciudad</option>
            <option value="Castillo">Castillo</option>
            <option value="Carretera">Carretera</option>
            <option value="Color">Color</option>
            <option value="Cascada">Cascada</option>
            <option value="Desierto">Desiertos</option>
            <option value="Estátua">Estátua</option>
            <option value="Embalse">Embalse </option>
            <option value="Faro">Faro</option>
            <option value="Graffiti">Graffiti</option>
            <option value="Historico">Historico</option>
            <option value="Jardines">Jardines</option>
            <option value="Local">Local</option>
            <option value="Lujo">Lujo</option>
            <option value="Museo">Museo</option>
            <option value="Monumentos">Monumentos</option>
            <option value="Montaña">Montaña</option>
            <option value="Molinos">Molinos</option>
            <option value="Naturaleza">Naturaleza</option>
            <option value="Nieve">Nieve</option>
            <option value="Playa">Playa</option>
            <option value="Puentes">Puentes</option>
            <option value="Primaveral">Primaveral</option>
            <option value="Plaza">Plaza</option>
            <option value="Pueblo">Pueblo</option>
            <option value="Rocas">Rocas</option>
            <option value="Rural">Rural</option>
            <option value="nolight">Sin contaminación luminica</option>
            <option value="Urbano">Urbano</option>
            <option value="Vistas">Vistas</option>
            <option value="Vanguardia">Vanguardia</option>
        </select>
        <input type="text" name="types" placeholder="type" id="types" class="noinput">

        <input type="file" name="photo" id="file">
        <input type="text" name="photos" placeholder="photos" id="photos" class="noinput" value='<?php echo $place_photos; ?>'> <br>

        <input type="text" name="id" placeholder="id" value="2">
        <input type="text" name="views" placeholder="views" value='<?php echo $place_views; ?>'>
        <input type="text" name="insta" placeholder="insta" value='<?php echo "i" . $place_socialmedia; ?>'>
        <button>Crear</button>
    </form>

    <script src="./js/photo_input.js?v=5"></script>

    <script>
        var inputs = $("input");


        $(document).ready(function() {
            inputs.each(function(index, value) {
                if ($(this).val().length == 0) $(this).css("border", "3px solid red");
            });

            $("input").on("keyup", function() {

                inputs.each(function(index, value) {
                    if ($(this).val().length == 0) {
                        $(this).css("border", "3px solid red");
                    } else {
                        $(this).css("border", "1px solid grey");
                    }
                });
            });
            
        });
    </script>

</body>

</html>

<!-- 
añadir tags nuevas
 -->