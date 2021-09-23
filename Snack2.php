<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php $students = [
    ['Pasquale', 'Raso', [4, 9, 7, 4, 6]],
    ['Lucia', 'Rossi', [2, 8, 5, 7, 3]],
    ['Francesco', 'Serra', [5, 5, 5, 7, 8]],
    ['Girolamo', 'Gorgore', [2, 3, 10, 10, 10]],
]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <ul>
    <?php foreach ($students as $student): ?>
    <li>
       Nome: <b><?php echo $student[0]; ?></b>
    </li>
    <li>
      Cognome: <b><?php echo $student[1]; ?></b>
    </li>
    <li>
     Media: <?php $somma = 0; ?>
      <?php foreach ($student[2] as $voto): ?>
      <?php $somma += $voto; ?>
      <?php endforeach; ?>
      <b><?php
      $somma = $somma / 5;
      echo floor($somma);
      ?></b>
    </li>
    <br>
    <?php endforeach; ?>
</ul>
</body>
</html>