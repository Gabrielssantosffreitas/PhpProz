
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/img/icon.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matematicos</title>
</head>
<body>
    <?php
        $numero1 = $_GET['n1'];
        $numero2 = $_GET['n2'];
        $mensage = "";
        $soma = 0;
        $divisao = 0;
        $mutiplicacao = 0;
        $subtracao = 0;
        $restoDaDivisao = 0;
    ?>

    <?php 
        if ($numero1 == null || $numero2 == null) {
            $mensage = "por favor digite  no formulario abaixo para calcular os numeros";
            
        }else{
            $mensage = "Aqui esta os numeros calculados";
            $soma  = ($numero1 + $numero2);
            $subtracao  = ($numero1 - $numero2);
            $mutiplicacao  = ($numero1 * $numero2);
            $divisao  = ($numero1 / $numero2);
            $restoDaDivisao  = ($numero1 % $numero2);
        }
    ?>





    <h1> Seja Bemvido a pagina dos Operadores Matematiocos em php </h1>

   

    <h2> <?php echo  $mensage  ?> </h1>
    <p><?php echo " os numeros sao n1: $numero1 e n2: $numero2"?></p>
    <p> <?php echo "a soma e $soma  a subtracao e $subtracao e mutiplicacao e $mutiplicacao e divisao e $divisao e resto e $restoDaDivisao" ?></p>


    <form action="operadoresMatematicos.php" method="get">
        <input type="number" name="n1" id="numero1">
        <input type="number" name="n2" id="numero2">
        <input type="submit" value="Enviar">
    </form>


</body>
</html>