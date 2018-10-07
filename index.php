<?php
  // This is a line comment
  # This is another line comment

  /*
    This is a multi line comment
  */

  $hello = "Hello "; // This is a variable
  $_hello = "Hello Again "; // It has to start with a letter or underscore
  $rules = array("Arrays are setup like this", "You must use semicolons at the end of every line");

  /* echo "Echo ";
  echo ("Echo with Brackets ");
  echo $_hello;
  print "Echo ";
  print ("Echo with Brackets ");
  print $_hello;

  var_dump("This is from a var dump"); // This is for debugging/testing - spits out typeof, length and displays it
  var_dump($rules); */

  # die("This is from a die"); // This is for debugging/testing - nothing below the die will be rendered

  $list = array("apples", "bananas", "pears")

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Using PHP in Doc -->
    <h1 class="<?php echo "blue"; ?>">This is running from a PHP file</h1>
    <?php echo "<h2>This is from an echo</h2>"; ?>
    <h2><?php echo $hello; ?></h2>
    <h3><?= $_hello; ?></h3>

    <!-- Ways to loop with PHP -->
    <ul>
      <?php
        foreach ($list as $listItem) {
          echo "<li>".$listItem."</li>";
        };
     ?>
    </ul>

    <ul>
      <?php foreach ($list as $listItem): ?>
        <li><?= $listItem ?></li>
      <?php endforeach; ?>
    </ul>

    <!-- Scores Start -->
    <?php
      $scores = array(0, 58, 15, 89, 100, 45, 54);
    ?>
    <h2>The total number of results are <?= count($scores); ?></h2>
    <ul>
      <?php foreach ($scores as $scoreItem): ?>
        <li>This person got <?= $scoreItem ?></li>
      <?php endforeach ?>
    </ul>
    <?php
      $totalScore = 0;
      foreach ($scores as $score) {
        $totalScore += $score;
      }
      $averageScore = $totalScore / count($scores)
    ?>
    <h3>The average score is <?= $averageScore ?></h3>
    <?php if ($averageScore > 50): ?>
      <p>The class has passed</p>
    <?php else: ?>
      <p>The class has failed</p>
    <?php endif; ?>

  </body>
</html>
