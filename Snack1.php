<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina. -->


<?php function numerirandom()
{
    $numer = rand(1, 15);
    return $numer;
} ?>

<?php
$numerorandoms = [];
while (count($numerorandoms) < 15) {
    $numero = numerirandom();
    if (!in_array($numero, $numerorandoms)) {
        $numerorandoms[] = $numero;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
</head>
<body>
<? foreach ($numerorandoms as $numerorandom) { ?>
<p><?php echo $numerorandom; ?></p>
<?php }
?>
</body>
</html>