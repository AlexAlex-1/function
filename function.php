<html>
<head>
  <title>function</title>
  <link href="/prog.css" rel="stylesheet">
</head>
<body background="Fon.jpg">
  <div class="block1">
    <form action="/index.php">
      <input id=formm type="submit" value="Назад!">
      </form>
  <form action="function.php">
    <input id=formm type="submit" value="Перезагрузить!">
    </form>
  <form method="post" action="function.php">
    <input id=form name="nomber" type="text" maxlength="1" value="" placeholder="Введите номер программы" size="30" autocomplete="off"/>
    <input id=button type="submit" value="Вперёд!">
  </form>
  <pre>
  <?php
  $prog=$_POST['nomber'];
    if ($prog == 1) {
      include("prog1.php");
    }
    if($prog == 2) {?>
      <a href="prog2.php">prog2</a>
<?php
  }
    if ($prog == 3) {
      ?>
        <a href="prog.php">prog3</a>
  <?php
    }
    if($prog == 4){
    }
    if($prog == 5){
    }
   ?>
 </pre>
  </div>
</body>
</html>
