<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STAR OF DAVID</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="align">
  <div class="grid"><center>
      <h2 class = "neon">Midterm</h2>
    <form action="index.php" method="POST" class="form login">
      <div class="form_field">
        <label>Enter Odd Number above 6:
      <span class="hidden"></span></label>
        <input id="number" type="text" name="number" value="<?php if(!empty($_POST['number'])){echo $_POST['number'];} ?>" class="form_input" required>
      </div>
      <br>
      <div class="form_field">
        <input name = "form" type="submit" value="submit">
      </div>
      <div class="text--center">
<pre>
      <?php
      function DrawStarOfDavid($number) {
          $pattern = "";
          $rows = $number - 2;
          $half = floor($rows / 2);
          for ($i = 0; $i < $rows; $i++) {
              $spaces = abs($i - $half) + 1;
              // space around 21012
              for ($j = 0; $j < $number; $j++) {
                if (($i == $half) &  ($j < 1 | $j >= $number - 1) |
                    ($j < $spaces | $j >= $number - $spaces) &
                    !($i == ($half - 1) | $i == ($half + 1))) {
                  $pattern .= "_";
                }
                else {
                  $pattern .= "*";
                }
              }
              $pattern .= "\n";
          }
          return $pattern .= "\n";
        };

      if(!empty($_POST['number'])) {
      if (isset($_POST["form"])) {
        $number = $_POST['number'];
        if (!(($number % 2 == 1) & ($number > 6))) {
          echo "<h2> Input Odd Numbers greater than 6  </h2></br>";
        }
        else {
          echo "<br><p class='pattern'>";
          echo DrawStarOfDavid($number);
          echo "</p>";
        }
    }
  }
      ?>
            </center>
</pre>
    </div>
</form>
</body>
    </html>