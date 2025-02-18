<?php
    include ('db.php');
    if(!empty($_POST['desde'])){
        $desde = $_POST['desde'];
        $hasta = $_POST['hasta'];
    }
    $queryc = "SELECT count(muestra) FROM muestras WHERE muestra >= '$desde' AND muestra <= '$hasta'";
    $querys = "SELECT SUM(muestra) FROM muestras";
    $queryp = "SELECT count(muestra) FROM muestras";
    $promedi = mysqli_query($conn, $queryp);
    $promedio = mysqli_query($conn, $querys);
    $proporcion = mysqli_query($conn, $queryc);

    $query = "SELECT * FROM muestras";
    $S=0;
    
    $pro = mysqli_fetch_array($promedio);
    $proq = mysqli_fetch_array($promedi);
    $prop = mysqli_fetch_array($proporcion);

    $P = $pro['0']/$proq['0'];

    $select = mysqli_query($conn, $query);
    echo "<a href='index.php'><button>Inicio</button></a>";
    echo "<h2>Muestra (n): ".$proq['0']."</h2>";
    echo "<h2>Media Muestral: ".round($P,2)."</h2>";
    while($rows = mysqli_fetch_array($select)){ 
        $S = pow(($rows['MUESTRA']-$P),2)+$S;
    }
    $S = $S/($proq['0']-1);
?>
<h2 style="color:red">Varianza Muestral: <?php echo round($S,2); ?></h2>
<h2 style="color:blue">Desviacion Estandar: <?php echo round(sqrt($S),2); ?></h2>
<?php echo "<h2>Proporcion Muestral: ".round((($prop['0']/$proq['0'])/0.01),2)."%</h2>";?>
