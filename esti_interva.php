<?php
    include 'db.php';

    // Querys o consultas realizadas:
    $query = "SELECT * FROM muestras";                  //Todos los registros de muestras

    //Funciones de los querys:
    $select = mysqli_query($conn, $query);              //Llamado de todos los registros   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<a href="index.php"><button>Inicio</button></a>
    <div>
        <h1>Estimacion Por Intervalo</h1>
        <h2>Ingrese los datos para su muestra:</h2>
        <form action="insert.php" method="POST">
            <input type="float" name="muestra" autofocus>
            <input type="submit" name="send">
        </form>
    </div>
    <div>
        <table>
            <br>
            <?php  
                while($rows = mysqli_fetch_array($select)){ 
                    echo $rows['MUESTRA']."<br>";
                }
            ?>
            <br>
        </table>
    </div>
    <div>
    <b>Una vez termine de ingresar los datos de su muestra, coloque el intervalo a buscar. Ej:Busca el porcentaje de niños menores a 10 años en un salon:</b><br>
        <form action="resp_interva.php" method="POST">
                <label>Nivel de confianza: </label><input type="float" name="con" required><br>
                <label>Distribucion Normal Estandar Inversa: </label><input type="float" name="dne" required><br>
                <input type="submit" name="var" value="Calcular varianza Muestral">
        </form>
        <br><br>
        <form action="clean.php" metho="POST">
                <input type="submit" name="clea" value="Limpiar Muestra" id="clean">
        </form>
    </div>
    
</body>
</html>