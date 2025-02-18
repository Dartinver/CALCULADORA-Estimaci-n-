<?php
    include ('db.php');
    if(!empty($_POST['con'])){
        $con = ($_POST['con']*0.01);
        $dne = $_POST['dne'];
    }
    $querys = "SELECT SUM(muestra) FROM muestras";
    $queryp = "SELECT count(muestra) FROM muestras";
    $promedi = mysqli_query($conn, $queryp);
    $promedio = mysqli_query($conn, $querys);

    $query = "SELECT * FROM muestras";
    $S=0;
    
    $pro = mysqli_fetch_array($promedio);
    $proq = mysqli_fetch_array($promedi);

    $P = $pro['0']/$proq['0'];

    $select = mysqli_query($conn, $query);
    echo "<a href='index.php'><button>Inicio</button></a>";
    echo "<h2>Muestra (n): ".$proq['0']."</h2>";
    echo "<h2>Nivel de Confianza (NC): ".$con."</h2>";
    echo "<h2>Frecuencia de distribucion(Zalpha/2): ".($dne)."</h2>";
    echo "<h2>Media Muestral: ".round($P,2)."</h2>";
    while($rows = mysqli_fetch_array($select)){ 
        $S = pow(($rows['MUESTRA']-$P),2)+$S;
    }
    $S = $S/($proq['0']-1);
?>
<h2 style="color:blue">Desviacion Estandar: <?php echo round(sqrt($S),2); ?></h2>
<h2 style="color:blue">Intervalo Menor que la media (< u): <?php echo round($P-($dne*(sqrt($S)/sqrt($proq['0']))),2); ?></h2>
<h2 style="color:blue">Intervalo Mayor que la media (> u): <?php echo round($P+($dne*(sqrt($S)/sqrt($proq['0']))),2); ?></h2>
