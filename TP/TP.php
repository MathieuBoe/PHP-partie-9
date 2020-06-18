<?php

$title = 'TP';

include 'header.php'; ?>

<?php 
$calmonth = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
?>
<form action="" method="POST">

<Select name="months" onchange="submit();">
<?php for ($months=1; $months <=12 ; $months++) { ?>
  <option value="<?= $months ?>">
  <?= $months ?>
  </option>
<?php } ?>  
</Select>


<Select name="years" onchange="submit();">
<?php for ($years=1940; $years <=2030 ; $years++) { ?>
  <option value="<?= $years ?>">
  <?= $years ?>
  </option>
<?php } 
    if($i == date('Y'))
    {
      $selected = ' selected="selected"';}
$years = "";?>  
</Select>
</form>


<table>
  <thead>
    <tr><?= $_POST['years']?></tr>
  </thead>
  <tbody>
    <tr><?php for ($i=1; $i <= 7; $i++) { ?>
      <td><?= $i ?></td> 
      <?php } ?>
    </tr>
    <tr><?php for ($i=8; $i <= 14; $i++) { ?>
      <td><?= $i ?></td> 
      <?php } ?>
    </tr>
    <tr><?php for ($i=15; $i <= 21; $i++) { ?>
      <td><?= $i ?></td> 
      <?php } ?>
    </tr>
    <tr><?php for ($i=22; $i <= 28; $i++) { ?>
      <td><?= $i ?></td> 
      <?php } ?>
    </tr>
    <tr><?php for ($i=29; $i <= 31; $i++) { ?>
      <td><?= $i ?></td> 
      <?php } ?>
    </tr>
  </tbody>
</table>
<?php


// $o = cal_days_in_month($calendar,$_POST['months'],$_POST['years']);
// echo $o;
include 'footer.php'; ?>