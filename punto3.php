<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title></title>
</head>
<body>
    <div class="card">
        <h2> DATOS USUARIO </h2>
        
        <form action="" method="GET"> 
        <div>
        <div class="margin-input">
            <label>Nombre</label>
            <input type="text" placeholder="Ingresa tu nombre" name="nombre"/>
        </div>
        <div class="margin-input">
            <label>Appelido</label>
            <input type="text" placeholder="Ingresa tu apellido" name="apellido"/>
        </div>
        <div class="margin-input">
            <label>Número de cedula</label>
            <input type="number" placeholder="Ingresa el número de cedula " name="cedula"/>
        </div>
        </div>
        <div class="buttons-group">
            <button type="submit" name="enviar">Enviar</button>
            <button type="reset">Limpiar</button>
        </div>
    </form>
<br>
    <?php 
    $nombre="";
    $apellido="";
    $cedula="";
        $resultado=0;
        if(isset($_GET['enviar'])){
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cedula'];

        }
        
        echo "Nombre: ".$nombre. "<br>"; 
        echo "Apellido: ".$apellido. "<br>";
        echo "Número de cedula: ".$cedula. "<br>";?>
   </div>
</body>
</html>