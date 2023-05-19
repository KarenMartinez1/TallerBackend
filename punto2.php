<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title></title>
</head>
<body>
    <div class="card">
        <h2> DIME TU EDAD </h2>
        
        <form action="" method="POST"> 
        <div class="y">
        <div class="column">
            <label>Edad</label>
            <input type="number" placeholder="Ingresa tu edad" name="edad"/>
        </div>
        </div>
        <div class="column">
        <h3>  <?php 
            $resultado="";
            if(isset($_POST['enviar'])){
                $edad = intval($_POST['edad']);

                if($edad<18){
                    $resultado="Menor de edad (-18)";
                }
                else{
                    $resultado="Mayor de edad (+18)";
                }
        
            }
            echo $resultado; ?></h3>
        </div>
        <div class="buttons-group">
            <button type="submit" name="enviar">Enviar</button>
        </div>
    </form>
   </div>
</body>
</html>