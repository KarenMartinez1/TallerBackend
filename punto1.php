<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title></title>
</head>
<body>
    <div class="card">
        <h2> CALCULADORA </h2>
        
        <form action="" method="POST"> 
        <div class="y">
        <div class="column">
            <label>Primer número</label>
            <input type="number" placeholder="Ingresa un número" name="n1"/>
        </div>
        <div class="column x">
            <select name="operador">
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">*</option>
                <option value="4">/</option>
            </select>
        </div>
        <div class="column">
            <label>Segundo número</label>
            <input type="number" placeholder="Ingresa un número " name="n2"/>
        </div>
        </div>
        <div class="column">
        <label>Resultado</label>
            <textarea id="resultado" readonly>
            <?php 
            $resultado=0;
            if(isset($_POST['operar'])){
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $operador = $_POST['operador'];

                switch($operador){
                    case '1':
                        $resultado= $n1+$n2;
                        break;
                    case '2':
                        $resultado = $n1-$n2;
                        break;
                    case '3':
                        $resultado = $n1*$n2;
                        break;
                    case '4':
                        $resultado = $n1/$n2;
                        break;
                }
            }
            
            echo $resultado; ?></textarea>
        </div>
        <div class="buttons-group">
            <button type="submit" name="operar">Operar</button>
            <button type="reset">Limpiar</button>
        </div>
    </form>
   </div>
</body>
</html>