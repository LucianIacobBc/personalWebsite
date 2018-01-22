<!DOCTYPE html>
<html>
  <head>
    <title>Lucian Iacob personal Website</title>
  </head>
  <style>
  body {
    background: url("assets/images/main2.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
  <body>
    <?= $app; ?>
    <?php foreach ($todoList as $item): ?>
      <li><?=$item['name'] ?> status: <?=($item['completed'] ? 'completed': 'incomplete');?></li>
    <?php endforeach; ?>
    <h4><?=$titles[0]?></h4>
    <?php foreach ($myPerson as $key => $value): ?>
      <li><?=$key ?>: <?=$value ?></li>
    <?php endforeach; ?>
  </body>
</html>
