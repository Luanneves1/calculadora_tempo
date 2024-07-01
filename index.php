<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora tempo</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $total = $_GET['total'] ?? 0;
    $sobra = $total;
    //semana
    $semana = (int)($total / 604800);
    $sobra = $sobra % 604800;
    //Dia
    $dia = (int)($sobra / 86400);
    $sobra =  $sobra % 86400;
    //Horas 
    $horas =  (int)($sobra / 3600);
    $sobra =  $sobra % 3600;
    //minutos
    $minutos = (int)($sobra / 60);
    $sobra = $sobra % 60;
    //segundos 
    $segundos =  $sobra;


    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Calculadora de tempo</h1>
            <label for="segundos">Digite um total em segundos?</label>
            <input type="number" value="<?= $total ?>" name="total" min="0">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Seu resultado. </h2>
        <p>Analisando o valor que você colocou de <strong> <?= $total ?> segundos </strong>
            equivalem a: </p>
        <ul>

            <li> <?= $semana ?> Semanas</li>
            <li> <?= $dia ?> Dias </li>
            <li> <?= $horas ?> Horas </li>
            <li> <?= $minutos ?> Minutos </li>
            <li> <?= $segundos ?> Segundos </li>

        </ul>


    </section>

</body>

</html>