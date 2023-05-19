<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title></title>
</head>
<body>
    <div class="card">
        <h2> CALCULA TU EDAD </h2>
        
        <form action="" method="POST"> 
        <div class="margin-input">
            <label>Fecha de nacimiento</label>
            <input type="date" placeholder="Ingresa tu fecha" name="nacimiento"/>
        </div>
        <div class="buttons-group">
            <button type="submit" name="enviar">Enviar</button>
            <button type="reset">Limpiar</button>
        </div>
    </form>
<br>
    <?php 
    $nacimiento="0-0-0";
    $diferencia='0-0-0';
    $edad=0;
    $mes=0;
    $dia=0;
        $resultado=0;
        if(isset($_POST['enviar'])){
            $nacimiento = new DateTime ($_POST['nacimiento']);
            $fechahoy = new DateTime (date("y-m-d"));
            $diferencia = $nacimiento->diff($fechahoy);
            $edad= $diferencia->y;
            $mes= $diferencia->m;
            $dia= $diferencia->d;

        }
        
        echo "Años: ".$edad. "<br>";
        echo "Meses: ".$mes. "<br>";
        echo "Días: ".$dia. "<br>";   ?>
   </div>
</body>
</html>