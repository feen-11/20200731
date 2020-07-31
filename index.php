<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/Todo.php');


$todoApp = new \MyApp\Todo();
$todos = $todoApp->getAll();

// var_dump($todos);
// exit;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>
<body>
  <header>
    <h1>みんなの日報</h1>
    <form action="" method="post">
      <textarea name="" id="" placeholder="今日は何があった？"></textarea>
      <input type="submit" value="投稿">
    </form>
  </header>

  <main>
    <section>
      <ul>
      <?php foreach($todos as $todo) :?>
        <li>
          <h2><?php echo h($todo->title); ?></h2>
          <p><?php echo h($todo->body); ?></p>
        </li>
      <?php endforeach; ?>
      </ul>
    </section>
  </main>
</body>
</html>
