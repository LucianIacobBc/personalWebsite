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
  
    <?php foreach ($todoList as $item): ?>
      <li><?=$item['name'] ?> status: <?=($item['completed'] ? 'completed': 'incomplete');?></li>
    <?php endforeach; ?>
    <h4><?=$titles[0]?></h4>
    <?php foreach ($PersonData[0] as $key => $value): ?>
      <li><?=$key ?>: <?=$value ?></li>
    <?php endforeach; ?>
  <h4> }</h4>
  </body>
</html>